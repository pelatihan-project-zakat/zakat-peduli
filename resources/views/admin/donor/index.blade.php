@extends('admin.templates.source')

@section('content')

    <!-- TABLE HOVER -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Data Donatur Yayasan Al-Azhar Peduli</h3>            
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telpon</th>
                        <th>Alamat</th>
                        <th>Jumlah Transaksi</th>
                        <th>Total Donasi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($donors as $donor)
                    <tr>
                        <td>{{$donor->id}}</td>
                        <td>{{$donor->name}}</td>
                        <td>{{$donor->email}}</td>
                        <td>{{$donor->phone}}</td>
                        <td>{{$donor->address}}</td>
                        <td>{{$donor->transaction_number}}</td>
                        <td>Rp {{$donor->total_donation}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$donors->links()}}
        </div>
    </div>
    <!-- END TABLE HOVER -->
@endsection