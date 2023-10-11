@props(['name' => '', 'class' => ''])

<select name="{{ $name }}" class="form-select {{ $class }}" onchange="this.form.submit()">
    {{ $slot }}
</select>
