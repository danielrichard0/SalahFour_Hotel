@extends('layouts.main')

@section('container')


<section class="inti4" id="inti4">
<div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
        <img src="{{asset('/image/iconkcil.png')}}" width="40" height="40" class="rounded mx-auto d-block float-end" alt="LOGO">
      </div>
      <div class="col">
        <h1 class="text-center">Spa and Massage</h1>
      </div>
      <div class="col">
        <img src="{{asset('/image/iconkcil.png')}}" width="40" height="40" class="rounded mx-auto d-block float-start" alt="LOGO">
      </div>
    </div>
  </div>
    <br><br>
  <div class="container">
    <div class="row">
      <div class="col"> 
        <img src="{{asset('/image/spa2.jpg')}}" width="350" height="500" class="rounded mx-auto d-block" alt="LOGO">
      </div>
      <div class="col">
        <br><br><br><br><br><br>
        <h2>  
          Spa and Massage
        </h2>
        <p >  Manfaat spa tidak hanya untuk relaksasi tubuh dan pikiran,</p> 
        <p> tetapi juga baik untuk kesehatan. </p>
        <p> Ada beberapa manfaat spa bagi kesehatan yang bisa Anda rasakan,</p>
        <p>mulai dari membersihkan dan mencerahkan kulit, mengurangi nyeri sendi</p> 
        <p> dan otot, hingga melancarkan peredaran darah.      
        </p> 
      </div>
    </div>
  </div>
<br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col"> 
          <br><br><br><br><br><br>
          <h2 class="text-end"> 
            Paket Spa and Massage 
          </h2> <br>
          <p class="text-end">  
            Paket 120 menit : Rp200.000
          </p>  
          <p class="text-end">  
            Paket 180 menit : Rp250.000   
          </p> 
          <p class="text-end">  
            Paket 240 menit : Rp350.000   
          </p> 
        </div>
        <div class="col">
            <img src="{{asset('/image/spa1.jpg')}}" width="350" height="450" class="rounded mx-auto d-block border border-5" alt="LOGO">
        </div>
      </div>
    </div>

</section>



@endsection 