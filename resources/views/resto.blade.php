@extends('layouts.main')

@section('container')



<section class="inti4" id="inti4">
  <div class="container">
    <div class="row">
      <div class="col"> 
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{asset('/image/resto2.jpg')}}" width="350" height="500" class="rounded mx-auto d-block" alt="LOGO">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{asset('/image/resto1.jpg')}}" width="350" height="500" class="rounded mx-auto d-block" alt="LOGO">v>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
      </div>
      <div class="col">
        <br><br><br><br><br><br>
        <div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
        <img src="{{asset('/image/iconkcil.png')}}" width="20" height="20" class="rounded mx-auto d-block float-end" alt="LOGO">
      </div>
      <div class="col">
        <h2 class="text-center">Resto</h2>
      </div>
      <div class="col">
        <img src="{{asset('/image/iconkcil.png')}}" width="20" height="20" class="rounded mx-auto d-block float-start" alt="LOGO">
      </div>
    </div>
  </div><br>
        <p class="text-end"> Setiap masakan dari Resto Salahfour</p> 
        <p class="text-end"> Dimasak dengan bahan bahan pilihan yang berkualitas. </p>
        <p class="text-end"> Berada di samping lobby, Resto Salahfour memiliki tempat yang</p>
        <p class="text-end"> mudah diakses, serta instagramable dengan layout yang cozy dan</p> 
        <p class="text-end"> cocok untuk segala</p> 
      </div>
    </div>
  </div>
<br><br><br>
</section>




@endsection 