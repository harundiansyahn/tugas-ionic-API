<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
        crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Form Mahasiswa</h2>
        <hr>
        <form action="{{ isset($data)
                            ?route('mahasiswa.update',["id" => $data->id])
                            :route('mahasiswa.simpan') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" class="form-control"
                    value={{ isset($data)?$data->nim:"" }}>
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control"
                    value="{{ isset($data)?$data->nama:"" }}">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control"
                    value="{{ isset($data)?$data->alamat:"" }}">
            </div>

            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" name="telepon" class="form-control"
                    value={{ isset($data)?$data->telepon:"" }}>
            </div>

            <input type="submit" value="Simpan" class="btn btn-success btn-block">
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th colspan=2>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $item)
                    <tr>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->telepon }}</td>
                        <td><a href="{{ route('mahasiswa.tampil',["id" => $item->id ]) }}"
                            class="btn btn-warning btn-block">Rubah</a></td>
                        <td><a href="{{ route('mahasiswa.hapus',["id" => $item->id]) }}"
                            class="btn btn-danger btn-block">Hapus</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
