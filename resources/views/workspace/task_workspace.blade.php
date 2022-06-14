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
            Daftar Tugas
        </h1>
    </div>
</header>
@endsection
@section('content')
<div class="row align-items-center justify-content-center">
    <div class="col-md-12">
        <div class="box">
            <div id="jusgage" class="gauge"></div>
        </div>
    </div>
    <div class="col-md-6 text-center pt-3">
        <span class="fw-bold h1">Project Title</span>
        <div class="d-flex mt-3 justify-content-center">
            <div class="me-3">
                <div class="d-md-flex me-3">
                    <div class="avatar-list avatar-list-stacked">
                        <span class="avatar avatar-xs avatar-rounded">EP</span>
                        <span class="avatar avatar-xs avatar-rounded" style="background-image: url(./static/avatars/002f.jpg)"></span>
                        <span class="avatar avatar-xs avatar-rounded" style="background-image: url(./static/avatars/003f.jpg)"></span>
                        <span class="avatar avatar-xs avatar-rounded">HS</span>
                    </div>
                </div>
            </div>
            <div class="me-3">
                <a href="#" class="link-muted">
                    <!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 12h4l3 8l4 -16l3 8h4" />
                    </svg>
                    1/3
                </a>
            </div>
            <div class="me-3">
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
            <div class="">
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
</div>
<div class="row row-cards mt-3">
    <div class="col-md-12 mt-3">
        <div class="d-flex justify-content-between">
            <div>
                <h2 class="fw-bolder text-muted">List Tugas</h2>
            </div>
            <div>
                <span class="btn rounded-10" onclick="open_modal('#modal-task', '#modal-task textarea[name=title]')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Tambah
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <x-list-entry.task-list title="List 1" />
        <x-list-entry.task-list title="List 2" />
        <x-list-entry.task-list title="List 3" />
    </div>
</div>
@endsection

@section('modal')
<!-- Modal for new task -->
<x-modal.new-task />
<!-- Modal for share -->
<x-modal.share />
@endsection

@section('script')
<script>
    $(document).ready(function() {
        var jusgage = new JustGage({
            id: 'jusgage',
            value: 50,
            min: 0,
            max: 100,
            symbol: '%',
            donut: true,
            pointer: true,
            gaugeWidthScale: 0.7,
            shadowOpacity: 0.6,
            shadowSize: 5,
            pointerOptions: {
                toplength: 10,
                bottomlength: 10,
                bottomwidth: 8,
                color: '#000'
            },
            customSectors: [{
                color: "#4299e1",
                lo: 50,
                hi: 100
            }, {
                color: "#4299e1",
                lo: 0,
                hi: 50
            }],
            counter: true
        });
    });
</script>
@endsection