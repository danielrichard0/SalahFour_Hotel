<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Salah Four</title>
    <!--ICON HOTEL-->
    <link rel="icon" type="image/png" href="{{ asset('/image/iconkcil.png') }}">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontendmania.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b545c0800.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

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
                   <a class="nav-link text-warning" href=/our-team >Our Team</a>

                </li>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-dark bg-dark navbar-fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler btn-outline-warning" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="{{ asset('/image/iconkcil.png') }}" alt="Bootstrap" width="30" height="30">
            </a>
            <a class="btn btn-light btn-lg text-warning" href="/register" role="button">Register</a>
            <ul class="navbar-nav ms-auto">
                @auth

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="true">
                            Hello, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Your Transaction</a></li>
                            <li>
                              <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout </button>
                              </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="btn btn-light btn-lg text-warning" href="/login" role="button">Login</a>
                    </li>
                </ul>
            @endauth
            {{-- <button style="color:black; background-color:gold;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">  
              Sign In  
        </button>        
        @include('partials.login_reg') --}}
    </nav>
</body>

</html>
