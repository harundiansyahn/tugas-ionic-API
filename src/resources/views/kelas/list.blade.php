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
            <h1>Nama Kelas</h1>
            <h5>No Ruang XXXX</h5>
            <p>Kode Kelas : XXXXX</p>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" role="tabpanel" id="pertemuan">
                <a href="{{ route("pertemuan.form") }}" class="btn btn-outline-success float-right mb-4"><i class="fas fa-plus"></i> Buat Pertemuan</a>
                <div class="clearfix"></div>
                <div class="card mb-2">
                    <div class="card-body">
                        <h3><a href="{{ route("absensi.form") }}">Pertemuan 1</a></h3>
                        <span class="text-muted">Tanggal 01/01/2020</span>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, animi. Praesentium quidem labore ex dignissimos dolorum, quae quasi est molestias non neque sunt veritatis optio quod temporibus, incidunt deserunt voluptas?</p>
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i> Hapus</a>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <h3><a href="{{ route("absensi.form") }}">Pertemuan 1</a></h3>
                        <span class="text-muted">Tanggal 01/01/2020</span>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, animi. Praesentium quidem labore ex dignissimos dolorum, quae quasi est molestias non neque sunt veritatis optio quod temporibus, incidunt deserunt voluptas?</p>
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i> Hapus</a>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <h3><a href="{{ route("absensi.form") }}">Pertemuan 1</a></h3>
                        <span class="text-muted">Tanggal 01/01/2020</span>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, animi. Praesentium quidem labore ex dignissimos dolorum, quae quasi est molestias non neque sunt veritatis optio quod temporibus, incidunt deserunt voluptas?</p>
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i> Hapus</a>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <h3><a href="{{ route("absensi.form") }}">Pertemuan 1</a></h3>
                        <span class="text-muted">Tanggal 01/01/2020</span>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, animi. Praesentium quidem labore ex dignissimos dolorum, quae quasi est molestias non neque sunt veritatis optio quod temporibus, incidunt deserunt voluptas?</p>
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-danger float-right"><i class="fas fa-trash"></i> Hapus</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" role="tabpanel" id="peserta">
                <h2 class="text-success">Dosen</h2>
                <hr>
                <ul class="list-group">
                    <li class="list-group-item">Nama Dosen</li>
                </ul>

                <div class="d-flex justify-content-between mt-4">
                    <h2 class="text-success">Mahasiswa</h2>
                    <div>
                        <span class="text-muted">20 Mahasiswa</span>
                        <a href="{{ route("peserta.invite") }}" class="btn btn-outline-success"><i class="fas fa-user-plus"></i> </a>
                    </div>
                </div>
                <hr>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route("peserta.detail") }}">Mahasiswa 1</a>
                        <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route("peserta.detail") }}">Mahasiswa 1</a>
                        <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route("peserta.detail") }}">Mahasiswa 1</a>
                        <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route("peserta.detail") }}">Mahasiswa 1</a>
                        <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route("peserta.detail") }}">Mahasiswa 1</a>
                        <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus </a>
                    </li>
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
