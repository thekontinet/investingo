@props(['disabled' => false, 'error' => false])

@php
    $class = implode(['form-control ', $error ? 'is-invalid' : '']);
@endphp

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $class]) !!}>
