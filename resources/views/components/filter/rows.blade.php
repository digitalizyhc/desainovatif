@props(['current' => 10])
@php
    $rows = [10, 50, 100];
@endphp

<select name="row" class="form-select" onchange="this.form.submit()">
    @foreach ($rows as $row)
        <option value="{{ $row }}" {{ (@$_GET['row'] ?? $current) == $row ? 'selected' : '' }}>
            {{ $row }}</option>
    @endforeach
</select>
