<footer class="px-6 md:px-16 lg:px-24 xl:px-32 w-full mt-auto">
    <div class="flex flex-col md:flex-row items-start justify-center gap-10 py-10 border-b border-gray-500/30">
        
        <div class="max-w-120">
            {{-- logo --}}
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo de Architect OZ" class="w-[150px]"> {{--Vite directive to 'import' assets--}}
            <p class="mt-6 text-sm text-gray-500 text-incline italic">
                Donde la funcionalidad se encuentra con la emoción.
            </p>
            <div class="flex items-center gap-2 mt-3">
                {{-- facebook --}}
                <a href="#">
                    <img src="{{ Vite::asset('resources/images/facebook-logo.svg') }}" alt="Logo de Architect OZ" class="h-8 w-8">
                </a>
                {{-- whatsapp --}}
                <a href="#">
                    <img src="{{ Vite::asset('resources/images/whatsapp-logo.svg') }}" alt="Logo de Architect OZ" class="h-8 w-8">
                </a>
                {{-- instagram --}}
                <a href="#">
                    <img src="{{ Vite::asset('resources/images/instagram-logo.svg') }}" alt="Logo de Architect OZ" class="h-8 w-8">
            </div>
        </div>

        <div class="w-1/2 flex flex-wrap md:flex-nowrap justify-between">
            <div class="pr-8">
                <h2 class="font-semibold text-gray-900 mb-5">CONTACTO</h2>
                <ul class="text-sm text-gray-500 space-y-2 list-none">
                    <li><a href="#">Telefono</a></li>
                    <li><a href="#">Correo</a></li>
                </ul>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60272.076075660574!2d-99.05484493982445!3d19.238624552213988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce05331f94049b%3A0xd8273ef4e4b6e400!2sReparaci%C3%B3n%20y%20Mantenimiento%20de%20Caminadoras%20y%20equipos%20de%20ejercicio%20%22Repair%20%26%20Fit%20Caminadoras%22!5e0!3m2!1sen!2smx!4v1754455568925!5m2!1sen!2smx" 

                
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
    <p class="py-4 text-center text-xs md:text-sm text-gray-500">
        Copyright 2025 © | Architect OZ | All Right Reserved.
    </p>
</footer>