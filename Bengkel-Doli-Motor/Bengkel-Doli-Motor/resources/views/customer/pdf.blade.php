<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <style>
        /* Gaya CSS untuk PDF */
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .order-info {
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Order Details</h1>
    {{-- <table>
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>Date</th>
                <th>Detail Pesanan</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @if ($order)                
            <tr>
                <td>{{ $order->id_order }}</td>
                <td>{{ $order->created_at->format('d-m-Y') }}</td>
                @foreach ($orders as $order)
                <td>{{ $order->shop->nama }}</td>
                @endforeach
                <td>{{ $order->quantity }}</td>
                <td>{{ number_format($order->harga, 0,',','.') }}</td>
            </tr>
            @endif
        </tbody>
    </table> --}}
    <table>
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>Date</th>
                <th>Detail Pesanan</th>
                <th>Jumlah</th>
                <th>Harga Produk</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @if ($orders)
            @php
            $totalHarga = 0;
            @endphp
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id_order }}</td>
                <td>{{ $order->created_at->format('d-m-Y') }}</td>
                <td>{{ $order->nama }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->harga }}</td>
                <td>{{ number_format($order->total_harga, 0, ',', '.') }}</td>
            </tr>
            @php
            $prevOrderID = $order->id_order;
            $totalHarga += $order->total_harga;

            @endphp
            @endforeach
            @endif
        </tbody>
    </table>
    
    
    <div class="order-info">
            Total: Rp.{{ number_format($totalHarga, 0,',','.') }}
        </div>
</body>
</html>