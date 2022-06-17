<div class="card card-sm rounded-20-left shadow-none border-0 hover-shadow-primary mb-2">
    <div class="card-body px-3 py-3 d-flex align-items-center justify-content-start">
        <div class="me-3">
            @if($completed)
            <input class="form-check-input checkbox-custome" type="checkbox" checked onclick="onTaskCompleted(this, '{{ $id }}')">
            @else
            <input class="form-check-input checkbox-custome" type="checkbox" onclick="onTaskCompleted(this, '{{ $id }}')">
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
        <div class="ms-auto">
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
        </div>
    </div>
</div>