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

          <form action="/register" method="post">
            @csrf
            <div class="form-floating">
              <input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" id="username" placeholder="Username"><br><br>   
              <label for="username">Username</label>
            </div>
            <div class="form-floating">
              <input type="text" name="password" class="form-control rounded-top @error('password') is-invalid @enderror" id="password" placeholder="Password"><br><br>   
              <label for="password">Password</label>
            </div>
            <button class="btn btn-primary" type="submit">Sign in</button>
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
                  <form action="/register" method="post">
                    @csrf
                    Username : <input type="text"  name="username" class="form-controll @error('username') is-invalid @enderror" id="username" placeholder ="Username"><br><br>   
                    email :    <input type="email" name="email" id="email" placeholder ="Email"><br><br>   
                    Password : <input type="text" name="password" placeholder ="Password"><br><br>  
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
