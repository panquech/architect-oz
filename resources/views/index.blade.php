<x-layout>
  <section class="min-h-[calc(100vh-80px)] flex items-stretch">
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

  <section class="min-h-screen ">
    <x-heading>Servicios</x-heading>
    <div class="max-w-[1920px] mx-auto">
      <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mt-6">
        <x-card/>
        <x-card/>
        <x-card/>
        <x-card/>
        <x-card/>
        <x-card/>
        <x-card/>
        <x-card/>
        <x-card/>
        <x-card/>
      </div>
    </div>
    </section>
    
    <section>
      <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
          <div class="mx-auto max-w-2xl text-center">
              <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Dinos qué te interesa</h2>
              <p class="mt-2 text-lg/8 text-gray-600">Al enviar este formulario nos pondremos en contacto para darle seguimiento a tu consulta.</p>
          </div>
          <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
              <div>
                  <label for="first-name" class="block text-sm/6 font-semibold text-gray-900">First name</label>
                  <div class="mt-2.5">
                  <input id="first-name" type="text" name="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" />
                  </div>
              </div>
              <div>
                  <label for="last-name" class="block text-sm/6 font-semibold text-gray-900">Last name</label>
                  <div class="mt-2.5">
                  <input id="last-name" type="text" name="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" />
                  </div>
              </div>
              <div class="sm:col-span-2">
                  <label for="company" class="block text-sm/6 font-semibold text-gray-900">Company</label>
                  <div class="mt-2.5">
                    <input id="company" type="text" name="company" autocomplete="organization" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" />
                  </div>
              </div>
              <div class="sm:col-span-2">
                  <label for="email" class="block text-sm/6 font-semibold text-gray-900">Email</label>
                  <div class="mt-2.5">
                    <input id="email" type="email" name="email" autocomplete="email" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" />
                  </div>
              </div>
              <div class="sm:col-span-2">
                  <label for="phone-number" class="block text-sm/6 font-semibold text-gray-900">Phone number</label>
                  <div class="mt-2.5">
                  <div class="flex rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
                      <div class="grid shrink-0 grid-cols-1 focus-within:relative">
                        <select id="country" name="country" autocomplete="country" aria-label="Country" class="col-start-1 row-start-1 w-full appearance-none rounded-md py-2 pr-7 pl-3.5 text-base text-gray-500 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                          <option>US</option>
                          <option>CA</option>
                          <option>EU</option>
                        </select>
                        <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4">
                          <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                      </div>
                      <input id="phone-number" type="text" name="phone-number" placeholder="123-456-7890" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                  </div>
                  </div>
              </div>
              <div class="sm:col-span-2">
                  <label for="message" class="block text-sm/6 font-semibold text-gray-900">Message</label>
                  <div class="mt-2.5">
                  <textarea id="message" name="message" rows="4" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"></textarea>
                  </div>
              </div>
              <div class="flex gap-x-4 sm:col-span-2">
                  <div class="flex h-6 items-center">
                    <div class="group relative inline-flex w-8 shrink-0 rounded-full bg-gray-200 p-px inset-ring inset-ring-gray-900/5 outline-offset-2 outline-indigo-600 transition-colors duration-200 ease-in-out has-checked:bg-indigo-600 has-focus-visible:outline-2">
                        <span class="size-4 rounded-full bg-white shadow-xs ring-1 ring-gray-900/5 transition-transform duration-200 ease-in-out group-has-checked:translate-x-3.5"></span>
                        <input id="agree-to-policies" type="checkbox" name="agree-to-policies" aria-label="Agree to policies" class="absolute inset-0 appearance-none focus:outline-hidden" />
                    </div>
                  </div>
                  <label for="agree-to-policies" class="text-sm/6 text-gray-600">
                    By selecting this, you agree to our
                    <a href="#" class="font-semibold whitespace-nowrap text-indigo-600">privacy policy</a>.
                  </label>
                </div>
              </div>
              <div class="mt-10">
                <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's talk</button>
              </div>
          </form>
      </div>
    </section>
</x-layout>
