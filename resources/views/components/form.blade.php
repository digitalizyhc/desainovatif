<form x-data="{ loading: false }" @submit="loading=true;" {!! $attributes !!} enctype="multipart/form-data">
    {{ $slot }}
</form>
