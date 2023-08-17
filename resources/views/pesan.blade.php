@extends('layouts.main')

@section('baris1')
 <div class="container-fluid">
    <div class="container">
        <div class="row text-center ">
            <div class="col-lg-12">
                <h1 class="text-dark">Silahkan<span class="text-primary mx-3">Pesan</span></h1>
                <hr>
            </div>
        </div>


      <form action="" method="Post">
           @csrf
       <div class="row" id="kotak">
          <div class="col-lg-2">
             <div class="card text-center" style="width: 15rem; height:10rem; background-color:cadetblue;">
               <div class="card-body">
                 <h1 class="card-title fs-100">1</h1>
                 <br>
                 <h6 class="card-subtitle mb-2 text-dark">Info Pemesanan</h6>
               </div>
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

 
 @endsection