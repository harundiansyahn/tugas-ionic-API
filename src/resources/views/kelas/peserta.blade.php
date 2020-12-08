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
