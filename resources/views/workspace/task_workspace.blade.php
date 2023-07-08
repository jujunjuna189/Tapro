@extends('layouts.app_template', ['nav' => false])
@section('subnav')
<header class="navbar navbar-expand-md navbar-light d-print-none mx-3 my-2 rounded-10">
    <div class="container-xl">
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="{{ route('workspaces', ['workspace_id' => $project->workspace_id]) }}" class="me-3">
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
<div class="row align-items-center" id="content-workspace-task">
    <div class="col-md-2">
        <div class="box">
            <div id="jusgage" class="gauge"></div>
        </div>
    </div>
    <div class="col-md-6 pt-3">
        <div class="fw-bold h1 text-center text-md-start d-flex align-items-center gap-3">
            {{ $project->title }}
            <div class="dropdown">
                <span class="bg-primary px-1 rounded d-inline-flex cursor-pointer" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                    </svg>
                </span>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end">
                    <span class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-date-project">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                            <path d="M16 3l0 4"></path>
                            <path d="M8 3l0 4"></path>
                            <path d="M4 11l16 0"></path>
                            <path d="M8 15h2v2h-2z"></path>
                        </svg>
                        Tanggal
                    </span>
                    <a class="dropdown-item" href="#" onclick="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="4" y1="7" x2="20" y2="7"></line>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                        </svg>
                        Hapus
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-3 d-flex">
            <div class="py-2 px-3 rounded fw-bold" id="deadline-section">
                {{ $project->deadline }}
            </div>
        </div>
        <div class="d-flex mt-3 justify-content-center justify-content-md-start">
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
            <div class="me-3">
                <div class="d-md-flex me-3">
                    <div class="avatar-list avatar-list-stacked" id="list-avatar-share">
                        <span class="avatar avatar-xs avatar-rounded">AV</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row row-cards mt-3">
    <div class="col-md-12 mt-3">
        <div class="d-md-flex justify-content-between">
            <div>
                <h2 class="fw-bolder text-muted">List Tugas</h2>
            </div>
            <div class="d-flex">
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
    </div>
    <div class="col-md-12" id="list-task">
        @foreach($task as $val)
        <x-list-entry.task-list :id="$val->id" :title="$val->title" :completed="$val->completed" :deleted="$val->deleted" :share="$val->share" :comment="$val->comment" />
        @endforeach
    </div>
</div>
@endsection

@section('modal')
<!-- Modal for new task -->
<x-modal.new-task />
<!-- Modal for review assistant -->
<x-modal.workspace.review />
<x-modal.workspace.date :id="$project->id" />
<x-modal.workspace.comment />
<!-- Modal for share -->
<x-modal.share-task :result="$member" />
@endsection

