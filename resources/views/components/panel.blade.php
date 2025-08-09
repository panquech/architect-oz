@php
    $classes = "p-4 rounded-lg flex border border-transparent hover:border-gray-400 transition-colors duration-300 group";
@endphp
<div {{ $attributes->merge(['class' => $classes])}}>
    {{ $slot }}
</div>
