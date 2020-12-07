@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#pertemuan">Pertemuan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#peserta">Peserta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#absensi">Absensi</a>
            </li>
        </ul>

        <div class="jumbotron bg-success text-white">
            <h1>{{ $kelas->matakuliah }} ({{ $kelas->nama }})</h1>
            <h5>No Ruang {{ $kelas->noruang }}</h5>
            <p>Kode Kelas : <a href="{{ route("kelas.join.mahasiswa",["kode" => $kelas->kode]) }}">{{ $kelas->kode }}</a></p>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" role="tabpanel" id="pertemuan">
                <a href="{{ route("pertemuan.form",["kelasid" => $kelas->id]) }}" class="btn btn-outline-success float-right mb-4"><i class="fas fa-plus"></i> Buat Pertemuan</a>
                <div class="clearfix"></div>
                @foreach ($kelas->pertemuan as $item)
                    <div class="card mb-2">
                        <div class="card-body">
                            <h3><a href="{{ route("absensi.form",["id" => $item->id]) }}">Pertemuan {{ $item->pertemuan }}</a></h3>
                            <span class="text-muted">Tanggal {{ $item->tanggal }}</span>
                            <p>{{ $item->materi }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route("pertemuan.hapus",["id" => $item->id ]) }}"
                                class="btn btn-danger float-right"
                                onclick="return confirm('Anda Yakin Hapus?')"><i class="fas fa-trash"></i> Hapus</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="tab-pane fade" role="tabpanel" id="peserta">
                <h2 class="text-success">Dosen</h2>
                <hr>
                <ul class="list-group">
                    <li class="list-group-item">{{ $kelas->dosen->name }}</li>
                </ul>

                <div class="d-flex justify-content-between mt-4">
                    <h2 class="text-success">Mahasiswa</h2>
                    <div>
                        <span class="text-muted">{{ $kelas->mahasiswa->count() }} Mahasiswa</span>
                        <a href="{{ route("peserta.invite",["kode" => $kelas->kode]) }}" class="btn btn-outline-success"><i class="fas fa-user-plus"></i> </a>
                    </div>
                </div>
                <hr>
                <ul class="list-group">
                    @foreach ($kelas->mahasiswa as $item)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{ route("peserta.detail",["id" => $item->id ]) }}">{{ $item->name }}</a>
                            <a href="{{ route("kelas.hapus.mahasiswa",[
                                "kelasid" => $kelas->id,
                                "mahasiswaid" => $item->id
                            ]) }}" class="btn btn-danger"
                            onclick="return confirm('Anda Yakin Hapus Mahasiswa?')"><i class="fas fa-trash"></i> Hapus </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="tab-pane fade" role="tabpanel" id="absensi">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Nama</td>
                            <td>Pertemuan 1</td>
                            <td>Pertemuan 2</td>
                            <td>Pertemuan 3</td>
                            <td>Pertemuan 4</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Budi</td>
                            <td>A</td>
                            <td>H</td>
                            <td>H</td>
                            <td>I</td>
                        </tr>
                        <tr>
                            <td>Budi</td>
                            <td>A</td>
                            <td>H</td>
                            <td>H</td>
                            <td>I</td>
                        </tr>
                        <tr>
                            <td>Budi</td>
                            <td>A</td>
                            <td>H</td>
                            <td>H</td>
                            <td>I</td>
                        </tr>
                        <tr>
                            <td>Budi</td>
                            <td>A</td>
                            <td>H</td>
                            <td>H</td>
                            <td>I</td>
                        </tr>
                        <tr>
                            <td>Budi</td>
                            <td>A</td>
                            <td>H</td>
                            <td>H</td>
                            <td>I</td>
                        </tr>
                        <tr>
                            <td>Budi</td>
                            <td>A</td>
                            <td>H</td>
                            <td>H</td>
                            <td>I</td>
                        </tr>
                        <tr>
                            <td>Budi</td>
                            <td>A</td>
                            <td>H</td>
                            <td>H</td>
                            <td>I</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
