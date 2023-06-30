<div class="card card-sm rounded-20-left shadow-none hover-shadow-primary mb-2">
    <div class="card-body px-3 py-3 d-flex align-items-center justify-content-start">
        <div class="me-3">
            @if(!$onlyView)
            @if($completed)
            <input class="form-check-input checkbox-custome" type="checkbox" checked onclick="onTaskCompleted(this, '{{ $id }}')">
            @else
            <input class="form-check-input checkbox-custome" type="checkbox" onclick="onTaskCompleted(this, '{{ $id }}')">
            @endif
            @endif
            <!-- If access not editing -->
            @if($onlyView)
            @if($completed)
            <span class="text-success">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="9"></circle>
                    <path d="M9 12l2 2l4 -4"></path>
                </svg>
            </span>
            @else
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="9"></circle>
                </svg>
            </span>
            @endif
            @endif
        </div>
        <div>
            <span class="h3">
                @if($deleted)
                <del>{{ $title }}</del>
                @else
                {{ $title }}
                @endif
            </span>
        </div>
        <div class="ms-auto d-flex align-items-center">
            <div class="mx-3 avatar-list avatar-list-stacked">
                @foreach($share as $val)
                <span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip">{{ substr($val->name, 0, 2) }}</span>
                @endforeach
                @if(!$onlyView)
                <span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" onclick="shareTaskToMember(this, '{{ $id }}')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </span>
                @endif
            </div>
            <div>
                <span onclick="commentTask(this, '{{ $id }}')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                        <line x1="8" y1="9" x2="16" y2="9" />
                        <line x1="8" y1="13" x2="14" y2="13" />
                    </svg>
                </span>
            </div>
            @if(!$onlyView)
            <div class="dropdown">
                <span class="text-dark" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots-vertical" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <desc>Download more icon variants from https://tabler-icons.io/i/dots-vertical</desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                    </svg>
                </span>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 12h5l4 8v-16l4 8h5"></path>
                        </svg>
                        Tipe Progress
                        <span class="text-danger fw-bold ms-2 small">On-Going</span>
                    </a>
                    <a class="dropdown-item" href="#" onclick="onTaskDeleted('{{ $id }}')">
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
            @endif
        </div>
    </div>
    @if(count($comment) > 0)
    <div class="mt-1 m-3">
        @foreach($comment as $val)
        <div class="border-2 border-start border-primary rounded mt-2 d-flex justify-content-between align-items-center bg-light text-dark">
            <div class="p-2">
                {{ $val->comment }}
            </div>
            <span onclick="deleteTaskComment(this, '{{ $id }}', '{{ $val->id }}')">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 7l16 0"></path>
                    <path d="M10 11l0 6"></path>
                    <path d="M14 11l0 6"></path>
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                </svg>
            </span>
        </div>
        @endforeach
    </div>
    @endif
</div>