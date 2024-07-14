@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

<div class="gigs-list container-fluid">
    <div class="row">

        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach
        
    </div> <!-- end listings row -->
</div>
@endsection