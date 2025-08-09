@props(['job' => 'Trabajo'])
<x-panel class="break-inside-avoid justify-between flex-col">  
    <div class="">
        {{-- <a href="/" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a> --}} {{--self-start will make the object stay in ther far left--}}
        <p class="inline font-extralight text-md">({{ $job->period }})</p>
        <h3 class="group-hover:text-gray-500 text-2xl font-bold transition-colors duration-300 mt-2">
                {{ $job->name }}
        </h3>
        <div class="text-md my-6 space-y-1">
            @if ($job->position)
                <p class=""><strong>Puesto:</strong> {{ $job->position }}</p>
            @endif
            @if ($job->position)
                <p class=""><strong>Tareas:</strong> {{ $job->work }}</p>
            @endif
        </div>
    </div>

    <div class="text-sm space-y-2">
        <p class=""><strong>En colaboración con:</strong> {{ $job->company->name }}</p>
        <p><strong>Ubicación:</strong> {{ $job->address }}</p>
    </div>
</x-panel>
