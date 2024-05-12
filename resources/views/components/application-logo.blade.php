@php
    $url = Illuminate\Support\Facades\Storage::url($appSettings->logo);
@endphp

<a href='/'>
    <img style="max-width: 150px" src="{{ $url }}" alt="{{ $appSettings->name }}">
</a>
