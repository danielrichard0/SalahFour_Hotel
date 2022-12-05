@extends('layouts.main')

@section('container')

<section class="abotus" id="abotus">
  <h3 class="fs-1 text-center fw-bold">Hotel Overview</h3>
  <br>
  <img src="{{asset('/image/LOGO.png')}}" width="400" height="400" class="rounded mx-auto d-block" alt="LOGO"><br>   
</section> 

<section class="inti4" id="inti4">
  <h1 style="margin-top: 15px; margin-left: -15px">  
    <center>Our Hotel</center> 
  </h1>
  <p style="margin-top: 30px">
    <center>SalahFour Hotel Adalah Hotel Yang Terletak Di Kota Salatiga Dengan Kemewahan Arsitektur Modern Serta Menyajikan Pemandangan Alam Pegunungan</center>   
  </p> 
  <p> 
    <center>SalahFour Hotel Menyediakan Berbagai Macam Fasilitas Yang Dapat Dimanfaatkan Oleh Masyarakat Umum</center>    
  </p>
  <p>
    <center>Mulai Dari Kegitan Penginapan, Pertemuan, Pariwisata Hingga Wedding Party Dapat Dilakukan Di SalahFour Hotel</center>       
  </p>
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col"> 
        <img src="{{asset('/image/histori.jpg')}}" width="350" height="500" class="rounded mx-auto d-block" alt="LOGO">
      </div>
      <div class="col">
        <br><br><br><br><br><br>
        <h2>  
          History 
        </h2>
        <p >  
          SalahFour hotel didirikan pada tanggal 15 Agustus 2023. 
        </p>  
        <p >  
          SalahFour hotel sudah beroperasi selama 3 tahun   
        </p> 
        <p >  
          dan mendapatkan penghargaan sebagai hotel    
        </p> 
        <p>  
          terbaik se - Jawa Tengah tahun 2025.        
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
            Location  
          </h2> <br>
          <p class="text-end">  
            Lokasi SalahFour Hotel berada di Kota Salatiga. 
          </p>  
          <p class="text-end">  
            SalahFour Hotel beralamat di Jalan Jetis Rekesan 02.    
          </p> 
        </div>
        <div class="col">
            <img src="{{asset('/image/lokasi.png')}}" width="350" height="450" class="rounded mx-auto d-block border border-5" alt="LOGO">
        </div>
      </div>
    </div>

</section>



@endsection 