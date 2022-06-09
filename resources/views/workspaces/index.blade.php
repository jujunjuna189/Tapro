@extends('layouts.app_template')
@section('content')
<!-- Empty Page -->
@if(count($workspaces) == 0)
<x-empty-page.empty-page :image="asset('assets/dist/img/illustration/undraw_quitting_time_dm8t.svg')" title="Ruang Kerja" subtitle="Mulai bekerja dengan cepat." :icon="App\Models\GlobalModel::my_icon()->layer" buttonText="Buat Ruangan Kerja" />
@endif
<!-- Page Workspace -->
@if(count($workspaces) > 1)
<div class="row">
    <div class="d-none d-lg-block col-lg-3">
        <h4 class="strong fw-bold mb-4">Workspace's</h4>
        @foreach($workspaces as $val)
        <div class="card rounded-20 mt-4 border-0 bg-{{ $val->color }}-lt shadow-none">
            <div class="card-body">
                <h6 class="mb-1 fw-normal status-{{ $val->color }}">
                    <span class="status-dot status-dot-animated me-2"></span>
                    {{ $val->visibility }}
                </h6>
                <h4 class="m-0 fw-bolder">{{ $val->title }}</h4>
                <a href="#" class="bg-{{ $val->color }} p-2 rounded-10 shadow button-fly">
                    {!! App\Models\GlobalModel::my_icon()->eye !!}
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-lg-9 ps-lg-4">
        <div class="card shadow-none border-0 rounded-20 mt-3">
            <div class="card-stamp" style="border-top-right-radius: 20px !important;">
                <div class="card-stamp-icon bg-yellow">
                    {!! App\Models\GlobalModel::my_icon()->layer_grid !!}
                </div>
            </div>
            <div class="card-body">
                <h2 class="h2">
                    <span class="status status-blue bg-blue-lt me-3">
                        <span class="status-dot status-dot-animated"></span>
                    </span>
                    {{ $workspaces[0]->title }}
                </h2>
                <div class="btn-list mt-4">
                    <a href="#" class="btn rounded-10">
                        {!! App\Models\GlobalModel::my_icon()->edit_circle !!}
                        Edit
                    </a>
                    <a href="#" class="btn bg-red-lt rounded-10">
                        {!! App\Models\GlobalModel::my_icon()->bell_ringing !!}
                        Subscribe
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <x-sub-nav.nav-workspace />
            </div>
            <div class="col-md-12">
                <div class="mt-3">
                    <h3 class="fw-bolder text-muted">Tugas Utama Saya</h3>
                </div>
            </div>
        </div>
        <!-- List -->
        <div class="row row-cards" id="list-data">
            <div class="col-md-4 col-lg-3 p-2">
                <div class="card card-sm rounded-10 shadow-none border-0 hover-shadow-primary h-100" data-bs-toggle="modal" data-bs-target="#modal-project">
                    <div class="card-body px-2 py-2 text-center d-flex align-items-center justify-content-center">
                        <div>
                            <span class="h3">Buat Baru</span>
                            <div class="mt-3">
                                <span class="text-dark p-2 bg-light-blue rounded-10">
                                    {!! App\Models\GlobalModel::my_icon()->plus !!}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($workspaces[0]->project as $val)
            <div class="col-md-4 col-lg-3 p-2">
                <div class="card card-sm rounded-10 shadow-none border-0 hover-shadow-primary h-100" onclick="window.open('<?= route('workspace.task') ?>', '_parent')">
                    <div class="card-body px-3 py-3 text-center">
                        <span class="h3">{{ App\Models\GlobalModel::overlayText($val->title) }}</span>
                        <div class="my-3">
                            <div class="avatar-list avatar-list-stacked">
                                <span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)"></span>
                                <span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)"></span>
                                <span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)"></span>
                            </div>
                        </div>
                        <div class="button-box-fly-center">
                            <span class="p-2 bg-light-blue rounded-10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 12h4l3 8l4 -16l3 8h4" />
                                </svg>
                                {{ $val->total_task }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif

@endsection
@section('modal')
<x-modal.new-project />
@endsection
@section('script')
<script>
    // Data
    let data_ = <?= json_encode($workspaces[0]->project) ?>;
    // =========================================================================================================
    // On Reload
    $(document).ready(function() {
        lite_picker(); //running picker
        new_project_on_upload() //running on upload modal project
    });
    // =========================================================================================================
    // Picker date
    const lite_picker = () => {
        let picker = new Litepicker({
            element: document.getElementById('datepicker-icon'),
            buttonText: {
                previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>`,
                nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>`,
            },
        });

        return picker;
    }
    // =========================================================================================================

    // =========================================================================================================
    // Modal New Project (Start)
    // =========================================================================================================
    // --- Modal Project --- Setting modal new project
    let content_project = '#list-project';
    let parent_modal_project = "#modal-project";

    const get_value_form = () => {
        let project_title = $(parent_modal_project + " input[name='title']");
        let project_description = $(parent_modal_project + " input[name='description']");
        let project_deadline = $(parent_modal_project + " input[name='deadline']");
        let project_visibility = $(parent_modal_project + " input[name='visibility']:checked");

        let value = {
            title: project_title.val(),
            description: project_description.val(),
            share: [{
                name: 'Ujun',
                thumbnail: '',
                access: 2,
            }],
            progress: 0,
            deadline: project_deadline.val(),
            task: 0,
            visibility: parseInt(project_visibility.val()),
        };

        return value;
    }
    // =========================================================================================================
    // --- Modal Project --- New array update to data_
    const data_update = () => {
        let value = get_value_form();
        data_.push(value);
    }
    // =========================================================================================================
    // --- Modal Project --- Component Project
    const project_component = (row) => {
        let avatar_element = '';
        let task = row.task;
        let date = new Date();
        let now_date = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();

        // Avatar element each
        $.each(row.share, function(avatar, avatar_val) {
            if (avatar_val.thumbnail == '') {
                avatar_element += '<span class="avatar avatar-xs avatar-rounded" title="' + avatar_val.name + '" data-bs-toggle="tooltip"">' + avatar_val.name.substring(0, 2) + '</span>';
            } else {
                avatar_element += '<span class="avatar avatar-xs avatar-rounded" title="' + avatar_val.name + '" data-bs-toggle="tooltip" style="background-image: url(' + avatar_val.thumbnail + ')"></span>';
            }
        });

        let element = '<div class="col-lg-4">' +
            '<div class="card card-sm card-stacked">' +
            '<div class="card-body">' +
            '<div class="d-flex justify-content-between align-items-center mb-3">' +
            '<div>' +
            '<span class="status status-teal">' +
            '<span class="status-dot status-dot-animated"></span>' +
            '</span>' +
            '</div>' +
            '<div class="dropdown">' +
            '<a href="#" class="text-muted" data-bs-toggle="dropdown" aria-expanded="false">' +
            '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
            '<path stroke="none" d="M0 0h24v24H0z" fill="none" />' +
            '<circle cx="12" cy="12" r="1" />' +
            '<circle cx="12" cy="19" r="1" />' +
            '<circle cx="12" cy="5" r="1" />' +
            '</svg>' +
            '</a>' +
            '<div class="dropdown-menu dropdown-menu-end">' +
            '<a href="#" class="dropdown-item">Import</a>' +
            '<a href="#" class="dropdown-item">Export</a>' +
            '<a href="#" class="dropdown-item">Download</a>' +
            '<a href="#" class="dropdown-item text-danger">Delete</a>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="row">' +
            '<div class="col-md-12">' +
            '<div class="text-center">' +
            '<div class="mb-2 px-3 cursor-pointer">' +
            '<a href="' + url + '/workspace/project' + '" class="h3 strong text-dark">' + row.title + '</a>' +
            '</div>' +
            '<small class="text-muted">' + row.description + '</small>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-12 text-center">' +
            '<div class="avatar-list avatar-list-stacked mt-3">' +
            avatar_element +
            '</div>' +
            '</div>' +
            '<div class="col-md-12">' +
            '<div class="px-3 mt-3">' +
            '<div class="d-flex justify-content-between">' +
            '<small class="strong">Progress</small>' +
            '<small class="strong">' + row.progress + '%</small>' +
            '</div>' +
            '<div class="progress progress-md bg-blue-lt mt-2">' +
            '<div class="progress-bar bg-blue rounded" style="width: ' + row.progress + '%" role="progressbar" aria-valuenow="' + row.progress + '" aria-valuemin="0" aria-valuemax="100">' +
            '<span class="visually-hidden">' + row.progress + '% Complete</span>' +
            '</div>' +
            '</div>' +
            '<div class="d-flex justify-content-between align-items-center mt-3">' +
            '<div class="text-muted">' +
            '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
            '<path stroke="none" d="M0 0h24v24H0z" fill="none" />' +
            '<rect x="8" y="4" width="12" height="12" rx="2" />' +
            '<path d="M16 16v2a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-8a2 2 0 0 1 2 -2h2" />' +
            '</svg>' +
            task +
            '</div>' +
            '<div>' +
            '<span class="status status-blue">' +
            '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
            '<path stroke="none" d="M0 0h24v24H0z" fill="none" />' +
            '<rect x="4" y="5" width="16" height="16" rx="2" />' +
            '<line x1="16" y1="3" x2="16" y2="7" />' +
            '<line x1="8" y1="3" x2="8" y2="7" />' +
            '<line x1="4" y1="11" x2="20" y2="11" />' +
            '<rect x="8" y="15" width="2" height="2" />' +
            '</svg>' +
            '<small>' +
            'Tersisa ' + difference_in_days(now_date, row.deadline) + ' Hari' +
            '</small>' +
            '</span>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>';

        return element;
    }
    // =========================================================================================================
    // --- Modal Project --- Draw to view
    const draw = (array) => {
        $(content_project).empty();
        $.each(array, function(i, row) {
            let element = project_component(row);
            $(content_project).prepend(element);
        });
    }
    // =========================================================================================================
    // --- Modal Project --- New Project on upload
    const new_project_on_upload = () => {
        $(parent_modal_project + ' #m-upload').on('click', function() {
            data_update();
            draw(data_);
        });
    }
    // =========================================================================================================
    // Modal New Project (End)
    // =========================================================================================================
</script>
@endsection