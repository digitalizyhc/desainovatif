@props(['color'])

@php
    $btnColor = $color ?? 'btn-primary';
@endphp

<button type="submit" {!! $attributes->merge(['class' => 'btn ' . $btnColor]) !!} :class="loading ? 'disabled' : ''">
    <img src="{{ asset('assets/img/icons/ajaxloader.gif') }}" style="height: 20px; display: none;" x-show="loading"
        alt="">
    <span x-show="!loading">
        {{ $slot }}
    </span>
</button>
