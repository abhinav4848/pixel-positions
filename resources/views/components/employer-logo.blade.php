@props(['employer', 'width' => 90])

{{-- <img src="http://placehold.it/90/90" alt="placeholder image" class="rounded-xl"> --}}
{{-- <img src="http://picsum.photos/seed/{{ rand(0, 1000) }}/{{ $width }}" alt="placeholder image" class="rounded-xl"> --}}
<img src="{{ asset($employer->logo) }}" alt="employer logo" class="rounded-xl" width="{{ $width }}">
{{-- have to sym-link the public images folder: 
Run $ php artisan storage:link
Output: The [public\storage] link has been connected to [storage\app/public]. --}}
