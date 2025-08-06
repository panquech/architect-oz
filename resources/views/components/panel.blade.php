@php
    $classes = "p-4 bg-white/5 rounded-lg flex border border-transparent hover:border-blue-800 transition-colors duration-300 group";
@endphp
<div {{ $attributes->merge(['class' => $classes])}}>
    {{ $slot }}
</div>
