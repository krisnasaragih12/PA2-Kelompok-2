<?php


namespace App\Http\Controllers;
use PDF;
use Session;
use App\Models\Cart;
use App\Models\Shop;
use App\Models\Order;
use App\Models\Order_p;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Dompdf\Dompdf;

class OrderController extends Controller
{
    public function index(Request $request){
        $order = Order::select('orders.id', 'orders.id_customer', 'orders.nama_customer','orders.alamat','orders.status', 'orders.payment_method','orders.gambar')->get()->toArray();

        return view('admin.order');
    }

    public function detail(Request $requets, $id){
        $order = Order::find($id)->toArray();
        $detail_pesanan = Order_p::select('order_ps.id', 'order_ps.id_product','order_ps.id_order','order_ps.quantity','order_ps.harga','order_ps.total_harga','shop.nama','shop.gambar')->join('shop', 'order_ps.id_product','=','shop.id')->where('order_ps.id_order',$order['id'])->get()->toArray();
        $order['detail_pesanan'] = $detail_pesanan;


        return view('admin.detail_order', compact('order'));
    }

    public function getlistorder(Request $request){
        $data = array();
        $order = Order::select('orders.id', 'orders.id_customer', 'orders.nama_customer','orders.alamat','orders.status', 'orders.payment_method','orders.gambar')->get()->toArray();
        
        foreach($order as $row){
            $order_p = Order_p::select('order_ps.total_harga')->where('order_ps.id_order', $row['id'])->get()->toArray();
            $row['total'] = 0;
            foreach($order_p as $r){
                $row['total'] += $r['total_harga'];
            }
            $data[] = $row;
        }
        return $data;
    }

    public function pembayaran(Request $request){
        $user = Session::get('set_customerdata')->toArray();

        return view('customer.pembayaran', compact('user'));
    }

    public function checkout(Request $request){
        $request->validate([
            'foto' => 'image|mimes:jpeg,jpg,png', // Hanya menerima file gambar dengan ekstensi jpg, jpeg, atau png
        ]);
        
        $post   = $request->post();

        $idorder = date('YmdHis');
 
        $order = new Order;
        $order->id  = $idorder;
        $order->id_customer  = $post['id_customer'];
        $order->nama_customer   = $post['ltn__name'];
        $order->telepon         = $post['ltn__phone'];
        $order->alamat          = $post['alamat'];
        $order->catatan         = $post['ltn__message'];
        $order->payment_method  = $post['payment_method'];
        $order->pemberitahuan   = 'Pesanan baru dengan ID ' . $order->id . ' menunggu konfirmasi Admin';
        $order->status          = 1;


        $image = $request->file('foto');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $order->gambar          = $name;
        $order->save();

        $cart = Cart::select('carts.id', 'carts.id_product','carts.id_customer','quantity','shop.nama','shop.gambar', 'shop.harga')->join('shop', 'carts.id_product','=','shop.id')->where('carts.id_customer', $post['id_customer'])->get()->toArray();

        foreach($cart as $row){
            $order_p = new Order_p;
            $order_p->user_id = Auth::user()->id;
            $order_p->id_product = $row['id_product'];
            $order_p->id_order   = $idorder;
            $order_p->quantity   = $row['quantity'];
            $order_p->harga      = $row['harga'];
            $order_p->total_harga= $row['quantity']*$row['harga'];
            $order_p->save();

            $cart = Cart::find($row['id']);        
            $cart->delete();
        }
        return redirect('shop')->with('success', 'Berhasil Melakukan pembayaran!');
    }


    public function updatestatus(Request $request, $id)
{
    $sts = $request->get('status');

    $data_order = Order::find($id);

    if ($sts == 2) {
        $order_p = Order_p::select('order_ps.id', 'order_ps.id_product', 'order_ps.quantity')->where('order_ps.id_order', $id)->get()->toArray();

        foreach ($order_p as $row) {
            $shop = Shop::find($row['id_product']);
            $shop->stok = $shop->stok - $row['quantity'];
            $shop->save(); // Menggunakan metode save() untuk menyimpan perubahan
        }
        $data_order->status = 2;
        $data_order->save(); // Menggunakan metode save() untuk menyimpan perubahan

        $statusMessage = 'Disetujui';
    } else {
        $data_order->status = 3;
        $data_order->save(); // Menggunakan metode save() untuk menyimpan perubahan

        $statusMessage = 'Ditolak';
    }

    if ($statusMessage === 'Disetujui') {
        $data_order->pemberitahuan = 'Pesanan anda Telah Diterima'; // Menggunakan $data_order->id untuk mendapatkan ID pesanan
    } else {
        $data_order->pemberitahuan = 'Pesanan anda Ditolak'; // Menggunakan $data_order->id untuk mendapatkan ID pesanan
    }

    $data_order->save(); // Menggunakan metode save() untuk menyimpan perubahan

    return true;
}


    // public function updatestatus(Request $request, $id){
    //     $sts    = $request->get('status');

    //     $data_order = Order::find($id);

       
    //     if($sts == 2){
    //         $order_p = Order_p::select('order_ps.id','order_ps.id_product','order_ps.quantity')->where('order_ps.id_order',$id)->get()->toArray();

    //         foreach($order_p as $row){
    //             $shop = Shop::find($row['id_product']);
    //             $shop->stok = $shop->stok - $row['quantity'];
    //             $shop->update();
    //         }
    //         $data_order->status = 2;
    //         $data_order->update();

    //         true;

    //     }else{
    //         $data_order->status = 3;
    //         $data_order->update();

    //         return true;
    //     }

    // }

//     public function downloadPDF($id)
// {
//     $order = Order_p::find($id); // Ganti dengan model dan kolom yang sesuai dengan aplikasi Laravel Anda

//     if (!$order) {
//         abort(404);
//     }

//     $pdf = PDF::loadView('akun', compact('order'));

//     return $pdf->download('order_' . $id . '.pdf');
// }
    public function downloadPDF(Order_p $order_p, $id)
    {
        // Mendapatkan data pesanan berdasarkan ID

        $order = Order::findOrFail($id);

        $orders = Order::join('order_ps', 'orders.id', '=', 'order_ps.id_order')
            ->join('shop', 'order_ps.id_product', '=', 'shop.id')
            ->where(function ($query) use ($order) {
                $query->where('orders.id', '=', $order->id)
                    ->orWhere('shop.id', '=', $order->id);
            })
            ->get();
        // $shop = Shop::where('id' , '=' , $order->id_product)->get();
        // dd($orders);

        // $order = 
        // dd($orders);
        // Membuat objek Dompdf
    
        $html = view('customer.pdf', compact('order', 'orders'))->render();

        // Menghasilkan view PDF
        $pdf = PDF::loadHTML($html);

        // Mengatur nama file yang akan didownload
        $filename = 'MyOrder' . $order_p->id . '.pdf';

        // Mengirimkan file PDF sebagai respons
        return $pdf->download($filename);
    }

    public function hapus_notif($id){
        $order = Order::find($id);
        
        $order->pemberitahuan = NULL;
        $order->update();

        return back();

    }
}