@extends('layouts.app_template')
@section('header')
<div class="page-header d-print-none">
    <div class="row align-items-center">
        <div class="col">
            <!-- Page pre-title -->
            <h2 class="page-title">
                {{ isset($title) ? $title : 'Task Progress' }}
            </h2>
        </div>
        <!-- Page title actions -->
        <div class="col-auto ms-auto d-print-none">
            <div class="btn-list">
                <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-project">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Buat Project
                </a>
                <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-project" aria-label="Create new project">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row row-cards" id="list-project">
    @foreach($project as $val)
    <div class="col-lg-4">
        <x-card-project :title="$val->title" :description="$val->description" :share="$val->share" :progress="$val->progress" :task="$val->task" :deadline="$val->deadline" />
    </div>
    @endforeach
</div>
@endsection
@section('modal')
<x-modal.new-project />
@endsection
@section('script')
<script>
    // Data
    let data_ = <?= json_encode($project) ?>;
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