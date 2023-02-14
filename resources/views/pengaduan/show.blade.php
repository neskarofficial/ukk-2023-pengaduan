<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="col-md-12">
 <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">PENGADUAN MASYARAKAT</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/student" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group" >
            <label for="Nisn">Users_Id</label>
            <input type="text" name="users id" class="form-control" id="users id" placeholder="Masukan users id" disabled>
          </div>
          <div class="form-group">
            <label for="Nama">Tanggal Pengaduan</label>
            <input type="text" name="tgl pengaduan" class="form-control" id="tgl pengaduan" placeholder="Tanggal pengaduan" disabled>
          </div>
        <div class="form-group">
            <label for="Alamat">Isi laporan</label>
            <textarea class="form-control" name="isi laporan" rows="3" id="isi laporan" placeholder="isi" disabled></textarea>
          </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>