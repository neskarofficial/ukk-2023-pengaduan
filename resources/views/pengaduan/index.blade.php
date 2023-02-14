@extends('master')

@section('judul')
    <h1>DATA TABLE</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title"></h3>
      <div class="col card-header text-right">
      <a class="btn btn-primary"  href="{{ route('pengaduan.create') }}">
        <i class="fas fa-plus"></i>
      Pengaduan</a>

</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Users_Id</th>
          <th>Tanggal_Pengaduan</th>
          <th>Isi_Laporan</th>
          <th>Foto</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
           
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td> </td>
          
          <td>
          <form action="/pengaduan/" method="POST">
          <a class="btn btn-primary"  href="pengaduan/">Detail</a>
          <a class="btn btn-warning" href="pengaduan//edit">Edit</a>
          
            @csrf
            @method('DELETE')
          <input type="submit" Class="btn btn-danger" value="Delete">
          </form>
            </td>
        </tr>
       
      </table>
    </div>
    <!-- /.card-body -->
  
@endsection

@push('scripts')
<script src="{{ asset ('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset ('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
$(function () {
    $('#data-table').DataTable();
});
<script>
    $(function () {
      $("#example2").DataTable();
    });
  </script>
@endpush