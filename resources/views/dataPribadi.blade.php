@extends('layouts.main')

@section('baris1')
 <div class="container-fluid">
    <div class="container">
        <div class="row text-center ">
            <div class="col-lg-12">
                <h1 class="text-dark">Silahkan<span class="text-primary mx-3">Isi Data Pribadi</span></h1>
                <hr>
            </div>
        </div>


      <form action="" method="Post">
           @csrf
       <div class="row" id="kotak">
          <div class="col-lg-2">
             <div class="card text-center" style="width: 15rem; height:10rem; background-color:cadetblue;">
                <a href="/pesan" class="text-decoration-none">
                    <div class="card-body">
                      <h1 class="card-title fs-100">1</h1>
                      <br>
                      <h6 class="card-subtitle mb-2 text-dark">Info Pemesanan</h6>
                    </div>
                </a>
             </div>
           </div>

           <div class="col-lg-2 offset-lg-1">
            <a href="/pribadi" class="text-decoration-none">
              <div class="card text-center" style="width: 15rem; height:10rem; background-color:cadetblue;">
                  <div class="card-body">
                    <h1 class="card-title fs-100">2</h1>
                    <br>
                    <h6 class="card-subtitle mb-2 text-dark">Data Pribadi</h6>
                  </div>
                </div>
            </div>
            </a>
   
        </div>
          </form>
    </div>
 </div>

   <div class="container-fluid py-3" style="margin-top: 60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="/assets/img/backgrounds/bg-2.jpg" alt="">
            </div>

            <div class="col-lg-4">
                <h3>Single Room</h3>
                 <h4>Harga</h4>
                 <span>300/malam</span>
                 <p>Kamar lengkap dengan faslitas baik membuat nyaman customer dan ain-lain</p>
            </div>
        </div>

        <div class="row" style="background-color:cornflowerblue; opacity:0.5;">
            <div class="col-lg-6">
              <form action="/konfimasipemesanan" method="Post">
              @csrf
              <label for="defaultFormControlInput" class="form-label">Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          name="nama"
                          placeholder="John Doe"
                          aria-describedby="defaultFormControlHelp"
                        />
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input
                          type="email"
                          class="form-control"
                          id="exampleFormControlInput1"
                          name="email"
                          placeholder="name@example.com"
                        />
                        <label for="html5-date-input" class="col-md-4 col-form-label">Tanggal Check In</label>
                        <div class="col-md-12">
                          <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" name="checkin" />
                        </div>
                        <label for="html5-tel-input" class="col-md-2 col-form-label">No Phone</label>
                        <div class="col-md-12">
                          <input class="form-control" type="tel"  id="html5-tel-input" name="nohp" />
                        </div>
                        <label for="defaultFormControlInput" class="form-label">Biaya</label>
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          name="biaya"
                          placeholder="John Doe"
                          aria-describedby="defaultFormControlHelp"
                        />
                        <label for="html5-number-input" class="col-md-2 col-form-label">Number</label>
                        <div class="col-md-12">
                          <input class="form-control" type="number" value="18" id="html5-number-input" name="jumlah" />
                        </div>
                        <div class="py-3">
                            <button type="submit" class="btn btn-success py-3 col-lg-2" onclick="return confirm('apakah anda ingin pesan')">Pesan</button>
                        </div>
                    </div>
                    
        </div>
              </form>
    </div>
   </div>

 @endsection