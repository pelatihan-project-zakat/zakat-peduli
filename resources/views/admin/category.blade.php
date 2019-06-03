@extends('admin.templates.source')

@section('content')

    <!-- TABLE HOVER -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Jenis Donasi</h3>            
        </div>
        <div class="panel-body">
            <form action="{{ route('category.store') }}" class="input-group col-md-4" method="POST">
                @csrf
                <input class="form-control" type="text" placeholder="Tambah jenis baru" name="donation_name">
                <span class="input-group-btn"><button class="btn btn-success" type="submit">Tambah</button></span>
            </form>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Donasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->donation_name}}</td>
                        <td>
                            <form action="{{route('category.destroy', $category)}}" method="POST">
                                @method("DELETE")
                                @csrf

                                <input type="submit" class="btn btn-danger" value="Hapus">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$categories->links()}}
        </div>
    </div>
    <!-- END TABLE HOVER -->
@endsection