<!--modal-invite-member -->
<div class="modal modal-blur fade" id="modal-invite-member" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <label class="form-label">Undang Member</label>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach($result as $val)
                <div class="card card-sm px-2 mb-2 rounded-20 shadow-none hover-shadow-primary h-100" onclick="window.open('<?= route('workspace.task') ?>', '_parent')">
                    <div class="card-body px-3 py-3 d-flex align-items-center justify-content-start">
                        <div>
                            <span class="avatar avatar-sm avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)"></span>
                        </div>
                        <div class="ms-3">
                            <span class="h3">{{ $val->name }}</span>
                        </div>
                        <div class="ms-auto">
                            <button class="switch-icon switch-icon-scale active" data-bs-toggle="switch-icon">
                                <span class="switch-icon-a text-blue">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-share-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="6" cy="12" r="3"></circle>
                                        <circle cx="18" cy="6" r="3"></circle>
                                        <path d="M15.861 15.896a3 3 0 0 0 4.265 4.22m.578 -3.417a3.012 3.012 0 0 0 -1.507 -1.45"></path>
                                        <path d="M8.7 10.7l1.336 -.688m2.624 -1.352l2.64 -1.36"></path>
                                        <path d="M8.7 13.3l6.6 3.4"></path>
                                        <path d="M3 3l18 18"></path>
                                    </svg>
                                </span>
                                <span class="switch-icon-b text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-share" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="6" cy="12" r="3"></circle>
                                        <circle cx="18" cy="6" r="3"></circle>
                                        <circle cx="18" cy="18" r="3"></circle>
                                        <line x1="8.7" y1="10.7" x2="15.3" y2="7.3"></line>
                                        <line x1="8.7" y1="13.3" x2="15.3" y2="16.7"></line>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>