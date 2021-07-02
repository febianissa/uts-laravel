<title>Data Kepegawaian</title>
<div class="card-body">
<span class="d-block p-3 bg-info text-white">
    <h3 class="text-center">Tambah Data Pegawai</h3>
</span>
<div class="card border-light">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</style>
<div class="card-body">
<div class="container">
<form action="/simpan-pegawai" method="POST" >
    <div class="form-group">
        <label for="nomor_surat">NIP : </label>
        <input class="form-control" type="number" name="nip" id="nip">
    </div>
    <div class="form-group">
        <label for="nama">Nama : </label>
        <input class="form-control" type="text" name="nama" id="nama">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat : </label>
        <input class="form-control" type="text" name="alamat" id="alamat">
    </div>
    <input class="btn btn-success" type="submit" value="Simpan"><br>
</form>
</div>
</div>
</div>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

