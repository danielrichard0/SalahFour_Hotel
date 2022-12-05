@extends('layouts/main')

@section('container')
<style>
  .kamar .btn-dark { 
            height: 46px;       
            width: 210px;          
            box-shadow: 0 0 5px gold;           
            -webkit-transition: all 0.5s ease-in-out;
            border: 0px;
            color: #fff;  
            }
  .kamar .btn-dark:hover {  
            -webkit-transform: scale(1.1);  
            background: grey;             
            }          
</style>
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
          <img src="{{asset($i->foto_kamar)}}.jpg" width="500" height="300" class="rounded float-end"><br><br>
        </div>
      </div>
      <div class="col-6">
            <h4 class="" style="margin-left: -1px;">Tipe Kamar : {{ $i->jenis_kamar }}</h4>               
            <p class="">Jumlah Tamu : {{ $i->jumlah_guest }}</p>
            <p class="">Jumlah Kamar : {{ $i->jumlah_kamar }}</p>
            <p class="">Harga Kamar : Rp. {{ $i->harga_kamar }}/Malam</p> 
          <div class="kamar">    
            <div class=""> 
              <a class="btn btn-dark btn-lg text-warning" href=/pesan-kamar role="button">See More Details</a>   
          </div>
        </div>
      </div>
    </div>
  </section>         

@endforeach
@endsection 

