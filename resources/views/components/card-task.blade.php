<!-- Task List -->
<div class="card card-sm mb-3">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <h3 class="h3">{{ $title }}</h3>
                <div class="text-muted small">{{ $description }}</div>
            </div>
            <div class="text-nowrap">
                <span class="status status-{{ $status_color }}">
                    <span class="status-dot status-dot-animated"></span>
                    <small>{{ $status_text }}</small>
                </span>
            </div>
        </div>
        @if($thumbnail != '')
        <div class="row align-items-center mt-3">
            <div class="col-12">
                <div class="d-flex justify-content-start">
                    <div class="rounded" style="width: 100%; height: 100px; background-repeat: no-repeat; background-size: cover; background-position: 50%; background-image: url(https://cdn.dribbble.com/users/844826/screenshots/14553706/media/2be9a4847b939e02702648d058cf2df8.png);"></div>
                </div>
            </div>
        </div>
        @endif
        <div class="mt-4 small">
            <div class="row">
                <div class="col">
                    <div class="avatar-list avatar-list-stacked">
                        @foreach($share as $val)
                        @if($count_++ < 3) @if($val->thumbnail == '')
                            <span class="avatar avatar-xs avatar-rounded" title="{{ $val->name }}" data-bs-toggle="tooltip">{{ substr($val->name, 0, 2) }}</span>
                            @else
                            <span class="avatar avatar-xs avatar-rounded" title="{{ $val->name }}" data-bs-toggle="tooltip" style="background-image: url(<?= $val->thumbnail ?>)"></span>
                            @endif
                            @else
                            <span class="avatar avatar-xs avatar-rounded">+{{ (count($share) - 2) }}</span>
                            @endif
                            @endforeach
                    </div>
                </div>
                <div class="col-auto">
                    <a href="#" class="link-muted">
                        <!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12h4l3 8l4 -16l3 8h4" />
                        </svg>
                        {{ App\Models\GlobalModel::do_count_specific_key_value(true, 'completed', $list) }}/{{ count($list) }}
                    </a>
                </div>
                <div class="col-auto">
                    <a href="#" class="text-muted">
                        <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                            <line x1="8" y1="9" x2="16" y2="9" />
                            <line x1="8" y1="13" x2="14" y2="13" />
                        </svg>
                        3
                    </a>
                </div>
                <div class="col-auto">
                    <a href="#" class="text-muted" data-bs-toggle="modal" data-bs-target="#modal-share">
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
        <div class="divide-y-2 mt-4 small strong">
            @if($add || $update)
            <div class="d-flex justify-content-between">
                <div class="text-nowrap">
                    <span class="text-muted cursor-pointer">
                        @if($pin)
                        <!-- Download SVG icon from http://tabler-icons.io/i/pin -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-blue" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 4.5l-4 4l-4 1.5l-1.5 1.5l7 7l1.5 -1.5l1.5 -4l4 -4" />
                            <line x1="9" y1="15" x2="4.5" y2="19.5" />
                            <line x1="14.5" y1="4" x2="20" y2="9.5" />
                        </svg>
                        @else
                        <!-- Download SVG icon from http://tabler-icons.io/i/pinned-off -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="3" y1="3" x2="21" y2="21" />
                            <path d="M15 4.5l-3.249 3.249m-2.57 1.433l-2.181 .818l-1.5 1.5l7 7l1.5 -1.5l.82 -2.186m1.43 -2.563l3.25 -3.251" />
                            <line x1="9" y1="15" x2="4.5" y2="19.5" />
                            <line x1="14.5" y1="4" x2="20" y2="9.5" />
                        </svg>
                        @endif
                    </span>
                </div>
                @if($add)
                <div style="border: 1px dashed #008000;" class="mb-2 py-1 px-2 rounded cursor-pointer" onclick="open_modal_task_list()">
                    <span style="color: #008000">+</span>
                    <strong class="small">Tambah List</strong>
                </div>
                @endif
            </div>
            @endif
            @foreach($list as $val)
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <div class="me-3">
                        @if($update)
                        <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" <?= $val->completed ? 'checked' : '' ?>>
                        @else
                        @if($val->completed)
                        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                        @else
                        <!-- Download SVG icon from http://tabler-icons.io/i/point -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-azure" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="12" r="4" />
                        </svg>
                        @endif
                        @endif
                    </div>
                    <span class="text-muted">{{ $val->task }}</span>
                </div>
                <div class="d-flex">
                    @if($val->thumbnail != '')
                    <div class="text-nowrap dropdown">
                        <a href="javascript:void(0)" class="text-muted" data-bs-toggle="modal" data-bs-target="#modal-image">
                            <!-- Download SVG icon from http://tabler-icons.io/i/photo -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="15" y1="8" x2="15.01" y2="8" />
                                <rect x="4" y="4" width="16" height="16" rx="3" />
                                <path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
                                <path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
                            </svg>
                        </a>
                        <!-- Modal -->
                        <div class="modal modal-blur fade" id="modal-image" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div>
                                            <!-- Download SVG icon from http://tabler-icons.io/i/photo -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <line x1="15" y1="8" x2="15.01" y2="8" />
                                                <rect x="4" y="4" width="16" height="16" rx="3" />
                                                <path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
                                                <path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
                                            </svg>
                                            <small class="text-muted strong">Image</small>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="text-nowrap dropdown">
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
            @endforeach
        </div>
    </div>
</div>