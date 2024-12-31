@props(['job'])

<x-panel class="flex gap-x-6">
		<div>
				<x-employer-logo />
		</div>

		<div class="flex-col flex-1">
				<div class="self-start text-sm text-gray-400">{{ $job->employer->name }}</div>
				<h3 class="font-bold text-xl mt-3 group-hover:text-blue-500 transition-colors duration-300">{{ $job->title }}</h3>
				<p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
				{{-- mt-auto pushes the last item to the end. --}}
		</div>
		<div>
				@foreach ($job->tags as $tag)
						<x-tag :$tag />
				@endforeach
		</div>
</x-panel>
