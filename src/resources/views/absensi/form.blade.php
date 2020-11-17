@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Halaman Absensi</h1>
        <hr>
        <span>Link Absensi <a href="">XXXXXXX</a></span>
        <div class="form-group">
            <label for="pertemuan">Pertemuan</label>
            <input type="text" name="pertemuan" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="materi">Materi</label>
            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
    </div>
@endsection
