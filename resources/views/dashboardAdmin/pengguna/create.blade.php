@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="row mt-5">
    <div class="col-md-8">
        <form action="/pengguna" method="Post">
            @csrf
            <div class="card mb-4">
              <h5 class="card-header text-center fs-165 text-capitalize">Create Data Pengguna</h5>
              <div class="card-body">
                <div>
                  <label for="defaultFormControlInput" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="defaultFormControlInput"
                    name="pengguna"
                    aria-describedby="defaultFormControlHelp" autofocus required
                  />
                  <label for="defaultFormControlInput" class="form-label">Alamat</label>
                  <input
                    type="text"
                    class="form-control"
                    id="defaultFormControlInput"
                    name="alamat"
                    aria-describedby="defaultFormControlHelp" autofocus required
                  />
                  <label for="defaultFormControlInput" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="defaultFormControlInput"
                    name="email"
                    aria-describedby="defaultFormControlHelp" autofocus required
                  />
                  <label for="defaultFormControlInput" class="form-label">Pekerjaan</label>
                  <input
                    type="text"
                    class="form-control"
                    id="defaultFormControlInput"
                    name="pekerjaan"
                    aria-describedby="defaultFormControlHelp" autofocus required
                  />
                  {{-- <input type="hidden" name="pekerjaan"> --}}

                    <label for="defaultFormControlInput" class="form-label">Status</label>
                  <input
                    type="text"
                    class="form-control"
                    id="defaultFormControlInput"
                    name="is_admin"
                    aria-describedby="defaultFormControlHelp" autofocus required
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