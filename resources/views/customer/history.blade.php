@extends('layout.theme')
@section('content')
<h1>Order History</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Tanggal pemesanan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderHistories as $orderHistory)
                <tr>
                    <td>{{ $orderHistory->Nama->name }}</td>
                    <td>{{ $orderHistory->Barang->name }}</td>
                    <td>{{ $orderHistory->Jumlah }}</td>
                    <td>{{ $orderHistory->Total_Harga }}</td>
                    <td>{{ $orderHistory->Dibuat_pada }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
