@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="row mt-5">
    <div class="col-md-8">
        <form action="/pengguna/{{ $users->pengguna }}" method="Post">
          @method('put')
            @csrf
            <div class="card mb-4">
              <h5 class="card-header text-center fs-165 text-capitalize">Create Data Pengguna</h5>
              <div class="card-body">
                <div>
                  <div class="mb-3">

                    <label for="defaultFormControlInput" class="form-label">Username</label>
                    <input
                      type="text"
                      class="form-control @error('pengguna') is-invalid @enderror"
                      id="defaultFormControlInput"
                      name="pengguna"
                      value="{{ old('pengguna', $users->pengguna) }}"
                      aria-describedby="defaultFormControlHelp" autofocus required 
                    />
                    @error('pengguna')
                    <div class="invalid-feedback">
                     {{ $message }}
                    </div>
                   @enderror
                  </div>
                  <div class="mb-3">

                    <label for="defaultFormControlInput" class="form-label">Alamat</label>
                    <input
                      type="text"
                      class="form-control @error('alamat') is-invalid @enderror"
                      id="defaultFormControlInput"
                      name="alamat"
                      aria-describedby="defaultFormControlHelp" autofocus required value="{{ old('alamat', $users->alamat) }}"
                    />
                    @error('alamat')
                    <div class="invalid-feedback">
                     {{ $message }}
                    </div>
                   @enderror
                  </div>
                  <div class="mb-3">

                    <label for="defaultFormControlInput" class="form-label">Email</label>
                    <input
                      type="email"
                      class="form-control @error('email') is-invalid @enderror"
                      id="defaultFormControlInput"
                      name="email"
                      value="{{ old('email', $users->email) }}"
                      aria-describedby="defaultFormControlHelp" autofocus required
                    />
                    @error('email')
                    <div class="invalid-feedback">
                     {{ $message }}
                    </div>
                   @enderror
                  </div>
                  <div class="mb-3">

                    <label for="defaultFormControlInput" class="form-label">Pekerjaan</label>
                    <input
                      type="text"
                      class="form-control @error('pekerjaan') is-invalid @enderror"
                      id="defaultFormControlInput"
                      name="pekerjaan"
                      aria-describedby="defaultFormControlHelp" autofocus required value="{{ old('pekerjaan', $users->pekerjaan) }}"
                    />
                    @error('pekerjaan')
                    <div class="invalid-feedback">
                     {{ $message }}
                    </div>
                   @enderror
                  </div>
                  <div class="mb-3">
                    <label for="defaultFormControlInput" class="form-label">Password</label>
                    <input
                      type="text"
                      class="form-control @error('password') is-invalid @enderror"
                      id="defaultFormControlInput"
                      name="password"
                      aria-describedby="defaultFormControlHelp" autofocus required value="{{ old('password', $users->password) }}"
                      />
                      @error('password')
                      <div class="invalid-feedback">
                       {{ $message }}
                      </div>
                     @enderror
                  </div>
                  {{-- <input type="hidden" name="pekerjaan"> --}}

                    <label for="defaultFormControlInput" class="form-label">Status</label>
                  <input
                    type="text"
                    class="form-control @error('is_admin') is-invalid @enderror"
                    id="defaultFormControlInput"
                    name="is_admin"
                    aria-describedby="defaultFormControlHelp" autofocus required value="{{ old('is_admin', $users->is_admin) }}"
                  />
                  <div id="defaultFormControlHelp" class="form-text">
                    <button type="submit" class="btn btn-primary mt-3 ">Create Data</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
   

  </div>
</div>
@endsection