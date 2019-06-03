@extends('admin.templates.source')

@section('content')
    <!-- INPUTS -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Tambah Program Baru</h3>
        </div>
        <div class="panel-body">
            <form action="{{route('program.store')}}" method="POST">
                @csrf
                <label for="nama_program">Nama Program</label>
                <input type="text" class="form-control" placeholder="Nama Program" name="nama_program">
                <br>
                
                <label for="jenis_donasi">Jenis Donasi</label>
                <select class="form-control" name="jenis_donasi">
                    <option value="404">Zakat</option>
                    <option value="404">Infaq</option>
                    <option value="404">Waqaf</option>
                </select>            
                <br>

                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" placeholder="Keterangan" rows="4" name="keterangan"></textarea>
                <br>

                <button type="submit" class="btn btn-success">Tambah Program</button>
            </form>
        </div>
    </div>
    <!-- END INPUTS -->
@endsection

