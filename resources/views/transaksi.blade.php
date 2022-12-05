<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pembayaran</title>
  
  <link rel="icon" type="image/png" href="{{asset('/image/iconkcil.png')}}">
  <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" >
  <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
  <link href="{{asset('/frontendmania.css')}}" rel="stylesheet" > 
  <script src="https://kit.fontawesome.com/9b545c0800.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>      
   
</head>
<body> 
<style>
        .btn-dark{   
            height: 39px;
            width: 210px;
            background: black;        
            box-shadow: 0 0 8px gold;          
            -webkit-transition: all 0.5s ease-in-out;
            border: 0px;
            color: #fff;  
        }
        .btn-dark:hover{  
            -webkit-transform: scale(1.1);  
            background: grey;              
        }   
</style>
<section class="inti6" id="inti6">
    <h2 class="text-center">TRANSAKSI</h2>
        <br><br>
        <form class="row g-3 needs-validation" novalidate>
          <h3>Pembayaran</h3>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Total Bayar</label>  
            <div class="col-sm-10">
              <input type="email" class="form-control" id="exampleFormControlInput1"> 
            </div>
          </div>
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Rekening</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" value="09088231287233289" aria-label="Disabled input example" disabled readonly>
            </div>
            <div id="passwordHelpBlock" class="form-text">    
              #Pastikan Anda Mengirim Uang Sesuai Dengan Total Yang Berlaku Diatas !!!  
            </div>
          </div>
          <div class="mb-3 row"> 
            <label for="formFile" class="col-sm-2 col-form-label">Upload Bukti Pembayaran</label>         
            <div class="col-sm-10">
              <input class="form-control" type="file" id="formFile">           
            </div>
            <div id="passwordHelpBlock" class="form-text">
              #Kirim File / Foto Dalam Bentuk PDF Atau GAMBAR, Pastikan File Yang Dikirim Jelas !!!    
            </div>
          </div>
          <div class="col-12"> 
            <a class="btn btn-dark" href=/tran-saksi role="button" data-toggle="modal" data-target="#exampleModalLong" style="color: gold; margin-left: -8px;">Konfirmasi Pembayaran</a>                  
        </div>
        </form>

        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;"><center>Notifikasi</center></h5>     
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-placeholder="left">
                  <span aria-hidden="true">&times;</span> 
                  </button>
              </div>
              <div class="modal-body" style="text-align: center; color: black;">
                <center> 
                  <h3>Proses Pembayaran Berhasil</h3>
                  <h5>Silahkan Kembali Ke Home</h5> 
                  <a class="btn btn-dark" href="/" role="button" style="color: gold;">Kembali</a>            
                </center> 
              </div>  
        
      </section>  

</body>
</html>         
