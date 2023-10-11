@props(['pagination' => []])

{{ $pagination->withQueryString()->links() }}
