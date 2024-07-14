@extends('layout')

@section('content')
@include('partials._search')

<div class="gigs-list container-fluid">
    <div class="row">

        <div class="container">
            <div class="card bg-light mt-5">
              
              <div class="card-body text-center">
                <img src="images/no-image.png" alt="Logo">
                <!-- Card title -->
                <h5 class="card-title">{{ $listing->title }}</h5>
                <!-- Small card title -->
                <h6 class="card-subtitle mb-2 text-muted">{{ $listing->company }}</h6>
                
                <p class="card-text">
                  <span class="badge rounded-pill bg-dark text-white me-1">api</span>
                  <span class="badge rounded-pill bg-dark text-white me-1">vue</span>
                  <span class="badge rounded-pill bg-dark text-white">laravel</span>
                </p>
                
                <p class="card-text">
                  <i class="bi bi-geo-alt-fill me-1"></i> {{ $listing->location }}
                </p>
                <!-- Description -->
                <div class="card-text">
                  <h6>Description</h6>
                  <p>{{ $listing->description }}</p>
                </div>
                <!-- Buttons -->
                <div class="mt-3">
                  <!-- Contact employer button -->
                  <a href="mailto:{{ $listing->email }}" class="btn btn-danger form-control" >Contact Employer</a>
                </div>
                <div class="mt-3">
                  <!-- Contact employer button -->
                  <a href="{{ $listing->website }}" target="_blank" class="btn btn-dark form-control" >Visit Website</a>
                </div>
                
              </div>
            </div>
          </div>

        
        


        
    </div> <!-- end listings row -->
</div>
@endsection