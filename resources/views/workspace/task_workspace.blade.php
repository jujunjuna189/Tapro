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
<div class="row align-items-center">
    <div class="col-md-2">
        <div class="box">
            <div id="jusgage" class="gauge"></div>
        </div>
    </div>
    <div class="col-md-6 pt-3">
        <div class="fw-bold h1 text-center text-md-start">{{ $project->title }}</div>
        <div class="d-flex mt-3 justify-content-center justify-content-md-start">
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
                    <span id="task_complete">{{ $project->total_task_completed }}</span>/<span id="total_task">{{ $project->total_task }}</span>
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
                <a href="#" class="link-muted" data-bs-toggle="modal" data-bs-target="#modal-invite-member">
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
    <div class="col-md-12" id="list-task">
        @foreach($task as $val)
        <x-list-entry.task-list :id="$val->id" :title="$val->title" :completed="$val->completed" :deleted="$val->deleted" />
        @endforeach
    </div>
</div>
@endsection

@section('modal')
<!-- Modal for new task -->
<x-modal.new-task />
<!-- Modal for share -->
<x-modal.share-task :result="$task" :member="$member" />
@endsection

@section('script')
<script>
    // Setting data and modal
    // Data
    let project_id = <?= json_encode($project->id) ?>;
    let data_task = <?= json_encode($task) ?>;
    // =========================================================================================================
    // Modal New task (Start)
    // =========================================================================================================
    // --- Modal task --- Setting modal new task
    let parentTaskModal = '#modal-task';
    let modalTaskUpload = '#form-task';
    // Form data
    let modalTaskTitle = 'textarea[name="title"]';
    // Task list
    let taskViewList = '#list-task';
    let checkBoxTask = taskViewList + ' ' + 'input[type="checkbox"]';
    // Chart jusgage
    let jusgageChart;

    // Modal on submit
    $(document).ready(function() {
        onSubmitTask();
        jusgageChart = chartJusgage(0);
        countPercent(data_task);
    });

    // Void on submit
    const onSubmitTask = () => {
        $(parentTaskModal + ' ' + modalTaskUpload).on('submit', function(e) {
            e.preventDefault();
            recognition.stop(); //from recognition start file
            uploadDataTask();
        });
    }

    // get data on form task
    const getDataFormTask = () => {
        let title = $(parentTaskModal + ' ' + modalTaskTitle).val();

        let array = {
            title: title,
            completed: 0,
            deleted: 0,
        };

        // Clear form
        $(parentTaskModal + ' ' + modalTaskTitle).val('');

        return array;
    }

    // Upload data
    const uploadDataTask = () => {
        let dataBatch = getDataFormTask();

        uploadDataServer({
            url: url + '/task/create',
            data: {
                project_id: project_id,
                title: dataBatch.title,
                completed: dataBatch.completed,
                deleted: dataBatch.deleted,
            },
            onSuccess: function(data) {
                pushTaskData(data);
            }
        });
    }

    const pushTaskData = (object) => {
        data_task.push(object);
        drawTask(data_task);
    }

    // Draw list
    const drawTask = (array) => {
        $(taskViewList).empty();
        let view = '';
        $.each(array, function(i, row) {
            let textDel = row.deleted ? '<del>' + row.title + '</del>' : row.title;
            let check = row.completed ? '<input class="form-check-input checkbox-custome" type="checkbox" checked onclick="onTaskCompleted(this, \'' + row.id + '\')">' : '<input class="form-check-input checkbox-custome" type="checkbox" onclick="onTaskCompleted(this, \'' + row.id + '\')">';
            view += '<div class="card card-sm rounded-20-left shadow-none border-0 hover-shadow-primary mb-2">' +
                '<div class="card-body px-3 py-3 d-flex align-items-center justify-content-start">' +
                '<div class="me-3">' +
                check +
                '</div>' +
                '<div>' +
                '<span class="h3"> ' + textDel + '</span>' +
                '</div>' +
                '<div class="ms-auto">' +
                '<div class="dropdown">' +
                '<span class="text-dark" data-bs-toggle="dropdown">' +
                '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots-vertical" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
                '<desc>Download more icon variants from https://tabler-icons.io/i/dots-vertical</desc>' +
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' +
                '<circle cx="12" cy="12" r="1"></circle>' +
                '<circle cx="12" cy="19" r="1"></circle>' +
                '<circle cx="12" cy="5" r="1"></circle>' +
                '</svg>' +
                '</span>' +
                '<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end">' +
                '<a class="dropdown-item" href="#">' +
                '<svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' +
                '<path d="M3 12h5l4 8v-16l4 8h5"></path>' +
                '</svg>' +
                'Tipe Progress' +
                '</a>' +
                '<a class="dropdown-item" href="#" onclick="onTaskDeleted(\'' + row.id + '\')">' +
                '<svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' +
                '<line x1="4" y1="7" x2="20" y2="7"></line>' +
                '<line x1="10" y1="11" x2="10" y2="17"></line>' +
                '<line x1="14" y1="11" x2="14" y2="17"></line>' +
                '<path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>' +
                '<path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>' +
                '</svg>' +
                'Hapus' +
                '</a>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>';
        });

        $(taskViewList).prepend(view);
        countPercent(array);
    }

    // void count percent
    const countPercent = (array_task) => {
        let taskCompleted = 0;
        $.each(array_task, function(i, row) {
            taskCompleted += row.completed ?? 1;
        });

        let total_task = array_task.length;
        let percentage = total_task != 0 ? (taskCompleted / total_task) * 100 : 0;

        jusgageChart.refresh(percentage);
    }
    // void count task
    const countTask = (array_task) => {

    }
    // If checked task completed
    const onTaskCompleted = (event, id) => {
        let check = $(event).is(':checked');
        var dataIndex = data_task.findIndex((x) => x.id == id);
        if (check) {
            data_task[dataIndex].completed = true;
        } else {
            data_task[dataIndex].completed = false;
        }

        countPercent(data_task);
    }
    // If Task deleted
    const onTaskDeleted = (id) => {
        var dataIndex = data_task.findIndex((x) => x.id == id);
        if (!data_task[dataIndex].deleted) {
            data_task[dataIndex].completed = true;
            data_task[dataIndex].deleted = true;
        } else {
            data_task[dataIndex].completed = false;
            data_task[dataIndex].deleted = false;
        }

        drawTask(data_task);
    }
    // =========================================================================================================
    // Modal New Task (End)
    // =========================================================================================================
</script>
@endsection