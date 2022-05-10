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
            <a href="{{ route('workspace.project') }}">
                {{ $project->title }}
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item me-3">
                <div class="d-none d-md-flex me-3">
                    <div class="avatar-list avatar-list-stacked">
                        @foreach($project->share as $val)
                        @if($val->thumbnail == '')
                        <span class="avatar avatar-xs avatar-rounded" title="{{ $val->name }}" data-bs-toggle="tooltip">{{ substr($val->name, 0, 2) }}</span>
                        @else
                        <span class="avatar avatar-xs avatar-rounded" title="{{ $val->name }}" data-bs-toggle="tooltip" style="background-image: url(<?= $val->thumbnail ?>)"></span>
                        @endif
                        @endforeach
                    </div>
                </div>
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
                    {{ count($project->comment) < 1 ? '0' : count($project->comment) }}
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="link-muted">
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
    <div class="col-md-12">
        <div class="my-2">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <label class="form-label">Filter</label>
                    <div class="form-selectgroup">
                        <label class="form-selectgroup-item">
                            <input type="checkbox" name="name" value="HTML" class="form-selectgroup-input" checked>
                            <span class="form-selectgroup-label">To Do</span>
                        </label>
                        <label class="form-selectgroup-item">
                            <input type="checkbox" name="name" value="CSS" class="form-selectgroup-input">
                            <span class="form-selectgroup-label">In Progress</span>
                        </label>
                        <label class="form-selectgroup-item">
                            <input type="checkbox" name="name" value="PHP" class="form-selectgroup-input">
                            <span class="form-selectgroup-label">In Review</span>
                        </label>
                        <label class="form-selectgroup-item">
                            <input type="checkbox" name="name" value="JavaScript" class="form-selectgroup-input">
                            <span class="form-selectgroup-label">Complete</span>
                        </label>
                    </div>
                </div>
                @if($access->add)
                <div>
                    <div class="card bg-0 cursor-pointer" style="border: 1px dashed #008000; background:none" data-bs-toggle="modal" data-bs-target="#modal-task">
                        <div class="card-body p-2 text-nowrap">
                            <span style="color: #008000;">+</span>
                            <strong><small>Tambah Tugas</small></strong>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-12">
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
    <div class="col-md-6">
        @foreach($task as $val)
        @if($val->grid == 1)
        <x-card-task :title="$val->title" :description="$val->description" :status="$val->status" :thumbnail="$val->thumbnail" :share="$val->share" :list="$val->list" :add="$access->add" :update="$access->update" :pin="$val->pin" />
        @endif
        @endforeach
    </div>
    <div class="col-md-6">
        @foreach($task as $val)
        @if($val->grid == 2)
        <x-card-task :title="$val->title" :description="$val->description" :status="$val->status" :thumbnail="$val->thumbnail" :share="$val->share" :list="$val->list" :add="$access->add" :update="$access->update" :pin="$val->pin" />
        @endif
        @endforeach
    </div>
