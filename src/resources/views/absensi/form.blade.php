@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Halaman Absensi</h1>
        <hr>
        <div class="text-center">
            {!! QrCode::size(300)->generate(route("pertemuan.absensi",["kode" => $pertemuan->kode])); !!}
        </div>
        <div class="text-center">Link Absensi <a href="{{ route("pertemuan.absensi",["kode" => $pertemuan->kode]) }}">{{ $pertemuan->kode }}</a></div>
        <div class="form-group">
            <label for="pertemuan">Pertemuan</label>
            <input type="text" name="pertemuan" id="" class="form-control"
                value="{{ $pertemuan->pertemuan }}">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="" class="form-control"
                value="{{ $pertemuan->tanggal }}">
        </div>
        <div class="form-group">
            <label for="materi">Materi</label>
            <textarea name="" id="" cols="30" rows="10" class="form-control">{{ $pertemuan->materi }}</textarea>
        </div>
    </div>
@endsection
