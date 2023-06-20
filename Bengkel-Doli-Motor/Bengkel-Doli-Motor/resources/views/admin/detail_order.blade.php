<x-admin-layout>
    @section('title', 'Detail Order')
    
    <div class="page-header">
        <h1 class="page-title">Detail Order</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/order') }}">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-5">
                                <label for="" style="font-weight:bold">Id Pemesanan</label>
                                </div>
                                <div class="col-lg-7">
                                    <label for="" style=""><?= $order['id']; ?></label>
                                </div>
                                <div class="col-lg-5">
                                <label for="" style="font-weight:bold">Nama Pemesan</label>
                                </div>
                                <div class="col-lg-7">
                                    <label for="" style=""><?= $order['nama_customer']; ?></label>
                                </div>
                                <div class="col-lg-5">
                                    <label for="" style="font-weight:bold">Telepon</label>
                                </div>
                                <div class="col-lg-7">
                                    <label for="" style=""><?= $order['telepon']; ?></label>
                                </div>
                                <div class="col-lg-5">
                                    <label for="" style="font-weight:bold">Alamat</label>
                                </div>
                                <div class="col-lg-7">
                                    <label for="" style=""><?= $order['alamat']; ?></label>
                                </div>
                                <div class="col-lg-5">
                                    <label for="" style="font-weight:bold">Payment Method</label>
                                </div>
                                <div class="col-lg-7">
                                    <label for="" style=""><?= $order['payment_method']; ?></label>
                                </div>
                                <div class="col-lg-5">
                                    <label for="" style="font-weight:bold">Payment Status</label>
                                </div>
                                <div class="col-lg-7">
                                    <label for="" style="">
                                    <?php
                                        if($order['status'] == '1'){
                                            echo "Menunggu Konfirmasi";
                                        }else if($order['status'] == '2'){
                                            echo "Pembayaran Berhasil";
                                        }else{
                                            echo "Pembayaran Gagal";
                                        }
                                    ?>
                                    </label>
                                </div>
                                <div class="col-lg-5">
                                    <label for="" style="font-weight:bold">Catatan</label>
                                </div>
                                <div class="col-lg-7">
                                    <label for="" style=""><?= $order['catatan']; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="" style="font-weight:bold">Bukti Pembayaran</label><br>
                            <img src="{{ asset('images/'.$order['gambar'])}}" class="img-thumbnail" alt="Responsive image" width="180px">
                        </div>
                    </div>
                    <div class="table-responsive pt-4">
                        <table class="table border text-nowrap mb-0" id="new-edit">
                            <thead>
                                <tr>
                                    <th colspan="4">Detail Pesanan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tot = 0;
                                ?>
                                @if(isset($order['detail_pesanan']) && !empty($order['detail_pesanan']))
                                    @foreach($order['detail_pesanan'] as $row)
                                        <?php
                                            
                                            $tot += $row['total_harga'];
                                        ?>
                                        <tr>
                                            <td width="15%" class="text-center"><img class="img-thumbnail" src="{{ asset('images/'.$row['gambar'])}}" alt="Responsive image" width="100px"></td>
                                            <td width="55%"><label for="" style="font-weight:bold">{{$row['nama']}}</label> <br>Rp . {{number_format($row['harga'],2,',','.')}}</td>
                                            <td class="text-center"><label for="" style="font-weight:bold">Jumlah :</label><br>{{$row['quantity']}}</td>
                                            <td><label for="" style="font-weight:bold">Rp . {{number_format($row['total_harga'],2,',','.')}}</label></td>
                                        </tr>
                                    @endforeach
                                @endif
                                <tr>
                                    <td colspan="3"><label for="" style="font-weight:bold">TOTAL PEMBAYARAN</label></td>
                                    <td><label for="" style="font-weight:bold">Rp . {{number_format($tot,2,',','.')}}</label></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>