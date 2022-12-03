<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Hotel Salah Four</title>
      <!--ICON HOTEL-->
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
    <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <a class="navbar-brand text-warning" href="#">Overview</a>
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a class="nav-link text-warning" aria-current="page" href="#">Room and Suites</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-warning" href="#">Restaurant and Bars</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-warning">Gallery</a>
    </li>
  </ul>
  </div>
</div>

<nav class="navbar navbar-dark bg-dark navbar-fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">
      <img src="{{asset('/image/iconkcil.png')}}" alt="Bootstrap" width="30" height="30"> 
    </a> 

      <button style="color:black; background-color:gold;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">  
            Sign In  
      </button> 
                     
                   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;"><center>Sign In</center></h5>    
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-placeholder="left">
                           <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body" style="text-align: center; color: black;">
                           <form action="" method="post">
                              Username : <input type="text" name="username"><br><br>   
                              Password : <input type="text" name="password"><br><br>  
                              <input type="submit" name="kirim" value="Sign In">  
                           </form> 
                          <br>
                          <button style="color:black; background-color:gold;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalShort">  
                            Sign Up  
                          </button>
                           <div class="modal fade" id="exampleModalShort" tabindex="-1" role="dialog" aria-labelledby="exampleModalShortTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalShortTitle" style="text-align: center;"><center>Sign Up</center></h5>    
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-placeholder="left">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div> 
                                <div class="modal-body" style="text-align: center; color: black;">
                                    <form action="" method="post">
                                       Username : <input type="text" name="username"><br><br>   
                                       Password : <input type="text" name="password"><br><br>  
                                       <input type="submit" name="kirim" value="Sign Up"> 
                                    </form> 
                                </div>
                                </div>
                                </div>
                                </div>                    
                   </div>
                   </div> 
                   </div>
                   </div>
</nav>
</body>    
</html>  

  