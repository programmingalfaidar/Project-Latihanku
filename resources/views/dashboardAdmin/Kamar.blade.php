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
            <th>Gambar</th>
            <th>Kamar</th>
            <th>Biaya</th>
            <th>Jumlah</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($kamars as $po)
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $loop->iteration }}</strong></td>
            <td>
            <img src="{{ asset('storage/'. $po->image) }}"  width="100">
            </td>
            <td>
             {{ $po->kamar }}
            </td>
            <td>
             {{ $po->biaya }}
            </td>
            <td><span class="badge bg-label-primary me-1">{{ $po->jumlah }}</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/kamar/{{ $po->kamar }}/edit"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <form action="/kamar/{{ $po->kamar }}" method="Post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" dropdown-item bx bx-trash me-1" onclick="return confirm('Yakin Ingin Menghapus ??')" >Delete</button>
                  </form>
                  {{-- <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  > --}}
                </div>
              </div>
                  </td>
                
              </div>
          </tr>
          @endforeach
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