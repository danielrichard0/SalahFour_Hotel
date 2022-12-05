@extends('layouts.main')

@section('container')

<style>
  .ourteam{
    background-image: url('/image/ortim.jpg');
    background-color: #cccccc;
    height: 400px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
    position: relative;
    z-index: 0;

}
</style>


<section class="ourteam" id="ourteam">
  <h3 class="fs-1 text-center fw-bold" style="color:white">Our Team</h3>
  <br>
  <img src="{{asset('/image/LOGO.png')}}" width="200" height="200" class="rounded mx-auto d-block" alt="LOGO"><br>   
</section> 

<section class="inti4" id="inti4">
  <h1 style="margin-top: 15px; margin-left: -15px">  
    <center>Kelompok Jetis Rekesan 02</center> 
  </h1>
  <p style="margin-top: 30px">
    <center>Kelompok Jetis Rekesan 02 merupakan kelompok bermain anak yang berbasis di Salatiga</center>   
  </p> 
  <p> 
    <center>Jetis Rekesan 02 merupakan alamat Headquarter dari kelompok kami, yaitu dirumah lord Oktaviano</center>    
  </p>
  <p>
    <center>Kami mengerjakan tugas ini dengan sepenuh hati dan jiwa raga kami, jadi tolong nilainya A+ Kak 🙏</center>       
  </p>
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col"> 
        <img src="{{asset('/image/bgdaniel.jpg')}}"  width="350" height="350" class="rounded mx-auto d-block">
      </div>
      <div class="col">
        <h2>  
          Daniel Richaro
        </h2>
        <p >  
          NIM : 672020083
        </p>  
        <p >  
          Pemuda Tamvan dan Berani asal Solo.  
        </p> 
        <p>  
          "Butuh tutor laravel kah deck ??"       
        </p> 
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col"> 
        <img src="{{asset('/image/bgtim.jpg')}}"  width="350" height="350" class="rounded mx-auto d-block">
      </div>
      <div class="col">
        <h2>  
        Timothy Arif Kurniawan 
        </h2>
        <p >  
          NIM : 672020104 
        </p>  
        <p >  
          Pemuda Tamvan dan Berani asal Solo.(part 2)  
        </p> 
        <p>  
          "Info cwe jomblo FTI ?(yang tionghoa-tionghoa aja)"  
        </p> 
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col"> 
        <img src="{{asset('/image/bgvyan.jpg')}}" width="350" height="350" class="rounded mx-auto d-block">
      </div>
      <div class="col">
        <h2>  
        Oktaviano Miftahqul Ma’arif 
        </h2>
        <p >  
          NIM : 672020091 
        </p>  
        <p >  
          CEO dan pemilik Jetis Rekesan 02 Hq   
        </p> 
        <p>  
          "Sini sama om vian"        
        </p> 
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col"> 
        <img src="{{asset('/image/bgdhean.jpg')}}" width="350" height="350" class="rounded mx-auto d-block">
      </div>
      <div class="col">
        <h2>  
        Muhamad Rizky Dhean A
        </h2>
        <p >  
          NIM : 672020289 
        </p>  
        <p >  
          Hamba Allah  
        </p> 
        <p>  
          "Profil teman-teman saya diatas ngawur semua, yang bener cuma saya"        
        </p> 
      </div>
    </div>
</section>



@endsection 