@section('script')
<script>
    // Setting data and modal
    // Data
    let data_member = <?= json_encode($member) ?>;
    let project_id = <?= json_encode($project->id) ?>;
    let data_task = <?= json_encode($task) ?>;
    // =========================================================================================================
    // Chart jusgage
    let jusgageChart;

    // Modal on submit
    $(document).ready(function() {
        onSubmitTask();
        jusgageChart = chartJusgage(0);
        countPercent(data_task);
        contentListUserShare();
    });

    // =========================================================================================================
    // Content data (Start)
    // =========================================================================================================
    let parentContentWorkspace = '#content-workspace-task';
    let contentWorkspaceTaskComplete = '#task_complete';
    let contentWorkspaceTotalTask = '#total_task';
    let contentListAvatarShare = '#list-avatar-share';
    let contentDeadlineProject = '#deadline-section';

    // List user share
    const contentListUserShare = () => {
        let usersShare = [];
        $.each(data_task, function(i, row) {
            $.each(row.share, function(j, val) {
                usersShare.push(val);
            });
        });

        usersShare = arrayRemoveDuplicates(usersShare, 'user_id');
        usersShareDraw(usersShare);
    }

    const usersShareDraw = (array) => {
        let view = '';
        $(contentListAvatarShare).empty();
        $.each(array, function(i, row) {
            view += '<span class="avatar avatar-xs avatar-rounded">' + row.name.substring(0, 2) + '</span>';
        });

        $(contentListAvatarShare).append(view);
    }

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
            let textDel = row.deleted == 1 ? '<del>' + row.title + '</del>' : row.title;
            let check = row.completed == 1 ? '<input class="form-check-input checkbox-custome" type="checkbox" checked onclick="onTaskCompleted(this, \'' + row.id + '\')">' : '<input class="form-check-input checkbox-custome" type="checkbox" onclick="onTaskCompleted(this, \'' + row.id + '\')">';
            view += '<div class="card card-sm rounded-20-left shadow-none border-0 hover-shadow-primary mb-2">' +
                '<div class="card-body px-3 py-3 d-flex align-items-center justify-content-start">' +
                '<div class="me-3">' +
                check +
                '</div>' +
                '<div>' +
                '<span class="h3"> ' + textDel + '</span>' +
                '</div>' +
                '<div class="ms-auto d-flex align-items-center">' +
                listShare(row.id, row.share) +
                '<div>' +
                '<span onclick="commentTask(this, \'' + row.id + '\')">' +
                '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
                '<path stroke="none" d="M0 0h24v24H0z" fill="none" />' +
                '<path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />' +
                '<line x1="8" y1="9" x2="16" y2="9" />' +
                '<line x1="8" y1="13" x2="14" y2="13" />' +
                '</svg>' +
                '</span>' +
                '</div>' +
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
                '<span class="text-danger fw-bold ms-2 small">On-Going</span>' +
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
                renderCommentTask(row.id, row.comment) +
                '</div>';
        });

        $(taskViewList).prepend(view);
        countPercent(array);
    }

    const listShare = (task_id, array) => {
        let view = '';
        let listShare = '';
        $.each(array, function(i, row) {
            listShare += '<span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip">' + row.name.substring(0, 2) + '</span>';
        });

        listShare += '<span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" onclick="shareTaskToMember(this, \'' + task_id + '\')">' +
            '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
            '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' +
            '<line x1="12" y1="5" x2="12" y2="19"></line>' +
            '<line x1="5" y1="12" x2="19" y2="12"></line>' +
            '</svg>' +
            '</span>';

        view = '<div class="mx-3 avatar-list avatar-list-stacked">' +
            listShare +
            '</div>';

        return view;
    }

    const renderCommentTask = (task_id, array) => {
        let view = '';
        let listData = '';
        if (array != undefined && array.length > 0) {
            $.each(array, function(i, row) {
                listData += '<div class="border-2 border-start border-primary rounded mt-2 d-flex justify-content-between align-items-center bg-light text-dark">' +
                    '<div class="p-2">' +
                    row.comment +
                    '</div>' +
                    '<span onclick="deleteTaskComment(this, \'' + task_id + '\', \'' + row.id + '\')">' +
                    '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
                    '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' +
                    '<path d="M4 7l16 0"></path>' +
                    '<path d="M10 11l0 6"></path>' +
                    '<path d="M14 11l0 6"></path>' +
                    '<path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>' +
                    '<path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>' +
                    '</svg>' +
                    '</span>' +
                    '</div>';
            });

            view = '<div class="mt-1 m-3"> ' +
                listData +
                '</div>';
        }

        return view;
    }

    // void count percent
    const countPercent = (array_task) => {
        let taskCompleted = 0;
        $.each(array_task, function(i, row) {
            taskCompleted += row.completed == 1 ? 1 : 0;
        });

        let total_task = array_task.length;
        let percentage = total_task != 0 ? (taskCompleted / total_task) * 100 : 0;

        jusgageChart.refresh(percentage);
        countTask(data_task);
        setBgStatus(percentage);
    }

    const setBgStatus = (percentage) => {
        let bg = percentage == 100 ? 'bg-success' : 'bg-warning';
        let bgRe = percentage != 100 ? 'bg-success' : 'bg-warning';

        $(contentDeadlineProject).removeClass(bgRe);
        $(contentDeadlineProject).addClass(bg);
    }
    // void count task
    const countTask = (array_task) => {
        let taskCompleted = 0;
        $.each(array_task, function(i, row) {
            taskCompleted += row.completed == 1 ? 1 : 0;
        });
        let total_task = array_task.length;

        $(parentContentWorkspace + ' ' + contentWorkspaceTaskComplete).html(taskCompleted);
        $(parentContentWorkspace + ' ' + contentWorkspaceTotalTask).html(total_task);
    }
    // If checked task completed
    const onTaskCompleted = (event, id) => {
        let check = $(event).is(':checked');
        var dataIndex = data_task.findIndex((x) => x.id == id);
        data_task[dataIndex].completed = check;
        countPercent(data_task);
        updateDataTask({
            id: id,
            completed: check ? 1 : 0,
        });
    }
    // On Update
    const updateDataTask = (data) => {
        uploadDataServer({
            url: url + '/task/update',
            data: data,
            onSuccess: function(response) {
                console.log(response);
            }
        });
    }
    // If Task deleted
    const onTaskDeleted = (id) => {
        var dataIndex = data_task.findIndex((x) => x.id == id);
        updateDataTask({
            id: id,
            deleted: data_task[dataIndex].deleted == 0 ? 1 : 0,
        });

        if (data_task[dataIndex].deleted == 0) {
            // data_task[dataIndex].completed = true;
            data_task[dataIndex].deleted = 1;
        } else {
            // data_task[dataIndex].completed = false;
            data_task[dataIndex].deleted = 0;
        }

        drawTask(data_task);
    }
    // On Delete
    const deleteDataTask = (data) => {
        uploadDataServer({
            url: url + '/task/update',
            data: data,
            onSuccess: function(response) {
                console.log(response);
            }
        });
    }
    //On Delete Permanent
    const deleteDataTaskPermanent = (id) => {
        uploadDataServer({
            url: url + '/task/delete',
            data: {
                id: id,
            },
            onSuccess: function(response) {
                console.log(response);
            }
        });
    }
    // =========================================================================================================
    // Modal New Task (End)
    // =========================================================================================================
    // =========================================================================================================
    // Modal Share task (Start)
    // =========================================================================================================
    let parentShareTaskModal = '#modal-share-task';
    let parentShareTaskModalListMember = '#share-task-list-task';
    // Data
    let shareTaskIdTask = '';
    let shareMemberInTask = [];
    const shareTaskToMember = (event, task_id) => {
        $(parentShareTaskModal).modal('show');
        let dataTask = data_task.find((x) => x.id == task_id);
        shareTaskIdTask = dataTask.id;
        shareMemberInTask = dataTask.share;
        shareTaskToMemberDraw(data_member);
    }

    const shareTaskToMemberDraw = (array) => {
        let view = '';
        $(parentShareTaskModal + ' ' + parentShareTaskModalListMember).empty();
        if (array.length == 0) {
            view += '<span class="text-muted">Tidak ada member</span>';
        } else {
            $.each(array, function(i, row) {
                let starActive = shareMemberInTask.findIndex((x) => x.user_id == row.user_id);
                starActive = starActive > -1 ? true : false;
                view += '<div class="d-flex align-items-center mt-auto py-2">' +
                    '<span class="avatar avatar-sm avatar-rounded" data-bs-toggle="tooltip">' + row.name.substring(0, 2) + '</span>' +
                    '<div class="ms-3">' +
                    '<a href="#" class="text-body">' + row.name + '</a>' +
                    '<div class="text-muted">3 days ago</div>' +
                    '</div>' +
                    '<div class="ms-auto">' +
                    '<button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon" data-bs-star-status="' + !starActive + '" onclick="starShareTaskToMemberEvent(this, \'' + row.user_id + '\')">' +
                    starShareTaskToMember(starActive) +
                    '</button>' +
                    '</div>' +
                    '</div>';
            });
        }

        $(parentShareTaskModal + ' ' + parentShareTaskModalListMember).append(view);
    }

    const starShareTaskToMemberEvent = (event, user_id) => {
        let status = $(event).data('bs-star-status');
        $(event).data('bs-star-status', !status);
        let view = starShareTaskToMember(status);
        $(event).html(view);
        // Create Share
        status ? shareTaskShare({
            user_id: user_id,
            task_id: shareTaskIdTask,
            access: 1,
        }) : shareTaskDelete({
            user_id: user_id,
            task_id: shareTaskIdTask,
        });
    }

    const starShareTaskToMember = (status) => {
        let view = '';
        if (status) {
            view = '<span class="text-yellow">' +
                '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' +
                '<path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>' +
                '</svg>' +
                '</span>';
        } else {
            view = '<span class="text-muted">' +
                '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' +
                '<path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>' +
                '</svg>' +
                '</span>';
        }
        return view;
    }

    const shareTaskShare = (data = {}) => {
        uploadDataServer({
            url: url + '/share/create',
            data: {
                user_id: data.user_id,
                task_id: data.task_id,
                access: data.access
            },
            onSuccess: function(response) {
                let taskIndex = data_task.findIndex((x) => x.id == data.task_id);
                data_task[taskIndex].share.push(response);
                drawTask(data_task);
                contentListUserShare();
            }
        });
    }

    const shareTaskDelete = (data = {}) => {
        uploadDataServer({
            url: url + '/share/delete',
            data: {
                user_id: data.user_id,
                task_id: data.task_id,
            },
            onSuccess: function(response) {
                let taskIndex = data_task.findIndex((x) => x.id == data.task_id);
                data_task[taskIndex].share = data_task[taskIndex].share.filter((x) => x.user_id != data.user_id && x.task_id == data.task_id);
                drawTask(data_task);
                contentListUserShare();
            }
        });
    }

    // Comment task
    let parentCommentTaskModal = '#modal-comment-task';
    let parentCommentTaskModalComment = '#modal-comment-task #comment-task';
    const dataCommentTask = {};

    const commentTask = (event, id) => {
        dataCommentTask.id = id;
        $(parentCommentTaskModal).modal('show');
    }

    const onSaveCommentTask = () => {
        let valueComment = $(parentCommentTaskModalComment).val();
        uploadDataServer({
            url: url + '/comment/task/create',
            data: {
                task_id: dataCommentTask.id,
                user_id: user_id,
                comment: valueComment,
            },
            onSuccess: function(response) {
                let taskIndex = data_task.findIndex((x) => x.id == dataCommentTask.id);
                data_task[taskIndex].comment.push(response);
                drawTask(data_task);
            }
        });
    }

    const deleteTaskComment = (event, task_id, id) => {
        uploadDataServer({
            url: url + '/comment/task/delete',
            data: {
                id: id,
            },
            onSuccess: function(response) {
                let taskIndex = data_task.findIndex((x) => x.id == task_id);
                console.log(taskIndex);
                data_task[taskIndex].comment = data_task[taskIndex].comment.filter((x) => x.id != id);
                drawTask(data_task);
            }
        });
    }
</script>
@endsection