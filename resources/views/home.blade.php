@extends('layouts.main')

@section('baris1')
<div class="container-fluid pt-5" id="content1">
    <div class="container" style="padding-top: 120px;">
        <div class="row">
            <div class="col-lg-12 offset-lg-3">
                <h1 class="text-warning">Halo Pelanggan</h1>
            </div>
        </div>
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <h1 class="text-warning" id="animasi">SELAMAT DATANG</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
            <span class="text-warning fs-3 fst-italic">Kami Menyediakan Tempat Yang Baik, Kamar Yang Bersih Dengan Fasilitas Lebih Baik</span>
        </div>
      </div>
    </div>
</div>


    <div class="container-fluid" style="background-color: darkgray;">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
               <h3 class="text-center mt-3">Tentang Cloud</h3>
               <span>Aplikasi Ini Dibuat Menggunakan FrameWork Laravel</span>
               <hr class="fs-3">
               <img src="/assets/img/backgrounds/idar.jpg" alt="" class="card-img-top img-thumbnail img-fluid rounded-circle" style="width:300px; height:200px">
               <br>
               Alfaidar Amir <br>
               <small>Web Developer</small>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: dimgrey;">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 class="mt-3">Jenis <span>Kamar</span>  </h2>
                    <br>
                    <p>Kami Menyediakan Berbagai Jenis Kamar, Baik untuk Sendiri,Pasangan, Maupun Keluarga</p>
                </div>
            </div>
            <div class="row">
                @foreach($kamars as $p)
             <div class="col-lg-4 col-md-6 mt-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/' . $p->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Single Room</h5>
                      <p class="card-text">Rp {{ $p->biaya }}/<span>Malam</span></p></p>
                      <a href="/pesan" class="btn btn-primary">Pesan</a>
                    </div>
                  </div>
             </div>
                @endforeach
            </div>
        </div>
    </div>
<script>
    var typed = new Typed('#animasi', {
        strings: ['SELAMAT DATANG.', ' KEUNGGULAN KAMAR'],
      typeSpeed: 100,
      loop: true
    });
  </script>
@endsection