<footer class="px-6 md:px-16 lg:px-24 xl:px-32 w-full mt-auto">
    <div class="flex flex-col md:flex-row items-center md:items-center justify-between gap-2 pt-10 border-b border-gray-500/30">
        <div class="space-y-6">
            <div class="flex flex-col items-center md:items-start">
                {{-- logo --}}
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo de Architect OZ" class="w-[150px]"> {{--Vite directive to 'import' assets--}}
                <p class="mt-6 text-lg text-gray-500 italic">
                    Donde la funcionalidad se encuentra con la emoción.
                </p>
            </div>
            <div class="flex justify-center md:justify-start items-center gap-2">
                {{-- facebook --}}
                <a href="https://www.facebook.com" target="_blank">
                    <img src="{{ Vite::asset('resources/images/facebook-logo.svg') }}" alt="Logo de Architect Facebook" class="h-8 w-8">
                </a>
                {{-- whatsapp --}}
                <a href="https://www.whatsapp.com" target="_blank">
                    <img src="{{ Vite::asset('resources/images/whatsapp-logo.svg') }}" alt="Logo de Architect Whatsapp" class="h-8 w-8">
                </a>
                {{-- instagram --}}
                <a href="https://www.instagram.com" target="_blank">
                    <img src="{{ Vite::asset('resources/images/instagram-logo.svg') }}" alt="Logo de Architect Instagram" class="h-8 w-8">
            </div>
        </div>

        <div class="w-1/2 flex flex-col flex-wrap md:flex-nowrap items-center  text-lg">
            <h2 class="font-semibold text-gray-900 mb-5">CONTACTO</h2>
            <ul class="space-y-2 list-none">
                <li>Telefono: <a class="text-gray-500 hover:text-teal-600 hover:underline transition-all duration-400" href="tel:5541035943">5541035943</a></li>
                <li>Telefono: <a class="text-gray-500 hover:text-teal-600 hover:underline transition-all duration-400" href="tel:5623305890">5623305890</a></li>
                <li>Correo: <a class="text-gray-500 hover:text-teal-600 hover:underline transition-all duration-400" href="mailto:mail.test.test">mail.test.test</a></li>
            </ul>
        </div>
        <div class="w-full md:w-1/2">
            <div class="aspect-video mt-5 md:m-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60272.076075660574!2d-99.05484493982445!3d19.238624552213988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce05331f94049b%3A0xd8273ef4e4b6e400!2sReparaci%C3%B3n%20y%20Mantenimiento%20de%20Caminadoras%20y%20equipos%20de%20ejercicio%20%22Repair%20%26%20Fit%20Caminadoras%22!5e0!3m2!1sen!2smx!4v1754791716840!5m2!1sen!2smx" 

                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full h-full"></iframe>
            </div>
        </div>
    </div>
    <p class="py-4 text-center text-xs md:text-sm text-gray-500">
        Copyright 2025 © | Architect OZ | All Right Reserved.
    </p>
</footer>