@php
    $currentRouteName = Route::currentRouteName();
@endphp
<div class="container mt-4">
    <h4>{{ $currentRouteName }}</h4>
    <hr>
    <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
        <div class="bi-house-fill me-3 fs-1"></div>
        <h4 class="mb-0">Well done! this is {{ $currentRouteName }}.</h4>
    </div>
</div>
