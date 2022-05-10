@extends('layouts.app_template')
@section('content')
<div class="empty">
    <div class="empty-img"><img src="{{ asset('assets/dist/img/illustration/undraw_work_together_h63l.svg') }}" height="128" alt="">
    </div>
    <p class="empty-title">Tidak ada group</p>
    <p class="empty-subtitle text-muted">
        Buat group baru anda dengan mengundang orang.
    </p>
    <div class="empty-action">
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-users">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
            </svg>
            Buat Group
        </a>
    </div>
</div>
@endsection
@section('modal')
<div class="modal modal-blur fade" id="modal-users" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Undang ke group</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 overflow-height">
                <div class="card">
                    <div class="list-group card-list-group">
                        <div class="list-group-item">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto fs-3">
                                    1
                                </div>
                                <div class="col-auto">
                                    <img src="{{ asset('assets/dist/img/avatar/user.svg') }}" class="rounded" alt="Górą ty" width="40" height="40">
                                </div>
                                <div class="col">
                                    Górą ty
                                    <div class="text-muted">
                                        GOLEC UORKIESTRA,
                                        Gromee,
                                        Bedoes
                                    </div>
                                </div>
                                <div class="col-auto text-muted">
                                    03:41
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="link-secondary">
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-muted">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-red">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-auto lh-1">
                                    <div class="dropdown">
                                        <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="5" cy="12" r="1" />
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="19" cy="12" r="1" />
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto fs-3">
                                    2
                                </div>
                                <div class="col-auto">
                                    <img src="{{ asset('assets/dist/img/avatar/user.svg') }}" class="rounded" alt="High Life" width="40" height="40">
                                </div>
                                <div class="col">
                                    High Life
                                    <div class="text-muted">
                                        Daft Punk
                                    </div>
                                </div>
                                <div class="col-auto text-muted">
                                    03:21
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="link-secondary">
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-muted">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-red">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-auto lh-1">
                                    <div class="dropdown">
                                        <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="5" cy="12" r="1" />
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="19" cy="12" r="1" />
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto fs-3">
                                    3
                                </div>
                                <div class="col-auto">
                                    <img src="{{ asset('assets/dist/img/avatar/user.svg') }}" class="rounded" alt="Houdini" width="40" height="40">
                                </div>
                                <div class="col">
                                    Houdini
                                    <div class="text-muted">
                                        Foster The People
                                    </div>
                                </div>
                                <div class="col-auto text-muted">
                                    03:23
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="link-secondary">
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-muted">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-red">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-auto lh-1">
                                    <div class="dropdown">
                                        <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="5" cy="12" r="1" />
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="19" cy="12" r="1" />
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto fs-3">
                                    4
                                </div>
                                <div class="col-auto">
                                    <img src="{{ asset('assets/dist/img/avatar/user.svg') }}" class="rounded" alt="Safe And Sound" width="40" height="40">
                                </div>
                                <div class="col">
                                    Safe And Sound
                                    <div class="text-muted">
                                        Capital Cities
                                    </div>
                                </div>
                                <div class="col-auto text-muted">
                                    03:12
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="link-secondary">
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-muted">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-red">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-auto lh-1">
                                    <div class="dropdown">
                                        <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="5" cy="12" r="1" />
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="19" cy="12" r="1" />
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto fs-3">
                                    5
                                </div>
                                <div class="col-auto">
                                    <img src="{{ asset('assets/dist/img/avatar/user.svg') }}" class="rounded" alt="Partied Out" width="40" height="40">
                                </div>
                                <div class="col">
                                    Partied Out
                                    <div class="text-muted">
                                        Con Bro Chill
                                    </div>
                                </div>
                                <div class="col-auto text-muted">
                                    03:17
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="link-secondary">
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-muted">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-red">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-auto lh-1">
                                    <div class="dropdown">
                                        <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="5" cy="12" r="1" />
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="19" cy="12" r="1" />
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto fs-3">
                                    6
                                </div>
                                <div class="col-auto">
                                    <img src="{{ asset('assets/dist/img/avatar/user.svg') }}" class="rounded" alt="Runaway (U &amp; I)" width="40" height="40">
                                </div>
                                <div class="col">
                                    Runaway (U & I)
                                    <div class="text-muted">
                                        Galantis
                                    </div>
                                </div>
                                <div class="col-auto text-muted">
                                    03:47
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="link-secondary">
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-muted">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-red">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-auto lh-1">
                                    <div class="dropdown">
                                        <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="5" cy="12" r="1" />
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="19" cy="12" r="1" />
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto fs-3">
                                    7
                                </div>
                                <div class="col-auto">
                                    <img src="{{ asset('assets/dist/img/avatar/user.svg') }}" class="rounded" alt="Light It Up (feat. Nyla &amp; Fuse ODG) - Remix" width="40" height="40">
                                </div>
                                <div class="col">
                                    Light It Up (feat. Nyla & Fuse ODG) - Remix
                                    <div class="text-muted">
                                        Major Lazer,
                                        Nyla,
                                        Fuse ODG
                                    </div>
                                </div>
                                <div class="col-auto text-muted">
                                    02:46
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="link-secondary">
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-muted">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-red">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-auto lh-1">
                                    <div class="dropdown">
                                        <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="5" cy="12" r="1" />
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="19" cy="12" r="1" />
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto fs-3">
                                    8
                                </div>
                                <div class="col-auto">
                                    <img src="{{ asset('assets/dist/img/avatar/user.svg') }}" class="rounded" alt="Hangover" width="40" height="40">
                                </div>
                                <div class="col">
                                    Hangover
                                    <div class="text-muted">
                                        Taio Cruz,
                                        Flo Rida
                                    </div>
                                </div>
                                <div class="col-auto text-muted">
                                    04:04
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="link-secondary">
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-muted">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-red">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-auto lh-1">
                                    <div class="dropdown">
                                        <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="5" cy="12" r="1" />
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="19" cy="12" r="1" />
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto fs-3">
                                    9
                                </div>
                                <div class="col-auto">
                                    <img src="{{ asset('assets/dist/img/avatar/user.svg') }}" class="rounded" alt="Shape of You" width="40" height="40">
                                </div>
                                <div class="col">
                                    Shape of You
                                    <div class="text-muted">
                                        Ed Sheeran
                                    </div>
                                </div>
                                <div class="col-auto text-muted">
                                    03:53
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="link-secondary">
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-muted">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-red">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-auto lh-1">
                                    <div class="dropdown">
                                        <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="5" cy="12" r="1" />
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="19" cy="12" r="1" />
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto fs-3">
                                    10
                                </div>
                                <div class="col-auto">
                                    <img src="{{ asset('assets/dist/img/avatar/user.svg') }}" class="rounded" alt="Alone" width="40" height="40">
                                </div>
                                <div class="col">
                                    Alone
                                    <div class="text-muted">
                                        Alan Walker
                                    </div>
                                </div>
                                <div class="col-auto text-muted">
                                    02:41
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="link-secondary">
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-muted">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-red">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-auto lh-1">
                                    <div class="dropdown">
                                        <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="5" cy="12" r="1" />
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="19" cy="12" r="1" />
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto fs-3">
                                    11
                                </div>
                                <div class="col-auto">
                                    <img src="{{ asset('assets/dist/img/avatar/user.svg') }}" class="rounded" alt="Langrennsfar" width="40" height="40">
                                </div>
                                <div class="col">
                                    Langrennsfar
                                    <div class="text-muted">
                                        Ylvis
                                    </div>
                                </div>
                                <div class="col-auto text-muted">
                                    02:43
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="link-secondary">
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-muted">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-red">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-auto lh-1">
                                    <div class="dropdown">
                                        <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="5" cy="12" r="1" />
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="19" cy="12" r="1" />
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto fs-3">
                                    12
                                </div>
                                <div class="col-auto">
                                    <img src="{{ asset('assets/dist/img/avatar/user.svg') }}" class="rounded" alt="Skibidi - Romantic Edition" width="40" height="40">
                                </div>
                                <div class="col">
                                    Skibidi - Romantic Edition
                                    <div class="text-muted">
                                        Little Big
                                    </div>
                                </div>
                                <div class="col-auto text-muted">
                                    03:12
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="link-secondary">
                                        <button class="switch-icon" data-bs-toggle="switch-icon">
                                            <span class="switch-icon-a text-muted">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                            <span class="switch-icon-b text-red">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-auto lh-1">
                                    <div class="dropdown">
                                        <a href="#" class="link-secondary" data-bs-toggle="dropdown">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="5" cy="12" r="1" />
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="19" cy="12" r="1" />
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="./." class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-group">
                    Selanjutnya
                    <!-- Download SVG icon from http://tabler-icons.io/i/arrow-narrow-right -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="ms-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <line x1="15" y1="16" x2="19" y2="12" />
                        <line x1="15" y1="8" x2="19" y2="12" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Modal create group -->
<div class="modal modal-blur fade" id="modal-group" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Group Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="...">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-auto ms-auto">
                        <div class="avatar-list avatar-list-stacked">
                            <span class="avatar avatar-sm avatar-rounded" style="background-image: url(<?= asset('assets/dist/img/avatar/user.svg') ?>)"></span>
                            <span class="avatar avatar-sm avatar-rounded">JL</span>
                            <span class="avatar avatar-sm avatar-rounded" style="background-image: url(<?= asset('assets/dist/img/avatar/user.svg') ?>)"></span>
                            <span class="avatar avatar-sm avatar-rounded" style="background-image: url(<?= asset('assets/dist/img/avatar/user.svg') ?>)"></span>
                            <span class="avatar avatar-sm avatar-rounded" style="background-image: url(<?= asset('assets/dist/img/avatar/user.svg') ?>)"></span>
                            <span class="avatar avatar-sm avatar-rounded">+3</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Batal
                </a>
                <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Buat Group
                </a>
            </div>
        </div>
    </div>
</div>
@endsection