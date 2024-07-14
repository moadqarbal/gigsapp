<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gigs App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#"> <i class="bi bi-person-fill-add"></i> Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <i class="bi bi-door-open-fill"></i> Login</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>

      

    

    
    @yield('content')


    <footer class="bg-danger text-white text-center py-3 fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-md-start">
                    &copy; 2024 Laragigs. All rights reserved.
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="btn btn-outline-light">Post Job</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>