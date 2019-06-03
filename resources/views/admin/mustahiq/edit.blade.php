@extends('admin.templates.source')

@section('content')
    <!-- INPUTS -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Data Mustahiq</h3>
        </div>
        <div class="panel-body">
            <form action="{{route('mustahiq.update', $mustahiq)}}" method="POST">
                @method('PUT')
                @csrf
                <label for="name">Nama Mustahiq</label>
                <input type="text" class="form-control" placeholder="Nama Mustahiq" name="name" value="{{$mustahiq->mustahiq_name}}">
                <br>                

                <label for="address">Alamat Instansi</label>
                <textarea class="form-control" placeholder="Alamat Instansi" rows="4" name="address">{{$mustahiq->mustahiq_address}}</textarea>
                <br>

                <button type="submit" class="btn btn-info">Edit Data</button>
            </form>
        </div>
    </div>
    <!-- END INPUTS -->
@endsection

