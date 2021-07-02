<title>Data Kepegawaian</title>
<br>
  <h3 style="text-align: center">Daftar Pegawai</h3>

<br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
      crossorigin="anonymous">
<div class="container">
  
<table class="table table-bordered table-resposive table">
  <thead class="thead-light">
    <tr>
    <th>NIP</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>ACTION</th>
    </tr>
  </thead>
    @if (empty($data))
        <tr class="alert alert-warning" >
            <td class="alert text-center " role="alert" colspan="4">Data kosong</td>
        </tr>
    @endif
        @foreach($data as $j)
        <tbody>
        <tr>
            <td>{{ $j->nip}}</td> 
            <td>{{ $j->nama}}</td> 
            <td>{{ $j->alamat}}</td>
            <td>
                <a class="btn btn-warning" href="/ubah-pegawai/{{$j->id}}">Edit</a>
                <a class="btn btn-danger" href="/hapus-pegawai/{{$j->id}}"> Hapus</a>
            </td>
        </tr>
        </tbody>
        @endforeach
  </table>
  </div>
  <div class="container">
  <a class="btn btn-success" href="/tambah-pegawai"> Tambah</a>
</div>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  