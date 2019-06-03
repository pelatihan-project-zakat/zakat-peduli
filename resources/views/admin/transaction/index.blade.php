@extends('admin.templates.source')

@section('content')

    <!-- TABLE HOVER -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Data Transaksi Donasi Yayasan Al-Azhar Peduli</h3>    
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Kode Transaksi</th>
                        <th>Tanggal</th>
                        <th>Email Donatur</th>
                        <th>Jenis Program</th>
                        <th>Nomnial Transaksi</th>
                        <th>Bukti Transfer</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{$transaction->kode_transaksi}}</td>
                        <td>{{$transaction->tanggal}}</td>
                        <td>{{$transaction->email}}</td>
                        <td>{{$transaction->program}}</td>                        
                        <td>Rp {{$transaction->jumlah_donasi}}</td>
                        <td><img src="{{asset('assets/img/avatar/boy.png')}}" height="60px" alt=""></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Sesuai</a></li>
                                  <li><a href="#">Tidak sesuai</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$transactions->links()}}
        </div>
    </div>
    <!-- END TABLE HOVER -->
@endsection