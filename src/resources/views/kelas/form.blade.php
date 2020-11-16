@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label for="matakuliah">Mata Kuliah</label>
                <input type="text" name="matakuliah" class="form-control">
            </div>
            <div class="form-group">
                <label for="noruang">No Ruang</label>
                <input type="text" name="noruang" class="form-control">
            </div>
            <div class="form-group float-right">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i> Batal </a>
            </div>
        </form>
    </div>
@endsection
