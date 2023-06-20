<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Session;

class CartController extends Controller
{
    public function index(Request $request){
        $userdata   = Session::get('set_customerdata')->toArray();

        $data = Cart::select('carts.id', 'carts.id_product','carts.id_customer','quantity','shop.nama','shop.gambar', 'shop.harga')->join('shop', 'carts.id_product','=','shop.id')->where('carts.id_customer', $userdata['id'])->get()->toArray();

        

        return view('customer.keranjang', compact(['data','userdata']));
    }

    public function addcart(Request $request){

        $post = $request->post();
        $param = [
            'id_product'    => $post['id_product'],
            'id_customer'   => $post['id_customer'],
            'quantity'      => $post['qty']
        ];
        
        $create = Cart::create($param);

        if($create){
            return redirect('keranjang')->with('success', 'Berhasil Menambahkan keranjang!');
        }else{
            return redirect('keranjang')->with('error', 'Gagal Menambahkan keranjang!');
        }
    }

    public function listdata(Request $request, $id){

        $data = Cart::select('carts.id', 'carts.id_product','carts.id_customer','quantity','shop.nama','shop.gambar', 'shop.harga')->join('shop', 'carts.id_product','=','shop.id')->where('carts.id_customer', $id)->get()->toArray();

        return $data;
    }

    public function updateqty(Request $request, $id){
        
        $qty = $request->get('val');
        $data = Cart::find($id);
        $data->quantity = $qty;
        $data->update();

        return true;
    }

    public function destroy(Request $request, $id){
        $shop = Cart::find($id);        
        $shop->delete();

        return true;
    }
}
