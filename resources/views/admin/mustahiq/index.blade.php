@extends('admin.templates.source')

@section('content')

    <!-- TABLE HOVER -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Data Mustahiq (Lembaga Penerima Donasi)</h3>            
        </div>
        <div class="panel-body">
            <a href="{{route('mustahiq.create')}}" class="btn btn-success">Tambah Data Mustahiq</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Lembaga</th>
                        <th>Alamat Instansi</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($mustahiqs as $mustahiq)
                    <tr>
                        <td>{{$mustahiq->id}}</td>
                        <td>{{$mustahiq->mustahiq_name}}</td>
                        <td>{{$mustahiq->mustahiq_address}}</td>
                        <td>
                            <a class="btn btn-info" href="{{route('mustahiq.edit', $mustahiq)}}">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('mustahiq.destroy', $mustahiq)}}" method="POST">
                                @method("DELETE")
                                @csrf
                                <input type="submit" class="btn btn-danger" value="Hapus">
                            </form>
                        </td>                        
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$mustahiqs->links()}}
        </div>
    </div>
    <!-- END TABLE HOVER -->
@endsection