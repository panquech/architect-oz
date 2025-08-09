@props(['job' => 'Trabajo'])
<x-panel class=" break-inside-avoid gap-x-6 mx-5 justify-between flex-col">  
    <div class="">
        {{-- <a href="/" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a> --}} {{--self-start will make the object stay in ther far left--}}
        <p class="inline font-extralight text-sm">({{ $job->period }})</p>
        <h3 class="group-hover:text-blue-500 text-xl font-bold transition-colors duration-300">
            <a href="{{-- {{$job->url}} --}}" target="_blank">
                {{ $job->name }}
            </a>
        </h3>
        <div class="text-sm text-gray-500">
            <p class="">{{ $job->position }}</p>
            <p class="">{{ $job->work }}</p>
        </div>
    </div>

    <div class="text-xs ">
        <p class="font-bold">{{ $job->company->name }}</p>
        <p>Dirección: {{ $job->address }}</p>
    </div>
</x-panel>
