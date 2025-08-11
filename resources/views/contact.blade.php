<x-layout>
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Dinos qué te interesa</h2>
        <p class="mt-2 text-lg/8 text-gray-600">Al enviar este formulario nos pondremos en contacto para darle seguimiento a tu consulta.</p>
      </div>
      <form action="/contact" method="POST" class="mx-auto mt-16 max-w-2xl sm:mt-20">
        @csrf
        @method('POST')
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
          <x-forms.input name="first_name" label="Nombre*"/>
          <x-forms.input name="last_name" label="Apellido"/>
          <x-forms.select name="state" label="Estado">
            <option class="text-gray-600" value="" disabled selected>Selecciona tu estado</option>
            <option>Ciudad de México</option>
            <option>Estado de México</option>
            <option>Morelos</option>
          </x-forms.select>
          <x-forms.select name="city" label="Alcaldía / Municipio">
            <option value="" disabled selected>Selecciona tu alcaldía/municipio</option>
            <option>Ciudad de México</option>
            <option>Estado de México</option>
            <option>Morelos</option>
          </x-forms.select>
          <div class="sm:col-span-2">
            <x-forms.input type="email" name="email" label="Correo Electrónico"/>
          </div>
          <div class="sm:col-span-2">
            <x-forms.input name="phone-number" placeholder="123-456-7890" label="Número Telefónico"/>
          </div>
          <div class="sm:col-span-2">
            <x-forms.textarea name="message" label="Mensaje" placeholder="Escribe tu mensaje aquí"/>
          </div>
          <div class="mt-10">
            <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar</button>
          </div>
        </div>
      </form>
    </div>
</x-layout>