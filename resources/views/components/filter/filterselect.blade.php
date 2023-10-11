@props(['placeholder' => 'Pencarian...'])
<div class="custom-search">



        <select name="period_id" class="form-select select2" name="search" placeholder="{{ $placeholder }}"
        value="{{ @$_GET['search'] }}">
            <option value="">-Pilih Desa-</option>
            @foreach ($data as $item)
            <option value="{{ $item->id }}" >{{ $item->name }}</option>
        @endforeach

        </select>
     
  
  
</div>
