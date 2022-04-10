@props(['title'])

<div class="card mb-4  border-0">
    <div class="card-body">
        <h4 class="card-title">{{ $title }}</h4>
        {{ $slot }}
    </div>
</div>