</div>
@endsection
@section('modal')
<div class="modal modal-blur fade" id="modal-task" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tugas Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="...">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" id="description" cols="30" rows="3" class="form-control"></textarea>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="file" name="file" id="file" class="hidden" hidden>
                        <label for="file" class="image-upload-box cursor-pointer">
                            <span class="text-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/photo -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <line x1="15" y1="8" x2="15.01" y2="8" />
                                    <rect x="4" y="4" width="16" height="16" rx="3" />
                                    <path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
                                    <path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
                                </svg>
                            </span>
                            <strong>Upload Gambar</strong>
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-selectgroup-boxes mb-3">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="visibility" id="visibility" value="1" class="form-selectgroup-input" checked>
                                <span class="form-selectgroup-label d-flex align-items-center p-3 border-0" style="background: none;">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Private</span>
                                        <span class="d-block text-muted">Hanya dilihat oleh anda sendiri.</span>
                                    </span>
                                </span>
                            </label>
                            <label class="form-selectgroup-item">
                                <input type="radio" name="visibility" id="visibility" value="2" class="form-selectgroup-input">
                                <span class="form-selectgroup-label d-flex align-items-center p-3 border-0" style="background: none;">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Public</span>
                                        <span class="d-block text-muted">Siapa saja dapat melihat ini.</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Batal
                </a>
                <a href="#" class="btn btn-primary ms-auto" onclick="continue_modal_task()">
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
                <a href="#" class="btn btn-link link-secondary" data-bs-toggle="modal" data-bs-target="#modal-task" id="m-btn-previous-task-list">
                    <!-- Download SVG icon from http://tabler-icons.io/i/arrow-narrow-left -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <line x1="5" y1="12" x2="9" y2="16" />
                        <line x1="5" y1="12" x2="9" y2="8" />
                    </svg>
                    Sebelumnya
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
            <div class="modal-header">
                <h5 class="modal-title">Invite</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Undang Seseorang</label>
                    <div class="input-group">
                        <input type="text" class="form-control border-end-0 shadow-none">
                        <select class="small form-block border-start-0 shadow-none">
                            <option value="0">Can View</option>
                            <option value="1">Comment</option>
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
@section('script')
<script>
    // Modal Task list
    // =========================================================================================================
    let list_data = [];
    let modal_task = '#modal-task';
    let modal_task_list = '#modal-task-list';
    // Child
    // =========================================================================================================
    let m_btn_batal_task_list = '#m-btn-batal-task-list';
    let m_btn_previous_task_list = '#m-btn-previous-task-list';

    $(document).ready(function() {
        recognition.onend = function() {
            toggle_icon_color('.icon-mic-toggle', 'text-dark', 'text-azure');
            recognizing = false;
            if (ignore_onend) {
                return;
            }
            // start_img.src = 'mic.gif';
            if (!final_transcript) {
                showInfo('info_start');
                return;
            }
            showInfo('');
            if (window.getSelection) {
                window.getSelection().removeAllRanges();
                var range = document.createRange();
                range.selectNode(document.getElementById('final_span'));
                window.getSelection().addRange(range);
            }
            if (create_email) {
                create_email = false;
                createEmail();
            }
        };
    });

    // Setting modal task and task list
    // =========================================================================================================
    // Setting tombol in modal task list for view btn batal and sebelumnya
    // =========================================================================================================
    const modal_task_list_btn_previous = (previous = false) => {
        if (previous) {
            $(modal_task_list + ' ' + m_btn_batal_task_list).remove();
            $(modal_task_list + ' ' + m_btn_previous_task_list).show();
        } else {
            var element = '<a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal" id="m-btn-batal-task-list">' +
                'Batal' +
                '</a>';

            $(modal_task_list + ' ' + m_btn_batal_task_list).remove();
            $(modal_task_list + ' ' + m_btn_previous_task_list).before(element);
            $(modal_task_list + ' ' + m_btn_previous_task_list).hide();
        }
    }

    // Membuka modal task list pada tombol tambah list
    // =========================================================================================================
    const open_modal_task_list = (previous = false) => {
        $(modal_task_list).modal('show');

        if (!previous) {
            modal_task_list_btn_previous(false);
        }
    }

    // Membuka modal task list pada tombol selanjutnya
    // =========================================================================================================
    const continue_modal_task = () => {
        $(modal_task).modal('hide');
        $(modal_task_list).modal('show');
        modal_task_list_btn_previous(true);
    }

    // On continue modal task 
    // =========================================================================================================
    let task_field = [];
    const on_continue_modal_task = () => {

    }

    // End setting modal task and task list
    // =========================================================================================================

    // Funtion untuk memulai recognition
    // =========================================================================================================
    function startButton(event) {
        toggle_icon_color('.icon-mic-toggle', 'text-azure', 'text-dark');
        if (recognizing) {
            // Set list 
            toggle_icon_color('.icon-mic-toggle', 'text-dark', 'text-azure');
            set_list_draf();
            recognition.stop();
            return;
        }
        final_transcript = '';
        recognition.lang = default_language;
        recognition.start();
        ignore_onend = false;
        final_span.value = '';
        showInfo('info_allow');
        start_timestamp = event.timeStamp;
    }

    // Funtion untuk megubah warna pada icon microfon di modal task_list
    // =========================================================================================================
    const toggle_icon_color = (element, class_add, class_remove) => {
        $(element).addClass(class_add);
        $(element).removeClass(class_remove);
    }

    // Funtion untuk membuat event key enter pada textarea atau input
    // =========================================================================================================
    const on_key_press_text_box = (event) => {
        if (event.keyCode == 13) {
            set_list_draf();
            if (event.preventDefault) event.preventDefault(); // This should fix it
            return false; // Just a workaround for old browsers
        }
    }

    // Funtion untuk menambah pada view list tugas dan data array
    // =========================================================================================================
    const set_list_draf = () => {
        let input_task_list = $(modal_task_list + ' #final_span');
        // Data
        if (input_task_list.val() != '') {
            list_data.push(input_task_list.val());
            input_task_list.val('');
            set_task_list_view_modal(list_data);
        }
    }

    // Funtion untuk setting pada view list tugas
    // =========================================================================================================
    const set_task_list_view_modal = (array = []) => {
        let box_task_list = $(modal_task_list + ' #m-task-list');
        let element = '';

        box_task_list.html('');
        $.each(array, function(i, row) {
            element = '<div>' +
                '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
                '<path stroke="none" d="M0 0h24v24H0z" fill="none" />' +
                '<path d="M5 12l5 5l10 -10" />' +
                '</svg>' +
                row +
                '</div>';

            box_task_list.prepend(element);
        });
    }
    // End Modal Task list
    // =========================================================================================================
    // =========================================================================================================
    // Menange data manipulate page
    // =========================================================================================================
</script>
@endsection