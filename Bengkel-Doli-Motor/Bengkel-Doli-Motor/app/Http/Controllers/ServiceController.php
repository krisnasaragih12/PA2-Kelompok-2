<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index(){
        $service = Service::all();        
        return view('admin.service', compact('service'));
    }

    public function index_addService(){
        return view('customer.service');
    }
    public function store_service(Request $request){  
        // dd($request->all());      
        $request->validate([
            'namalengkap' => 'required',
            'layanan' => 'required',
            'nomortelepon' => 'required',
            'tipemobil' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            
        ]);
        $service = new Service;
        $service->user_id = Auth::user()->id;
        $service->namalengkap = $request->namalengkap;
        $service->layanan = $request->layanan;
        $service->nomortelepon = $request->nomortelepon;
        $service->tipemobil = $request->tipemobil;
        $service->tanggal = Carbon::createFromFormat('d/m/Y', Carbon::parse($request->tanggal)->format('d/m/Y'));
        $service->waktu = $request->waktu;
        $service->pemberitahuan = $service->namalengkap .' melakukan boooking service, segera lakukan verifikasi!';
        // dd($asd);
        $service->save();
        return redirect('service')->with('success', 'Pembookingan Berhasil!');
    }

    public function update_status($id, $status){
        if ($status !== 'Disetujui' && $status !== 'Ditolak') {
            return back()->with('error', 'Status Tidak Berhasil Diperbaharui!');
        }
    
        $service = Service::find($id);
        $service->status = $status;
    
        if ($status === 'Disetujui') {
            $service->pemberitahuan = 'Booking service Anda telah diterima';
        } else {
            $service->pemberitahuan = 'Booking service Anda ditolak';
        }
    
        $service->save();
    
        return back()->with('success', 'Status Berhasil Diperbaharui!');
    }

    // public function destroy($id){
    //     $service = Service::find($id);        
    //     $service->delete();

    //     return redirect('/admin/service')->with('error', 'Pemesanan Berhasil Dihapus');
    // }
    public function destroy($id){
        $service = Service::find($id);
        $is_admin = auth()->user()->hasAnyRole(['admin', 'staff']); // periksa apakah pengguna adalah admin atau bukan
    
        $service->delete();
    
        if ($is_admin) {
            // jika pengguna adalah admin, redirect ke halaman admin
            return redirect('/admin/service')->with('error', 'Pemesanan Berhasil Dihapus');
        } else {
            // jika pengguna bukan admin, redirect ke halaman user
            return redirect('/akun')->with('error', 'Pemesanan Berhasil Dihapus');
        }
    }

    public function hapus_notif($id){
        $service = Service::find($id);
        
        $service->pemberitahuan = NULL;
        $service->update();

        return back();

    }
}
