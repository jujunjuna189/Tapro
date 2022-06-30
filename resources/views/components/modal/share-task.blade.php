<!--modal-invite-member -->
<div class="modal modal-blur fade" id="modal-invite-member" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <label class="form-label">Share Task</label>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach($result as $val)
                <div class="card card-sm px-2 mb-2 rounded-20 shadow-none hover-shadow-primary h-100">
                    <div class="card-body px-3 py-3 d-flex align-items-center justify-content-start">
                        <div class="ms-1">
                            <span class="h3">{{ $val->title }}</span>
                        </div>
                        <div class="ms-auto d-flex align-items-center">
                            <div class="mx-3 avatar-list avatar-list-stacked">
                                <span class="avatar avatar-sm avatar-rounded" data-bs-toggle="tooltip">{{ substr($val->title, 0, 2) }}</span>
                                <span class="avatar avatar-sm avatar-rounded" data-bs-toggle="tooltip">{{ substr($val->title, 0, 2) }}</span>
                                <span class="avatar avatar-sm avatar-rounded" data-bs-toggle="tooltip">{{ substr($val->title, 0, 2) }}</span>
                            </div>
                            <div class="dropdown">
                                <span class="text-muted" data-bs-toggle="dropdown" aria-label="Open user menu">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-share" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="6" cy="12" r="3"></circle>
                                        <circle cx="18" cy="6" r="3"></circle>
                                        <circle cx="18" cy="18" r="3"></circle>
                                        <line x1="8.7" y1="10.7" x2="15.3" y2="7.3"></line>
                                        <line x1="8.7" y1="13.3" x2="15.3" y2="16.7"></line>
                                    </svg>
                                </span>
                                <div class="dropdown-menu dropdown-menu-card dropdown-menu-end dropdown-menu-arrow" style="width: 20rem; max-width: 20rem;">
                                    <div class="px-3 py-3">
                                        <h2 class="mb-3">Share</h2>
                                        @if(count($member) == 0)
                                        <span class="text-muted">Tidak ada member</span>
                                        @endif
                                        @foreach($member as $res)
                                        <div class="d-flex align-items-center mt-auto mb-2">
                                            <span class="avatar avatar-sm avatar-rounded" data-bs-toggle="tooltip">{{ substr($res->name, 0, 2) }}</span>
                                            <div class="ms-3">
                                                <a href="#" class="text-body">{{ $res->name }}</a>
                                                <div class="text-muted">3 days ago</div>
                                            </div>
                                            <div class="ms-auto">
                                                <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                                                    <span class="switch-icon-a text-muted">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="switch-icon-b text-yellow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>