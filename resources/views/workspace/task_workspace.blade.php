@extends('layouts.app_template', ['nav' => false])
@section('subnav')
<header class="navbar navbar-expand-md navbar-light d-print-none">
    <div class="container-xl">
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="{{ url()->previous() }}" class="me-3">
                <!-- Download SVG icon from http://tabler-icons.io/i/arrow-narrow-left -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <line x1="5" y1="12" x2="19" y2="12" />
                    <line x1="5" y1="12" x2="9" y2="16" />
                    <line x1="5" y1="12" x2="9" y2="8" />
                </svg>
            </a>
            <a href="{{ route('workspace.project') }}" title="Coordinate with business development" data-bs-toggle="tooltip">
                {{ strlen('Coordinate with business development') > 10 ? substr('Coordinate with business development', 0, 10) . '...' : 'Coordinate with business development' }}
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item me-3">
                <div class="d-none d-md-flex me-3">
                    <div class="avatar-list avatar-list-stacked">
                        <span class="avatar avatar-xs avatar-rounded">EP</span>
                        <span class="avatar avatar-xs avatar-rounded" style="background-image: url(./static/avatars/002f.jpg)"></span>
                        <span class="avatar avatar-xs avatar-rounded" style="background-image: url(./static/avatars/003f.jpg)"></span>
                        <span class="avatar avatar-xs avatar-rounded">HS</span>
                    </div>
                </div>
            </div>
            <div class="nav-item me-3">
                <a href="#" class="link-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 12h4l3 8l4 -16l3 8h4" />
                    </svg>
                    1/3
                </a>
            </div>
            <div class="nav-item me-3">
                <a href="#" class="link-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                        <line x1="8" y1="9" x2="16" y2="9" />
                        <line x1="8" y1="13" x2="14" y2="13" />
                    </svg>
                    2
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="link-muted" data-bs-toggle="modal" data-bs-target="#modal-share">
                    <!-- Download SVG icon from http://tabler-icons.io/i/share -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="6" cy="12" r="3" />
                        <circle cx="18" cy="6" r="3" />
                        <circle cx="18" cy="18" r="3" />
                        <line x1="8.7" y1="10.7" x2="15.3" y2="7.3" />
                        <line x1="8.7" y1="13.3" x2="15.3" y2="16.7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>
