@extends('master')

@section('judul')
    <h1>DATA TABLE</h1>
@endsection

@section('content')
<div class="card card-white">
    <div class="card-header ">
      <h3 class="card-title"></h3>
      <div class="col card-header text-right">
      @if (auth()->user()->level == 'masyarakat')
      <a class="btn btn-primary"  href="{{ route('pengaduan.create') }}">
        <i class="fas fa-plus"></i>Pengaduan</a>
      @endif

    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>No</th>
          <th>Tanggal Pengaduan</th>
          <th>Isi Laporan</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($pengaduans as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->tgl_pengaduan }}</td>
            <td>{{ $item->isi_laporan }}</td>
            <td>{{ $item->status == '0' ? 'Belum' : $item->status }}</td>
            <td>
              <form action="{{ route('pengaduan.destroy', $item->id) }}" method="POST">
                @if (auth()->user()->level == 'masyarakat')
                  @if ($item->status == '0')
                      <a class="btn btn-primary"  href="/pengaduan/{{ $item->id }}/">Detail</a>
                      <a class="btn btn-warning" href="{{ route('pengaduan.edit',  $item->id) }}">Edit</a>
                      @csrf
                      @method('DELETE')
                      <input type="submit" Class="btn btn-danger" value="Delete">
                    @else
                      <a class="btn btn-primary"  href="pengaduan/">Detail</a>
                    @endif
                @else
                  <a class="btn btn-primary"  href="pengaduan/">Detail</a>
                  <a class="btn btn-secondary"  href="{{ route('tanggapan.create', $item->id) }}">Tanggapan</a>
                @endif
                </form>
              </td>
            </tr>
            @empty
            
            @endforelse
            
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