@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

<div class="gigs-list container-fluid">
    <div class="row">

        @foreach ($listings as $listing)
        <div class="col-md-6">
            <div class="card bg-light mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="{{ url('listings/' . $listing->id) }}"><img src="{{ asset('images/no-image.png') }}" class="img-fluid rounded-start" alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="{{ url('listings/' . $listing->id) }}" class="text-decoration-none text-dark">
                                <h3 class="card-title mb-0">{{ $listing->title }}</h3>
                            </a>
                            <h5 class="card-title fw-bold">{{ $listing->company }}</h5>
                            <p class="card-text">{{ $listing->description }}</p>
                            <p class="card-text">
                                <span class="badge rounded-pill bg-dark text-white me-1">api</span>
                                <span class="badge rounded-pill bg-dark text-white me-1">vue</span>
                                <span class="badge rounded-pill bg-dark text-white">laravel</span>
                            </p>
                            <p class="card-text">
                                <i class="bi bi-geo-alt-fill me-1"></i> {{ $listing->location }}
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated {{ $listing->updated_at->diffForHumans() }}</small></p>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
        @endforeach

        
        


        
    </div> <!-- end listings row -->
</div>
@endsection