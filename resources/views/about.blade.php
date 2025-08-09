<x-layout>
    <section class="max-w-[90%] mx-auto">
        <x-heading>Trayectoria</x-heading>
        {{-- columns-# to determine the number of cols --}}
        <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-3 gap-8 mx-auto space-y-6 mt-10">
            @foreach ($jobs as $job)
                {{-- each card has the class of break-inside-avoid to make the 'grid' masonry-like --}}
                <x-card-wide :$job/>
            @endforeach
        </div>
    </section>
</x-layout>