<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gigs App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}">Gigs App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

              @auth

              <li class="nav-item">
                <a class="nav-link" href="#">  Welcome : <i class="bi bi-person-fill"></i> <b>{{ auth()->user()->name }}</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('manage') }}"> <i class="bi bi-list"></i> Manage</a>
              </li>
              <form action="{{ route('user.logout') }}" method="post">
                @csrf
                <button type="submit" class="btn-link">Logout</button>
              </form>

              @else

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('register') }}"> <i class="bi bi-person-fill-add"></i> Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('login') }}"> <i class="bi bi-door-open-fill"></i> Login</a>
              </li>

              @endauth

              
            </ul>
            
          </div>
        </div>
      </nav>
    
    {{$slot}}


    <footer class="bg-danger text-white text-center py-3 fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-md-start">
                    &copy; 2024 Laragigs. All rights reserved.
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="{{ route('listings.create') }}" class="btn btn-outline-light">Post Job</a>
                </div>
            </div>
        </div>
    </footer>

    <x-flash-message />
    <x-flash-message-delete />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>