@endsection
@section('content')
<div class="row row-cards">
    <div class="col-md-12 pb-md-4 pb-lg-4">
        <div class="container-fixed stacked-cards stacked-cards-slide">
            <ul class="w-sm-cstm-100">
                <li>
                    <!-- Task List -->
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto ms-auto text-nowrap">
                                    <span class="status status-blue mb-2">
                                        <span class="status-dot status-dot-animated"></span>
                                        <small>To Do</small>
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <h3 class="h3">Title</h3>
                                    <div class="text-muted small">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, sequi laboriosam saepe hic, ipsa similique culpa minus quod explicabo</div>
                                </div>
                            </div>
                            <div class="mt-4 small">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar-list avatar-list-stacked">
                                            <span class="avatar avatar-xs avatar-rounded" title="name" data-bs-toggle="tooltip">NM</span>
                                            <span class="avatar avatar-xs avatar-rounded" title="name" data-bs-toggle="tooltip">NM</span>
                                        </div>
                                    </div>
                                    <div class="col-auto ms-auto text-nowrap">
                                        <a href="#" class="link-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 12h4l3 8l4 -16l3 8h4" />
                                            </svg>
                                            3/3
                                        </a>
                                        <a href="#" class="text-muted mx-2">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                                <line x1="8" y1="9" x2="16" y2="9" />
                                                <line x1="8" y1="13" x2="14" y2="13" />
                                            </svg>
                                            3
                                        </a>
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-teal">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/player-play -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M7 4v16l13 -8z" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-blue">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/player-pause -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <rect x="6" y="5" width="4" height="14" rx="1" />
                                                    <rect x="14" y="5" width="4" height="14" rx="1" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress card-progress">
                            <div class="progress-bar bg-blue" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="visually-hidden">20% Complete</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <!-- Task List -->
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto ms-auto text-nowrap">
                                    <span class="status status-blue mb-2">
                                        <span class="status-dot status-dot-animated"></span>
                                        <small>To Do</small>
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <h3 class="h3">Title</h3>
                                    <div class="text-muted small">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, sequi laboriosam saepe hic, ipsa similique culpa minus quod explicabo</div>
                                </div>
                            </div>
                            <div class="mt-4 small">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar-list avatar-list-stacked">
                                            <span class="avatar avatar-xs avatar-rounded" title="name" data-bs-toggle="tooltip">NM</span>
                                            <span class="avatar avatar-xs avatar-rounded" title="name" data-bs-toggle="tooltip">NM</span>
                                        </div>
                                    </div>
                                    <div class="col-auto ms-auto text-nowrap">
                                        <a href="#" class="link-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 12h4l3 8l4 -16l3 8h4" />
                                            </svg>
                                            3/3
                                        </a>
                                        <a href="#" class="text-muted mx-2">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                                <line x1="8" y1="9" x2="16" y2="9" />
                                                <line x1="8" y1="13" x2="14" y2="13" />
                                            </svg>
                                            3
                                        </a>
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-teal">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/player-play -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M7 4v16l13 -8z" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-blue">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/player-pause -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <rect x="6" y="5" width="4" height="14" rx="1" />
                                                    <rect x="14" y="5" width="4" height="14" rx="1" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress card-progress">
                            <div class="progress-bar bg-blue" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="visually-hidden">20% Complete</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <!-- Task List -->
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto ms-auto text-nowrap">
                                    <span class="status status-blue mb-2">
                                        <span class="status-dot status-dot-animated"></span>
                                        <small>To Do</small>
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <h3 class="h3">Title</h3>
                                    <div class="text-muted small">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, sequi laboriosam saepe hic, ipsa similique culpa minus quod explicabo</div>
                                </div>
                            </div>
                            <div class="mt-4 small">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar-list avatar-list-stacked">
                                            <span class="avatar avatar-xs avatar-rounded" title="name" data-bs-toggle="tooltip">NM</span>
                                            <span class="avatar avatar-xs avatar-rounded" title="name" data-bs-toggle="tooltip">NM</span>
                                        </div>
                                    </div>
                                    <div class="col-auto ms-auto text-nowrap">
                                        <a href="#" class="link-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 12h4l3 8l4 -16l3 8h4" />
                                            </svg>
                                            3/3
                                        </a>
                                        <a href="#" class="text-muted mx-2">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                                <line x1="8" y1="9" x2="16" y2="9" />
                                                <line x1="8" y1="13" x2="14" y2="13" />
                                            </svg>
                                            3
                                        </a>
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-teal">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/player-play -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M7 4v16l13 -8z" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-blue">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/player-pause -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <rect x="6" y="5" width="4" height="14" rx="1" />
                                                    <rect x="14" y="5" width="4" height="14" rx="1" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress card-progress">
                            <div class="progress-bar bg-blue" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="visually-hidden">20% Complete</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <!-- Task List -->
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto ms-auto text-nowrap">
                                    <span class="status status-blue mb-2">
                                        <span class="status-dot status-dot-animated"></span>
                                        <small>To Do</small>
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <h3 class="h3">Title</h3>
                                    <div class="text-muted small">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, sequi laboriosam saepe hic, ipsa similique culpa minus quod explicabo</div>
                                </div>
                            </div>
                            <div class="mt-4 small">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar-list avatar-list-stacked">
                                            <span class="avatar avatar-xs avatar-rounded" title="name" data-bs-toggle="tooltip">NM</span>
                                            <span class="avatar avatar-xs avatar-rounded" title="name" data-bs-toggle="tooltip">NM</span>
                                        </div>
                                    </div>
                                    <div class="col-auto ms-auto text-nowrap">
                                        <a href="#" class="link-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 12h4l3 8l4 -16l3 8h4" />
                                            </svg>
                                            3/3
                                        </a>
                                        <a href="#" class="text-muted mx-2">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                                <line x1="8" y1="9" x2="16" y2="9" />
                                                <line x1="8" y1="13" x2="14" y2="13" />
                                            </svg>
                                            3
                                        </a>
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-teal">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/player-play -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M7 4v16l13 -8z" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-blue">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/player-pause -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <rect x="6" y="5" width="4" height="14" rx="1" />
                                                    <rect x="14" y="5" width="4" height="14" rx="1" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress card-progress">
                            <div class="progress-bar bg-blue" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="visually-hidden">20% Complete</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <!-- Task List -->
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto ms-auto text-nowrap">
                                    <span class="status status-blue mb-2">
                                        <span class="status-dot status-dot-animated"></span>
                                        <small>To Do</small>
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <h3 class="h3">Title</h3>
                                    <div class="text-muted small">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, sequi laboriosam saepe hic, ipsa similique culpa minus quod explicabo</div>
                                </div>
                            </div>
                            <div class="mt-4 small">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar-list avatar-list-stacked">
                                            <span class="avatar avatar-xs avatar-rounded" title="name" data-bs-toggle="tooltip">NM</span>
                                            <span class="avatar avatar-xs avatar-rounded" title="name" data-bs-toggle="tooltip">NM</span>
                                        </div>
                                    </div>
                                    <div class="col-auto ms-auto text-nowrap">
                                        <a href="#" class="link-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 12h4l3 8l4 -16l3 8h4" />
                                            </svg>
                                            3/3
                                        </a>
                                        <a href="#" class="text-muted mx-2">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                                <line x1="8" y1="9" x2="16" y2="9" />
                                                <line x1="8" y1="13" x2="14" y2="13" />
                                            </svg>
                                            3
                                        </a>
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-teal">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/player-play -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M7 4v16l13 -8z" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-blue">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/player-pause -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <rect x="6" y="5" width="4" height="14" rx="1" />
                                                    <rect x="14" y="5" width="4" height="14" rx="1" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress card-progress">
                            <div class="progress-bar bg-blue" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="visually-hidden">20% Complete</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <!-- Task List -->
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto ms-auto text-nowrap">
                                    <span class="status status-blue mb-2">
                                        <span class="status-dot status-dot-animated"></span>
                                        <small>To Do</small>
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <h3 class="h3">Title</h3>
                                    <div class="text-muted small">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, sequi laboriosam saepe hic, ipsa similique culpa minus quod explicabo</div>
                                </div>
                            </div>
                            <div class="mt-4 small">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar-list avatar-list-stacked">
                                            <span class="avatar avatar-xs avatar-rounded" title="name" data-bs-toggle="tooltip">NM</span>
                                            <span class="avatar avatar-xs avatar-rounded" title="name" data-bs-toggle="tooltip">NM</span>
                                        </div>
                                    </div>
                                    <div class="col-auto ms-auto text-nowrap">
                                        <a href="#" class="link-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 12h4l3 8l4 -16l3 8h4" />
                                            </svg>
                                            3/3
                                        </a>
                                        <a href="#" class="text-muted mx-2">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                                <line x1="8" y1="9" x2="16" y2="9" />
                                                <line x1="8" y1="13" x2="14" y2="13" />
                                            </svg>
                                            3
                                        </a>
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-teal">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/player-play -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M7 4v16l13 -8z" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-blue">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/player-pause -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <rect x="6" y="5" width="4" height="14" rx="1" />
                                                    <rect x="14" y="5" width="4" height="14" rx="1" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress card-progress">
                            <div class="progress-bar bg-blue" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="visually-hidden">20% Complete</span>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card bg-light text-azure">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="subheader">Aktifitas</div>
                </div>
                <div class="d-flex align-items-baseline">
                    <div class="h1 mb-0 me-2">400</div>
                    <div class="me-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                            8%
                            <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="3 17 9 11 13 15 21 7" />
                                <polyline points="14 7 21 7 21 14" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <div id="chart-revenue-bg" class="chart-sm"></div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="my-2 d-flex justify-content-between">
            <div class="d-flex justify-content-center align-items-center">
                <span class="avatar avatar-sm avatar-rounded bg-pink-lt">HS</span>
                <span class="small ms-2 strong">Admin</span>
            </div>
            <div class="text-end">
                <span class="status status-blue">
                    <span class="status-dot status-dot-animated"></span>
                    To.Do
                </span>
            </div>
        </div>
        <div class="card card-sm">
            <div class="card-body">
                <div class="row align-items-center text-center cursor-pointer">
                    <div class="col">
                        <span class="text-muted" title="Completed" data-bs-toggle="tooltip">
                            <span class="status-dot status-dot-animated status-teal me-2"></span>
                            45 Complete
                        </span>
                    </div>
                    <div class="col">
                        <span class="text-muted" title="Deleted" data-bs-toggle="tooltip">
                            <span class="status-dot status-dot-animated status-red me-2"></span>
                            34 Delete
                        </span>
                    </div>
                    <div class="col-12">
                        <progress class="progress progress-sm mt-3" value="15" max="100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row row-cards mt-3">
    <div class="col-md-12 mt-3">
        <div class="d-flex justify-content-between">
            <div>
                <label class="form-label">List Tugas</label>
            </div>
            <div>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-task-list">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Tambah List
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-sm">
            <div class="card-body p-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <div class="me-3">
                            <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked>
                        </div>
                        <span class="text-muted">Organize meeting sales associates to understand need in detail</span>
                    </div>
                    <div class="d-flex">
                        <div class="text-nowrap ms-3">
                            <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                                <span class="switch-icon-a text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/pinned-off -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="3" y1="3" x2="21" y2="21" />
                                        <path d="M15 4.5l-3.249 3.249m-2.57 1.433l-2.181 .818l-1.5 1.5l7 7l1.5 -1.5l.82 -2.186m1.43 -2.563l3.25 -3.251" />
                                        <line x1="9" y1="15" x2="4.5" y2="19.5" />
                                        <line x1="14.5" y1="4" x2="20" y2="9.5" />
                                    </svg>
                                </span>
                                <span class="switch-icon-b text-facebook">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/pin -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 4.5l-4 4l-4 1.5l-1.5 1.5l7 7l1.5 -1.5l1.5 -4l4 -4" />
                                        <line x1="9" y1="15" x2="4.5" y2="19.5" />
                                        <line x1="14.5" y1="4" x2="20" y2="9.5" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="text-nowrap ms-3">
                            <span class="avatar avatar-xs avatar-rounded">HS</span>
                        </div>
                        <div class="text-nowrap dropdown ms-3">
                            <a href="#" class="text-muted" data-bs-toggle="dropdown" aria-label="Open user menu">
                                <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="1" />
                                    <circle cx="12" cy="19" r="1" />
                                    <circle cx="12" cy="5" r="1" />
                                </svg>
                            </a>
                            <!-- Menu -->
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <span class="dropdown-header">Lainnya</span>
                                <a class="dropdown-item" href="#">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/photo -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="15" y1="8" x2="15.01" y2="8" />
                                        <rect x="4" y="4" width="16" height="16" rx="3" />
                                        <path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
                                        <path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
                                    </svg>
                                    Gambar
                                </a>
                                <a class="dropdown-item" href="#">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/flag -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon text-danger" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="5" y1="5" x2="5" y2="21" />
                                        <line x1="19" y1="5" x2="19" y2="14" />
                                        <path d="M5 5a5 5 0 0 1 7 0a5 5 0 0 0 7 0" />
                                        <path d="M5 14a5 5 0 0 1 7 0a5 5 0 0 0 7 0" />
                                    </svg>
                                    Coret
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-sm mt-1">
            <div class="card-body p-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <div class="me-3">
                            <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked>
                        </div>
                        <span class="text-muted">Organize meeting sales associates to understand need in detail</span>
                    </div>
                    <div class="d-flex">
                        <div class="text-nowrap ms-3">
                            <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                                <span class="switch-icon-a text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/pinned-off -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="3" y1="3" x2="21" y2="21" />
                                        <path d="M15 4.5l-3.249 3.249m-2.57 1.433l-2.181 .818l-1.5 1.5l7 7l1.5 -1.5l.82 -2.186m1.43 -2.563l3.25 -3.251" />
                                        <line x1="9" y1="15" x2="4.5" y2="19.5" />
                                        <line x1="14.5" y1="4" x2="20" y2="9.5" />
                                    </svg>
                                </span>
                                <span class="switch-icon-b text-facebook">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/pin -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 4.5l-4 4l-4 1.5l-1.5 1.5l7 7l1.5 -1.5l1.5 -4l4 -4" />
                                        <line x1="9" y1="15" x2="4.5" y2="19.5" />
                                        <line x1="14.5" y1="4" x2="20" y2="9.5" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="text-nowrap ms-3">
                            <span class="avatar avatar-xs avatar-rounded">HS</span>
                        </div>
                        <div class="text-nowrap dropdown ms-3">
                            <a href="#" class="text-muted" data-bs-toggle="dropdown" aria-label="Open user menu">
                                <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="1" />
                                    <circle cx="12" cy="19" r="1" />
                                    <circle cx="12" cy="5" r="1" />
                                </svg>
                            </a>
                            <!-- Menu -->
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <span class="dropdown-header">Lainnya</span>
                                <a class="dropdown-item" href="#">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/photo -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="15" y1="8" x2="15.01" y2="8" />
                                        <rect x="4" y="4" width="16" height="16" rx="3" />
                                        <path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
                                        <path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
                                    </svg>
                                    Gambar
                                </a>
                                <a class="dropdown-item" href="#">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/flag -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon text-danger" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="5" y1="5" x2="5" y2="21" />
                                        <line x1="19" y1="5" x2="19" y2="14" />
                                        <path d="M5 5a5 5 0 0 1 7 0a5 5 0 0 0 7 0" />
                                        <path d="M5 14a5 5 0 0 1 7 0a5 5 0 0 0 7 0" />
                                    </svg>
                                    Coret
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
<!-- Modal list task -->
<div class="modal modal-blur fade" id="modal-task-list" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">List Tugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group input-group-flat">
                    <textarea name="" id="final_span" cols="30" rows="1" class="form-control" onkeypress="on_key_press_text_box(event)"></textarea>
                    <span class="input-group-text">
                        <a href="#" class="link-secondary" title="Speech" data-bs-toggle="tooltip" onclick="startButton(event)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-mic-toggle text-dark" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="9" y="2" width="6" height="11" rx="3" />
                                <path d="M5 10a7 7 0 0 0 14 0" />
                                <line x1="8" y1="21" x2="16" y2="21" />
                                <line x1="12" y1="17" x2="12" y2="21" />
                            </svg>
                        </a>
                    </span>
                </div>
                <small class="text-danger mb-3">*Tekan enter untuk menyimpan list</small>
                <div class="divide-y-2 mt-2 overflow-height" id="m-task-list">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <div class="me-3 small">
                                #
                            </div>
                            <span class="text-muted small"><strong>Tugas</strong></span>
                        </div>
                        <div class="d-flex">
                            <div class="text-nowrap dropdown">
                                <span class="small strong">Hapus</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <div class="me-3 small">
                                <!-- Download SVG icon from http://tabler-icons.io/i/point -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-azure" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="4" />
                                </svg>
                            </div>
                            <span class="text-muted small"><strong>Organize meeting sales associates to understand need in detail</strong></span>
                        </div>
                        <div class="d-flex">
                            <div class="text-nowrap dropdown">
                                <!-- Download SVG icon from http://tabler-icons.io/i/trash -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <line x1="4" y1="7" x2="20" y2="7" />
                                    <line x1="10" y1="11" x2="10" y2="17" />
                                    <line x1="14" y1="11" x2="14" y2="17" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                        Make sure to cover every small details
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Batal
                </a>
                <a href="./." class="btn btn-primary ms-auto">
                    <!-- Download SVG icon from http://tabler-icons.io/i/upload -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                        <polyline points="7 9 12 4 17 9" />
                        <line x1="12" y1="4" x2="12" y2="16" />
                    </svg>
                    Simpan
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Share -->
<div class="modal modal-blur fade" id="modal-share" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Undang Seseorang</label>
                    <div class="input-group">
                        <input type="text" class="form-control border-end-0 shadow-none">
                        <select class="small form-block border-start-0 shadow-none">
                            <option value="1">Can View</option>
                            <option value="2">Editor</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Batal
                </a>
                <a href="./." class="btn btn-primary ms-auto">
                    <!-- Download SVG icon from http://tabler-icons.io/i/upload -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                        <polyline points="7 9 12 4 17 9" />
                        <line x1="12" y1="4" x2="12" y2="16" />
                    </svg>
                    Simpan
                </a>
            </div>
        </div>
    </div>
</div>
@endsection