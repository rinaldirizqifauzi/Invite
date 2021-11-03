@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 ><center> Wedding Party</center></h1>
  </div>
  <form action="" method="POST">
      @csrf
  <div class="row justify-content-center d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="row">
      <center><h1 class="mb-3">Album</h1></center>
      <center>
        <div class="col-lg-8">
           {{-- Wedding Picture --}}
           <div class="mb-3">
              <center><label for="image" class="form-label">Wedding Picture 1</label></center>
              <img class="img-preview img-fluid mb-3 col-sm-5">
              <input class="form-control" type="file" id="image" name="image1" onchange="previewImage()">
          </div>
        </div>
        <div class="col-lg-8">
           {{-- Wedding Picture --}}
           <div class="mb-3">
              <center><label for="image" class="form-label">Wedding Picture 2</label></center>
              <img class="img-preview img-fluid mb-3 col-sm-5">
              <input class="form-control" type="file" id="image" name="image2" onchange="previewImage()">
          </div>
        </div>
        <div class="col-lg-8">
           {{-- Wedding Picture --}}
           <div class="mb-3">
              <center><label for="image" class="form-label">Wedding Picture 2</label></center>
              <img class="img-preview img-fluid mb-3 col-sm-5">
              <input class="form-control" type="file" id="image" name="image3" onchange="previewImage()">
          </div>
        </div>
        <div class="col-lg-8">
           {{-- Wedding Picture --}}
           <div class="mb-3">
              <center><label for="image" class="form-label">Wedding Picture 2</label></center>
              <img class="img-preview img-fluid mb-3 col-sm-5">
              <input class="form-control" type="file" id="image" name="image4" onchange="previewImage()">
          </div>
        </div>
        </center>
    </div>  
  </div>
  <div class="row justify-content-center d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="row">
      <center><h5>Tempat Resepsi</h5></center>
      <div class="col-lg-6">
        {{-- Tempat Pria --}}
        <div class="mb-3">
          <center><label for="tgl_pria" class="form-label mb-3">Tanggal Resepsi Pria</label></center>
          <input type="date" name="tgl_pria" class="form-control" id="tgl_pria">
        </div>
        {{-- Tanggal Acara Pria --}}
        <div class="mb-3">
          <center><label for="acara_pria" class="form-label mb-3">Tempat Acara Pria</label></center>
          <input type="text" name="acara_pria" class="form-control" id="acara_pria">
        </div>
      </div>
      <div class="col-lg-6">
        {{-- Tempat Wanita --}}
        <div class="mb-3">
          <center><label for="tgl_wanita" class="form-label mb-3">Tanggal Resepsi Wanita</label></center>
          <input type="date" name="tgl_wanita" class="form-control" id="tgl_wanita">
        </div>
        {{-- Tanggal Acara Wanita --}}
        <div class="mb-3">
          <center><label for="acara_wanita" class="form-label mb-3">Tempat Acara Wanita</label></center>
          <input type="text" name="acara_wanita" class="form-control" id="acara_wanita">
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="row justify-content-center">
      <center><h5>Identitas Pengantin</h5></center> 
    <div class="col-lg-5">
          {{-- Foto Pria --}}
        <div class="mb-3">
            <center><label for="image" class="form-label">Foto Pengantin Pria</label></center>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control" type="file" id="image" name="image_lakilaki" onchange="previewImage()">
        </div>
        {{-- Nama Pria --}}
        <div class="mb-3">
          <center><label for="nama_lakilaki" class="form-label mb-3">Nama Pengantin Pria</label></center> 
          <input type="text" name="nama_lakilaki" class="form-control" id="nama_lakilaki">
        </div>
      </div>
      <div class="col-lg-5">
        {{-- Foto Wanita --}}
        <div class="mb-3">
            <center><label for="image" class="form-label">Foto Pengantin Wanita</label></center>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control" type="file" id="image" name="image_perempuan" onchange="previewImage()">
        </div>
         {{-- Nama Wanita --}}
         <div class="mb-3">
            <center><label for="nama_perempuan" class="form-label mb-3">Nama Pengantin Pria</label></center>
            <input type="text" name="nama_perempuan" class="form-control" id="nama_perempuan">
          </div>
      </div>
    </div>
  </div>
  <div class="d-grid gap-2">
    <button type="submit" class="btn btn-dark" >Buat Postingan Pengantin</button>
  </div>
  <br><br>
</form>
@endsection