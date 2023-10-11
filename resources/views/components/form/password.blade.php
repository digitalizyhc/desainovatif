@props(['name' => 'password'])

<div class="input-group" x-data="{ show: true }">
    <input :type="show ? 'password' : 'text'" type="password" name="{{ $name }}" {!! $attributes->merge(['class' => 'form-control border-end-0']) !!}
        value="{{ old($name) }}">
    <div class="input-group-text bg-white" @click="show = !show">
        <span class="cursor-pointer">
            <i :class="show ? 'fas fa-eye' : 'fas fa-eye-slash'" class="text-muted"></i>
        </span>
    </div>
</div>
@error($name)
    <div class="invalid-feedback d-block">
        {{ $message }}
    </div>
@enderror
