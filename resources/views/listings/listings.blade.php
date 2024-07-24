<x-layout>
@include('partials._hero')
@include('partials._search')

<div class="gigs-list container-fluid">
    <div class="row">

        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach
        
        <div class="py-3">
            {{ $listings->links() }}
        </div>

    </div> <!-- end listings row -->
</div>
</x-layout>