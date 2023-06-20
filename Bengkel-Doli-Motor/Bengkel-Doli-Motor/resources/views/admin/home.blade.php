<x-admin-layout>
    @section('title', 'Home')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Beranda</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Beranda</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Users</h6>
                                    <h2 class="mb-0 number-font">{{ $totaluser }}</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="saleschart"
                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Booking Rental</h6>
                                    <h2 class="mb-0 number-font">{{ $totalrental }}</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="leadschart"
                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Booking Autoservice</h6>
                                    <h2 class="mb-0 number-font">{{ $totalservice }}</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="profitchart"
                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Booking Doorsmeer</h6>
                                    <h2 class="mb-0 number-font">{{ $totaldoorsmeer }}</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="costchart"
                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END -->

    <!-- ROW-2 -->
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Booking</h3>
                </div>
                <div class="card-body">
                    <div>
                        <div id="orderchart"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
        <!-- COL END -->
    </div>
    <!-- ROW-2 END -->

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('orderchart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Booking'
            },
            subtitle: {
                text: 'Doli Motor'
            },
            xAxis: {
                categories: [
                    'Rental',
                    'Auto Service',
                    'Doorsmeer',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Booking'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Disetujui',
                data: [{{ $setujurental }}, {{ $setujuservice }}, {{ $setujudoorsmeer }}],
                color: 'green'
            }, {
                name: 'Menunggu',
                data: [{{ $ditundarental }}, {{ $ditundaservice }}, {{ $ditundadoorsmeer }}],
                color: 'orange'
            }, {
                name: 'Ditolak',
                data: [{{ $ditolakrental }}, {{ $ditolakservice }}, {{ $ditolakdoorsmeer }}],
                color: 'red'
            }]
        });
    </script>
    
</x-admin-layout>