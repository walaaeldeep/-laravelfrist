@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title> tourism  </title>
        <meta charset="utf-8" />
        <meta  name="disciiption"contact"">
        <meta name="viewpoort"contactnt="width-device-width,intial-scale=1.0">
        <link href="css/all.min.css" rel="stylesheet">
        <link href="css1/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="er.css">
    </head>
    <body>
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="flight confirmation.html">ENJOY TRAVEL</a>
          <img src="image/uu.png" width="10%" height="5%">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="HOME.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="About US.html">About US</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="payment.html">payment</a></li>
                  <li><a class="dropdown-item" href="flight confirmation.html">flight confirmation</a></li>

                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="LogIn.html">Login</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="budget.html">budget</a></li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                    <a href="contact US.html">
                    <i class="fas fa-user-alt"></i>
                    </a>
              </form>
          </div>
        </div>
      </nav>
         
      <div class="row">
        <div class="col-2">
       
      
      
      <div class="col-1"></div>
      <div class="col-6">
      
       
      </div>
      </div>
      
      
      <div class="col-1"></div>
      <div class="col-2">
      <a class="menuIcon pt d-inline-block" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </a>
      </div>
      </div>
      </div>
      
      </div>
      </header>
      </div>
      
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
      <div>
        Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
      </div>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
      </div>
      </div>
<div class="joy">
        <img src="image/tt.jpg" title=" tourism   " width="100%" height="20%" >


</div>
<h1>    HERE’S HOW YOU CAN GET IN TOUCH    </h1>
        <br>
        
        <a href="   https://mail.google.com/mail/u/0/       ">
            <p> walaaeldeep123@gmail.com  </p>
        </a>
        
        <p><b>  OR DO YOU PREFER WE CONTACT YOU?   </b></p>
        <fieldset >
            <from>

<div>
    


<fieldset>
  <div class="form">
    <div class="login-form">
      <a href="#" class="form-cancel">
        <i class="fas fa-times">

        </i>
      </a>
      <strong>Log In</strong>
      <form method="POST" action="{{ route('login') }}">
      @csrf
        <input type="email"placeholder="Example@gmail.com" name="email">
        <input type="password"placeholder="password" name="password">
        <input type="submit" value="Log IN">
      </form>
      <div class="form-btns">
        <a href="#" class="forget">Forget your password</a>
        <a href="contact US.html" class="singn-up-btn">create Account</a>
      </div>
    </div>
  </div>
  
</fieldset>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                      

                        

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                  

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                

                      

                                @if (Route::has('password.request'))
                               
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/bootstrap.bundle.min.js" ></script>
         <script src="js/jquery-3.6.0.min.js"></script>
          <script src="js/wa.js"></script>
@endsection
