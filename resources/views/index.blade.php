<x-layout>
  <section class="min-h-[calc(100vh-80px)] flex items-stretch mb-10">
    <div class="grid grid-cols-1 md:grid-cols-2 w-full">
      {{-- izq --}}
      <div class="flex items-center justify-center p-10">
        <h1 class="text-6xl xl:text-8xl font-bold">"Donde la funcionalidad se encuentra con la emoción"</h1>
      </div>
      {{-- der --}}
      <div class="h-full w-full">
        <img src="{{Vite::asset('resources/images/samuel-regan-asante-g9A2llpDObU-unsplash.jpg')}}" 
             alt="Background Image" 
             class="object-cover w-full h-full" />
      </div>
    </div>
  </section>

  <section class="max-w-[90%] mx-auto mb-10">
    <x-heading>Servicios</x-heading>
    <div class="">
      <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mt-6">
        @foreach ($services as $service)
          <x-card :$service/>
        @endforeach
      </div>
    </div>
  </section>
</x-layout>
