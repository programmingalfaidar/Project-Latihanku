@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="row mt-3">
  <div class="col-lg-6">
    @if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
  </div>
</div>
<div class="card mt-4">
  <div class="col-lg-6 mb-3 mt-3 mx-3">
    <a href="{{ route('kamar.create') }}" class="btn btn-primary">Tambah Data</a>
  </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <caption class="ms-4">
          List of Projects
        </caption>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>ChecikIn</th>
            <th>Jumlah</th>
            <th>Biaya</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            {{-- @foreach ($kamars as $po) --}}
     
        </tbody>
      </table>
    </div>
  </div>
{{-- <script>
  $(document).ready(function(){
    $('#mytable').DataTable();
  });
</script> --}}
@endsection
 
