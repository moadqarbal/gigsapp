<x-layout>
@include('partials._search')

<div class="gigs-list container-fluid">
    <div class="row">

        <div class="container">
            <div class="card bg-light mt-5">
              
              <div class="card-body text-center">
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <img class="img-thumbnail rounded-start" src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}" alt="Logo">
                  </div>
                  <div class="col-md-4"></div>
                </div>
                
                <!-- Card title -->
                <h5 class="card-title">{{ $listing->title }}</h5>
                <!-- Small card title -->
                <h6 class="card-subtitle mb-2 text-muted">{{ $listing->company }}</h6>
                
                <x-listing-tags :tagsCsv="$listing->tags" />
                
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

            <div class="card bg-light mt-2 p-3">
              <a class="text-dark" href="{{ url('listings/' . $listing->id . '/edit') }}">Edit</a>
            </div>

            <div class="card bg-light mt-2 p-3">
              <form action="{{ route('listings.destroy', $listing->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="text-dark" >Delete</button>
              </form>
              
            </div>

            <div style="margin-bottom: 150px"></div>
          </div>

        
    </div> <!-- end listings row -->
</div>
</x-layout>