@extends('admin.templates.source')

@section('content')

    <!-- TABLE HOVER -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Program Yayasan Al-Azhar Peduli</h3>            
        </div>
        <div class="panel-body">
            <a href="{{route('program.create')}}" class="btn btn-success">Tambah program baru</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Program</th>
                        <th>Jenis Donasi</th>
                        <th>Keterangan</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($programs as $program)
                    <tr>
                        <td>{{$program->id}}</td>
                        <td>{{$program->program_name}}</td>
                        <td>Blm nyambung tbl donasi</td>
                        <td>{{$program->keterangan}}</td>
                        <td>
                            <a class="btn btn-info" href="{{route('program.edit', $program)}}">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('program.destroy', $program)}}" method="POST">
                                @method("DELETE")
                                @csrf
                                <input type="submit" class="btn btn-danger" value="Hapus">
                            </form>
                        </td>                        
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$programs->links()}}
        </div>
    </div>
    <!-- END TABLE HOVER -->
@endsection