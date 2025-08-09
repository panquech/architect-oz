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

  <section class="max-w-[90%] mx-auto">
    <x-heading>Servicios</x-heading>
    <div class="">
      <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mt-6">
        @foreach ($services as $service)
          <x-card :$service/>
        @endforeach
      </div>
    </div>
  </section>
    
  <section>
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Dinos qué te interesa</h2>
        <p class="mt-2 text-lg/8 text-gray-600">Al enviar este formulario nos pondremos en contacto para darle seguimiento a tu consulta.</p>
      </div>
      <form action="#" method="POST" class="mx-auto mt-16 max-w-2xl sm:mt-20">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
          <x-forms.input name="first_name" label="Nombre*"/>
          <x-forms.input name="last_name" label="Apellido"/>
          <x-forms.select name="state" label="Estado">
            <option>Ciudad de México</option>
            <option>Estado de México</option>
            <option>Morelos</option>
          </x-forms.select>
          <x-forms.select name="city" label="Alcaldía / Municipio">
            <option>Ciudad de México</option>
            <option>Estado de México</option>
            <option>Morelos</option>
          </x-forms.select>
          <div class="sm:col-span-2">
              <label for="email" class="block text-sm/6 font-semibold text-gray-900">Email</label>
              <div class="mt-2.5">
                <input id="email" type="email" name="email" autocomplete="email" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" />
              </div>
          </div>
          <div class="sm:col-span-2">
              <label for="phone-number" class="block text-sm/6 font-semibold text-gray-900">Número Telefónico</label>
              <div class="mt-2.5">
                <div class="flex rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
                  <input id="phone-number" type="text" name="phone-number" placeholder="123-456-7890" class="block min-w-0 grow py-1.5 pr-3 pl-4 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                </div>
              </div>
          </div>
          <div class="sm:col-span-2">
            <label for="message" class="block text-sm/6 font-semibold text-gray-900">Mensaje</label>
            <div class="mt-2.5">
              <textarea id="message" name="message" rows="4" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"></textarea>
            </div>
          </div>
          <div class="mt-10">
            <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </section>
</x-layout>
