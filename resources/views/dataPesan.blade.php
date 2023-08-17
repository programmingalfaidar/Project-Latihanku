@extends('layouts.main')

@section('baris1')

<div class="container">
    <div class="row">
      <div class="col-lg-6">
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
                @foreach ($pesans as $p)
              <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $loop->iteration }}</strong></td>
                <td>
                 {{ $p->nama }}
                </td>
                <td>
                 {{ $p->email }}
                </td>
                <td>
                    {{ $p->checkin }}
                   </td>
                   <td>
                    {{ $p->nohp }}
                   </td>
                <td><span class="badge bg-label-primary me-1">{{ $p->biaya }}</span></td>
                <td><span class="badge bg-label-primary me-1">{{ $p->jumlah }}</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/kamar/{{ $p->kamar }}/edit"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <form action="/kamar/{{ $p->kamar }}" method="Post">
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
    </div>
  </div>

  @endsection
