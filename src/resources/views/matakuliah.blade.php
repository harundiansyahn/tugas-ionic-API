@extends('layouts.app')

{{-- @section('title','Form Input Mata Kuliah') --}}

@section('content')
<div class="container">
    <h2>Form Mata Kuliah</h2>
    <hr>
    <form action="{{ route("matakuliah.simpan") }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kodemk">Kode Mata Kuliah</label>
            <input type="text" name="kodemk" id="kodemk" class="form-control">
        </div>
        <div class="form-group">
            <label for="namamk">Nama Mata Kuliah</label>
            <input type="text" name="namamk" id="namamk" class="form-control">
        </div>
        <div class="form-group">
            <label for="dosen">Dosen</label>
            <input type="text" name="dosen" id="dosen" class="form-control">
        </div>
        <div class="form-group">
            <label for="ruang">Ruang</label>
            <input type="text" name="ruang" id="ruang" class="form-control">
        </div>

        <input type="submit" value="Simpan" class="btn btn-success btn-block">
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode MK</th>
                <th>Nama MK</th>
                <th>Dosen</th>
                <th>Ruang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matakuliah as $item)
                <tr>
                    <td>{{ $item->kodemk }}</td>
                    <td>{{ $item->namamk }}</td>
                    <td>{{ $item->dosen }}</td>
                    <td>{{ $item->ruang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $matakuliah->links() }}
</div>
@endsection
