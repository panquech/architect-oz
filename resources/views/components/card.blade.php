@props(['service'])

<x-panel class="flex-col">
    <div class="">
        <img src="{{Vite::asset('resources/images/services/' .$service->id .'.jpg')}}" alt="" class="rounded-md h-72 w-full object-cover">
    </div>
    <div class="pt-4">
        <h3 class="group-hover:underline text-3xl transition-all duration-300">
            <a href="/" target="_blank">
                {{ $service->name }}
            </a>
        </h3>
        <p class="text-md">{{ $service->description }}</p>
    </div>
</x-panel>
