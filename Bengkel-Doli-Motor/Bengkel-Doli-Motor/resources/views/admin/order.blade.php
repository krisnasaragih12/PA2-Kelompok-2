<x-admin-layout>
    @section('title', 'Order')
    
    <div class="page-header">
        <h1 class="page-title">Order</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Order</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered border text-nowrap mb-0" id="new-edit">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">ID Pesanan</th>
                                    <th class="text-center">Nama Pemesan</th>
                                    <th class="text-center">Harga Pesanan</th>
                                    <th class="text-center">Payment Method</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Bukti Pembayaran</th>
                                <th name="bstable-actions"  class="text-center">Actions</th></tr>
                            </thead>
                            <tbody id="listdata">
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>

<script type="text/javascript">
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        showlist();

        
       
        function showlist() {
    $.ajax({
        type: 'GET',
        url: `<?= asset('admin/listorder/') ?>`,
        data: '',
        contentType: "application/json",
        success: function (data) {
            $('#listdata').empty();
            let num = 1; // Mengatur nomor urutan dari 1
            $.each(data.reverse(), function (index, val) { // Membalik urutan data menggunakan reverse()
                let tot = formatRupiah(val.total.toString(), 'Rp.');

                let badge = '';
                if (val.status == '1') {
                    badge = '<p class="text-warning">Menunggu Konfirmasi</p>';
                } else if (val.status == '2') {
                    badge = '<p class="text-success">Pesanan Berhasil</p>';
                } else {
                    badge = '<p class="text-danger">Pesanan Ditolak</p>';
                }
                let append = `<tr>
                        <td class="text-center">${num++}</td>
                        <td class="text-center">${val.id}</td>
                        <td class="text-center">${val.nama_customer}</td>
                        <td class="text-center">${tot}</td>
                        <td class="text-center">${val.payment_method}</td>
                        <td class="text-center">${badge}</td>
                        <td style="text-align: center;">
                            <div class="mini-cart-img">
                                <img src="{{ asset('images/') }}/${val.gambar}" alt="Image" style="max-width: 200px; max-height: 200px;">
                            </div>
                        </td>
                        <td name="bstable-actions" class="text-center">
                            <div class="btn-list">
                                <div class="btn-group mt-2 mb-2 ms-2">
                                    <a title="Detail Pesanan" href="{{ asset('admin/order/') }}/${val.id}" class="btn  btn-sm btn-primary"><span class="fe fe-eye"> </span></a>
                                    ${val.status == 1 ? `<button onclick="confirm('${val.id}')" title="Konfirmasi Pembayaran" id="btnConfirm" type="button" class="btn  btn-sm btn-success">
                                        <span class="fe fe-check"> </span>
                                    </button>
                                    <button title="Tolak Pembayaran" onclick="reject('${val.id}')" id="btnReject" type="button" class="btn  btn-sm btn-danger">
                                        <span class="fe fe-x"> </span>
                                    </button>` : ``}
                                </div>
                            </div>
                        </td>
                    </tr>`;
                $('#listdata').append(append); // Menggunakan append() untuk menambahkan data di akhir
            })
        }
    });
}

        
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, "").toString(),
            split = number_string.split(","),
            sisa = split[0].length % 3,
            hasil = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
            separator = sisa ? "." : "";
            hasil += separator + ribuan.join(".");
            }

            hasil = split[1] != undefined ? hasil + "," + split[1] : hasil;
            return prefix == undefined ? hasil : hasil ? "Rp. " + hasil : "";
        }

        function confirm(id){
            event.preventDefault();
            Swal.fire({
            title: 'Anda Ingin melanjutkan?',
            text: "Konfirmasi Pembayaran?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            confirmButtonClass: 'btn btn-warning',
            cancelButtonClass: 'btn btn-danger ml-1',
            buttonsStyling: false,
            }).then(function (result) {
            if (result.value) {
                updatestatus(id, 2);
            }
            else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire({
                title: 'Batal',
                text: 'Konfirmasi Pembayaran dibatalkan :)',
                type: 'error',
                confirmButtonClass: 'btn btn-success',
                })
            }
            });
        }

        function reject(id){
            event.preventDefault();
            Swal.fire({
            title: 'Anda Ingin melanjutkan?',
            text: "Tolak Pembayaran?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            confirmButtonClass: 'btn btn-warning',
            cancelButtonClass: 'btn btn-danger ml-1',
            buttonsStyling: false,
            }).then(function (result) {
            if (result.value) {
                updatestatus(id, 3);
            }
            else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire({
                title: 'Batal',
                text: 'Tolak Pembayaran dibatalkan :)',
                type: 'error',
                confirmButtonClass: 'btn btn-success',
                })
            }
            });
        }

        function updatestatus(id, status){
            $.ajax({
                type : 'GET',
                url  : `<?= asset('admin/updatestatus/') ?>/${id}`,
                data : {
                        "status": status
                    },
                contentType: "application/json",
                success: function(data){
                    showlist();
                }
            })
        }

    </script>