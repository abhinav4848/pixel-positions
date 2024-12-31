@props(['width' => 90])

{{-- <img src="http://placehold.it/90/90" alt="placeholder image" class="rounded-xl"> --}}
<img src="http://picsum.photos/seed/{{ rand(0, 1000) }}/{{ $width }}" alt="placeholder image" class="rounded-xl">
