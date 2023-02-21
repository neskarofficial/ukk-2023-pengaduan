@extends('master')

@section('content')

<div class="row">
<div class="col-md-12">
  <div class="card card-cyan">
    <div class="card-header">
      <h1 class="card-title">PENGADUAN MASYARAKAT</h1>
    </div>

    <form action="{{route ('pengaduan.update', [$pengaduan->id])}}" method="POST">
        @csrf 
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="">Nama Pelapor</label>
          <input type="text" name="users_id" id="users_id" value="{{ $pengaduan->users_id }}" required>
        </div>
        <div class="form-group">
          <label for="">Tanggal Pengaduan</label>
          <input type="text" name="tgl_pengaduan" id="tgl_pengaduan" value="{{ $pengaduan->tgl_pengaduan }}" required>
        </div>
          <div class="form-group">
            <label for="Alamat">Isi Laporan</label>
            <textarea 
              class="form-control" 
              name="isi_laporan" rows="5" 
              id="isi_laporan" placeholder="isi_laporan">{{ $pengaduan->isi_laporan }}</textarea>
          </div>
          <div class="form-group" >
            <label for="formFile" class="form-label" name="foto">Foto</label>
            <img src="{{ url('storage/' . $pengaduan->foto) }}" alt="" srcset="">
          </div>

        </div>
      </p>
    <form>  
    </div>
    <div class="card-footer">
      <input type="submit" class="btn btn-outline-primary ml-3" style="float:right;" value="Submit">
      <a href="/pengaduan" class="btn btn-outline-secondary ml-3" style="float:left;">Back</a>
    </div>
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

  @endsection