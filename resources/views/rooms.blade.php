@extends('layouts/main')

@section('container')
  <br>
  <section class="inti5" id="inti5">
  <div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
        <img src="{{asset('/image/iconkcil.png')}}" width="40" height="40" class="rounded mx-auto d-block float-end" alt="LOGO">
      </div>
      <div class="col">
        <h1 class="text-center">Jenis Kamar</h1>
      </div>
      <div class="col">
        <img src="{{asset('/image/iconkcil.png')}}" width="40" height="40" class="rounded mx-auto d-block float-start" alt="LOGO">
      </div>
    </div>
  </div>
  <br><br> 
  </section>
  @foreach ($rooms as $i)
  <section class="inti5" id="inti5">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="konten">
          <img src="{{asset($i->foto_kamar)}}" width="500" height="300" class="rounded float-end"><br><br>
        </div>
      </div>
      <div class="col-6">
            <h3 class="">{{ $i->jenis_kamar }}</h3>
            <p class="">{{ $i->jumlah_guest }}</p>
            <div class="">
            <button class="btn btn-warning btn-lg" type="button">See More Details</button>
          </div>
      </div>
    </div>
  </section>

  @endforeach
@endsection

