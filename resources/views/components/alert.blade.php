@props(['type', 'message'])

<div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
    <div class="d-flex align-items-center">
        <div class="flex-fill">
            @if ($type == 'success')
                <i class="fas fa-check-circle me-1"></i>
            @else
                <i class="fas fa-info-circle me-1"></i>
            @endif
            {{ $message }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
