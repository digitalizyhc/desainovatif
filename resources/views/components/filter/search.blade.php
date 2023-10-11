@props(['placeholder' => 'Pencarian...', 'class' => ''])
<div class="custom-search">
    <i class="fas fa-search"></i>
    <input type="text" class="form-control {{ $class }}" name="search" placeholder="{{ $placeholder }}"
        value="{{ @$_GET['search'] }}">
</div>
