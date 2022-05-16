<div class="empty">
    <div class="empty-img"><img src="{{ $image }}" height="128" alt="">
    </div>
    <p class="empty-title">{{ $title }}</p>
    <p class="empty-subtitle text-muted">
        {{ $subtitle }}
    </p>
    <div class="empty-action">
        <a href="#" class="btn bg-blue-lt" data-bs-toggle="modal" data-bs-target="#modal-workspaces">
            <span class="nav-link-icon d-md-none d-lg-inline-block">
                {!! $icon !!}
            </span>
            {{ $buttonText }}
        </a>
    </div>
</div>