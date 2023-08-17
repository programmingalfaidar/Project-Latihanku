@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create Data Kamar</h1>
</div>

<div class="col-lg-8">
  <form action="/kamar" method="post" enctype="multipart/form-data" class="mb-5">
    @csrf
    <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <img class=" img-preview img-fluid mb-3 col-sm-5">
        <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" value ="{{ old('image') }}" autofocus>
        @error('image')
        <div class="invalid-feedback">
         {{ $message }}
       </div>
       @enderror
     </div>
    <div class="mb-3">
      <label for="kamar" class="form-label">Kamar</label>
      <input type="text" class="form-control  @error('kamar') is-invalid @enderror" id="kamar" name="kamar" value="{{ old('kamar') }}" autofocus>
      @error('kamar')
      <div class="invalid-feedback">
       {{ $message }}
     </div>
     @enderror
   </div>
   <div class="mb-3">
    <label for="biaya" class="form-label">Biaya</label>
    <input type="number" class="form-control  @error('biaya') is-invalid @enderror" id="biaya" name="biaya" value="{{ old('biaya') }}" autofocus>
    @error('biaya')
    <div class="invalid-feedback">
     {{ $message }}
   </div>
   @enderror
  </div>
  <div class="mb-3">
    <label for="jumlah" class="form-label">Jumlah</label>
    <input type="number" class="form-control  @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{ old('jumlah') }}" autofocus>
 </div>

<button type="submit" class="btn btn-primary">Tambah Data</button>
</form>

</div>

<script>
//   const tittle = document.querySelector('#tittle');
//   const slug = document.querySelector('#slug');

//   tittle.addEventListener('change', function(){
//     fetch('/photo/chekSlug?tittle=' + tittle.value)
//     .then(response => response.json())
//     .then(data => slug.value = data.slug)
//   });
//   document.addEventListener('trix-file-accept', function(e){
//     e.preventDefault();
//   })

  function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection