<x-admin-layout>
    @section('title', 'Shop')
    
    <div class="page-header">
        <h1 class="page-title">Shop</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </div>
    </div>

        <!-- ROW-1 OPEN -->
        <div class="row row-cards">
            <!-- COL-END -->
            <div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card p-0">
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-8 col-md-8 col-sm-8">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                    </div>
                                    @can('is-admin')
                                    <div class="col-xl-3 col-lg-12">
                                        <a href="{{ route('shop.create') }}" class="btn btn-primary btn-block float-end my-2"><i class="fa fa-plus-square me-2"></i>Tambahkan Produk</a>                                            
                                    </div>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-11">
                        <div class="row">
                            @foreach ($shop as $s)
                            <div class="col-md-6 col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="product-grid6">
                                        <div class="product-image6 p-5">
                                        @can('is-admin')
                                        <ul class="icons">
                                                <li><a href="{{ route('shop.edit', $s->id) }}" class="btn btn-success"><i  class="fe fe-edit"></i></a></li>
                                                <form action="{{ route('shop.destroy', $s->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <li><button href="" type="submit"  class="btn btn-danger"><i class="fe fe-x"></i></button></li>

                                                </form>
                                            
                                        </ul>
                                        @endcan
                                            <a href="shop-description.html" >
                                                <img class="img-fluid br-7 w-100" src="{{ asset('images/'.$s->gambar) }}" alt="img" style="width: 285px; height: 285px;">
                                            </a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="product-content text-center">
                                                <h1 class="title fw-bold fs-20"><a href="shop-description.html">{{ $s->nama }}</a></h1>
                                                <div class="price mb-3">Rp. {{number_format($s->harga, 2,',','.')  }}<span class="ms-4"></span>
                                                </div>
                                                <span class="text-success fs-18 fw-semibold">Stock : {{ $s->stok }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- COL-END -->
            </div>
            <!-- ROW-1 CLOSED -->
        </div>
        <!-- ROW-1 END -->
    </div>
    <!-- CONTAINER CLOSED -->

    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('admin/addshop') }}">
                    <button id="table2-new-row-button" class="btn btn-primary mb-4">Tambahkan Barang</button>
                    </a>
                    <div class="table-responsive">
                        <table class="table table-bordered border text-nowrap mb-0" id="new-edit">
                            <thead>
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Gambar Barang</th>
                                    <th>Harga Barang</th>
                                <th name="bstable-actions">Actions</th></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bella</td>
                                    <td>Chloe</td>
                                    <td style="text-align: center;">
                                        <div class="mini-cart-img">
                                            <a><img src="{{ asset('app-assets/images/rental/avanzalama.png') }}" alt="Image" style="max-width: 200px; max-height: 200px;"></a>
                                            <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                                        </div>
                                    </td>
                                    <td>System Developer</td>
                                    <td name="bstable-actions">
                                        <div class="btn-list">
                                            <button id="bEdit" type="button" class="btn btn-sm btn-primary">
                                                <span class="fe fe-edit"> </span>
                                            </button>
                                            <button id="bDel" type="button" class="btn  btn-sm btn-danger">
                                                <span class="fe fe-trash-2"> </span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bella</td>
                                    <td>Chloe</td>
                                    <td style="text-align: center;">
                                        <div class="mini-cart-img">
                                            <a><img src="{{ asset('app-assets/images/rental/avanzalama.png') }}" alt="Image" style="max-width: 200px; max-height: 200px;"></a>
                                            <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                                        </div>
                                    </td>
                                    <td>System Developer</td>
                                    <td name="bstable-actions">
                                        <div class="btn-list">
                                            <button id="bEdit" type="button" class="btn btn-sm btn-primary">
                                                <span class="fe fe-edit"> </span>
                                            </button>
                                            <button id="bDel" type="button" class="btn  btn-sm btn-danger">
                                                <span class="fe fe-trash-2"> </span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bella</td>
                                    <td>Chloe</td>
                                    <td style="text-align: center;">
                                        <div class="mini-cart-img">
                                            <a><img src="{{ asset('app-assets/images/rental/avanzalama.png') }}" alt="Image" style="max-width: 200px; max-height: 200px;"></a>
                                            <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                                        </div>
                                    </td>
                                    <td>System Developer</td>
                                    <td name="bstable-actions">
                                        <div class="btn-list">
                                            <button id="bEdit" type="button" class="btn btn-sm btn-primary">
                                                <span class="fe fe-edit"> </span>
                                            </button>
                                            <button id="bDel" type="button" class="btn  btn-sm btn-danger">
                                                <span class="fe fe-trash-2"> </span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-admin-layout>