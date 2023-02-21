@extends('master')

@section('content')
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
                <label for="Alamat">Isi Laporan</label>
                <textarea 
                  disabled
                  class="form-control" 
                  name="isi_laporan" rows="5" 
                  id="isi_laporan" placeholder="isi_laporan">{{ $pengaduans->isi_laporan }}</textarea>
            </div> 
            <form action="{{ route('tanggapan.store', $pengaduans->id) }}" method="POST">
            <div class="form-group">
              <label for="tanggapan">Tanggapan</label>
              <textarea 
                class="form-control" 
                name="tanggapan" rows="5" 
                id="tanggapan" placeholder="Isi dengan tanggapan"></textarea>
            </div>
              @csrf
              <div class="form-group">
                <label for="status">Status Pengaduan</label>
                <select name="status" id="status" class="form-control">
                  <option value="" {{ $pengaduans->status == 0 ? 'selected' : '' }} disabled>--- Pilih Proses ---</option>
                  <option value="proses" {{ $pengaduans->status == 'diproses' ? 'selected' : '' }}>Di Proses</option>
                  <option value="selesai" {{ $pengaduans->status == 0 ? 'selesai' : '' }}>Selesai</option>
                </select>
              </div> 
            </p>
          </div>
          <div class="card-footer">
            <a href="/pengaduan" class="btn btn-secondary ml-3" style="float:left;">Back</a>
            <input type="submit" value="Tanggapi" class="btn btn-primary ml-3" style="float:right">
          </form>
        </div>
        
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
  @endsection