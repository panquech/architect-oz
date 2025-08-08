<x-panel class="gap-x-6 mx-20 bg-pink-100">  
    <div class="flex-1 flex flex-col bg-blue-200">
        {{-- <a href="/" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a> --}} {{--self-start will make the object stay in ther far left--}}
        <h3 class="group-hover:text-blue-500 text-xl font-bold mt-3 transition-colors duration-300">
            <a href="{{-- {{$job->url}} --}}" target="_blank">
                LA NUBE{{--  {{ $job->title }} --}}
            </a>
        </h3>
        <div class="text sm text-gray-500 mt-auto">
            <p class="font-medium">Residente de Obra</p>
            <p class=""> Construcción{{-- {{ $job->salary }} --}}</p>
        </div>

    </div>
    <div class="bg-purple-200">
        <p>En conjunto con: ARQUARIS, S. DE R.L. DE C.V.</p>
        <p>Ubicación: Blvd Sofia s/n, Col. Valle del Campestre, San Pedro Garza García, N.L.</p>
    </div>
</x-panel>
