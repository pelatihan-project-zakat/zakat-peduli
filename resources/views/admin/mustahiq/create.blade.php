@extends('admin.templates.source')

@section('content')
    <!-- INPUTS -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Tambah Data Lembaga Penerima Donasi</h3>
        </div>
        <div class="panel-body">
            <form action="{{route('mustahiq.store')}}" method="POST">
                @csrf
                <label for="name">Nama Mustahiq</label>
                <input type="text" class="form-control" placeholder="Nama Mustahiq" name="name">
                <br>

                <label for="address">Alamat Instansi</label>
                <textarea class="form-control" placeholder="Alamat Instansi" rows="4" name="address"></textarea>
                <br>

                <button type="submit" class="btn btn-success">Tambah Data</button>
            </form>
        </div>
    </div>
    <!-- END INPUTS -->
@endsection

