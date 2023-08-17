@extends('layouts.main')

@section ('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Form Registration!</h1>
      <form action="/register" method="post">
        @csrf
        <div class="form-floating">
          <input type="text" name="pengguna" class="form-control @error('pengguna') is-invalid @enderror" id="pengguna" placeholder="pengguna" required value="{{ old('pengguna') }}">
          <label for="pengguna">Pengguna</label>
          @error('pengguna')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="alamat" required value="{{ old('alamat') }}">
          <label for="alamat">Alamat</label>
          @error('alamat')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="pekerjaan" class="form-control rounded-top @error('pekerjaan') is-invalid @enderror" id="pekerjaan" placeholder="pekerjaan" required value="{{ old('pekerjaan') }}">
          <label for="pekerjaan">Pekerjaan</label>
          @error('pekerjaan')
          <div class="invalid-feedback">
           {{ $message }}
         </div>
         @enderror
       </div>
       <div class="form-floating">
        <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Registrasi</button>
    </form>
    <small class="d-block text-center mt-3">Sudah Punya Akun? <a href="/login">Login</a></small>
  </main>
  
</div>
</div>
@endsection