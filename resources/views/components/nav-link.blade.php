@props(['active' => false])


<a {{ $attributes }} class="{{ $active ? 'underline font-bold' : ''}}" aria-current="{{ $active ? 'page' : 'false'}}">
    {{ $slot }}
</a>