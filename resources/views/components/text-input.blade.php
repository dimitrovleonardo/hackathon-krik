@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full p-3 border border-white rounded-full shadow-sm bg-transparent mb-4 text-white']) !!}>
