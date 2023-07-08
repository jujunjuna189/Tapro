@extends('layouts.app_template', ['nav' => false])
@section('subnav')
<header class="navbar navbar-expand-md navbar-light d-print-none mx-3 my-2 rounded-10">
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
            Profil & Akun
        </h1>
    </div>
</header>
@endsection
@section('content')
<div class="d-flex justify-content-center">
    <div class="w-50">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <span class="avatar avatar-md avatar-rounded" data-bs-toggle="tooltip">{{ substr($user->name, 0, 2) }}</span>
                    <div class="ms-3 lh-1">
                        <h4 class="m-0">{{ $user->name }}</h4>
                        <span>{{ $user->email }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center bg-white cursor-pointer" onclick="onUpdate()">
                    Edit Profile
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 6l6 6l-6 6"></path>
                        </svg>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-white cursor-pointer" onclick="logout_app()">
                    Logout
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 6l6 6l-6 6"></path>
                        </svg>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('modal')
<!-- Modal Update profile -->
<x-modal.profile.update-profile />
@endsection

@section('script')
<script>
    const element = {
        modal_update: '#modal-update-profile',
        name_field: '#modal-update-profile input#name',
    }

    const dataServer = {
        name: '<?= $user->name ?>',
    };

    const onUpdate = () => {
        $(element.name_field).val(dataServer.name);
        $(element.modal_update).modal('show');
    };
</script>
@endsection