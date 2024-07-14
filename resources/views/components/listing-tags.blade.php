@props(['tagsCsv'])

@php
    $tags = explode(',' , $tagsCsv)
@endphp


<p class="card-text">
@foreach ($tags as $tag)
    <a href="?tag={{$tag}}" class="badge text-decoration-none rounded-pill bg-dark text-white me-1">{{$tag}}</a>
@endforeach
</p>