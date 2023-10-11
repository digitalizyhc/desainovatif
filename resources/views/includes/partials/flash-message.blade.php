@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible alert-block fade show">
	<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible alert-block fade show">
	<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible alert-block fade show">
	<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissible alert-block fade show">
	<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger alert-dismissible alert-block fade show">
	<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
	Please check the form below for errors
</div>
@endif
