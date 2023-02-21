@extends('master')

@section('content')
{{-- <div class="col-md-12">
  <div class="row 6">
  <div class="card card-secondary">
    <div class="card-header">
      <h1 class="card-title">PENGADUAN MASYARAKAT</h1>
    </div>
    <!-- /.card-header -->

      <div class="card-body">
        <div class="form-group">
          <label for="">Nama Pelapor</label>
          <input type="text" name="tanggal" id="tanggal" value="{{ $pengaduans->users_id }}" disabled>
        </div>
        <div class="form-group">
          <label for="">Tanggal Pengaduan</label>
          <input type="text" name="tanggal" id="tanggal" value="{{ $pengaduans->tgl_pengaduan }}" disabled>
        </div>
          <div class="form-group">
            <label for="Alamat">Isi Laporan</label>
            <textarea 
            disabled
              class="form-control" 
              name="isi_laporan" rows="5" 
              id="isi_laporan" placeholder="isi_laporan">{{ $pengaduans->isi_laporan }}</textarea>
          </div>
          <div class="form-group" >
            <label for="formFile" class="form-label">Foto</label>
            <img src="{{ url('storage/' . $pengaduans->foto) }}" alt="" srcset="">
          </div>  
      </p>
    </div>
    <div class="card-footer">
      <a href="/pengaduan" class="btn btn-secondary ml-3" style="float:left;">Back</a>
    </div>
    
  </div>
  </div>
</div> --}}

<div class="post">
  <div class="user-block">
    <span class="username">
      <a href="#">{{ $pengaduans->user->name }}</a>
      <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
    </span>
    <span class="description">{{ 'Tanggal Pengaduan ' . $pengaduans->tgl_pengaduan }}</span>
  </div>
  <!-- /.user-block -->
  <div class="row mb-3">
    <div class="col-sm-6">
      <img class="img-fluid" src="{{ url('storage/' . $pengaduans->foto) }}" alt="Photo">
    </div>
    <!-- /.col -->
    <div class="col-sm-6">
      <div class="card card-secondary">
        <div class="card-header">
          <h1 class="card-title">PENGADUAN MASYARAKAT</h1>
        </div>
        <!-- /.card-header -->
    
          <div class="card-body">
            <div class="form-group">
              <label for="">Nama Pelapor</label>
              <input type="text" name="tanggal" id="tanggal" value="{{ $pengaduans->users_id }}" disabled>
            </div>
            <div class="form-group">
              <label for="">Tanggal Pengaduan</label>
              <input type="text" name="tanggal" id="tanggal" value="{{ $pengaduans->tgl_pengaduan }}" disabled>
            </div>
              <div class="form-group">
                <label for="Alamat">Isi Laporan</label>
                <textarea 
                disabled
                  class="form-control" 
                  name="isi_laporan" rows="5" 
                  id="isi_laporan" placeholder="isi_laporan">{{ $pengaduans->isi_laporan }}</textarea>
              </div> 
          </p>
        </div>
        <div class="card-footer">
          <a href="/pengaduan" class="btn btn-secondary ml-3" style="float:left;">Back</a>
        </div>
        
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <p>
    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
    <span class="float-right">
      <a href="#" class="link-black text-sm">
        <i class="far fa-comments mr-1"></i> Comments (5)
      </a>
    </span>
  </p>

  <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
</div>
  @endsection