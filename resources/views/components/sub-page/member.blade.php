<div class="page-custom-tab d-none mt-4" id="custome-tab-3">
    <div class="row">
        <div class="col-md-12">
            <div class="float-start">
                <h2 class="fw-bolder text-muted">Member</h2>
            </div>
            <div class="float-end">
                <span class="btn rounded-10" onclick="open_modal('#modal-share', '#modal-share input[name=email]')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="6" cy="12" r="3" />
                        <circle cx="18" cy="6" r="3" />
                        <circle cx="18" cy="18" r="3" />
                        <line x1="8.7" y1="10.7" x2="15.3" y2="7.3" />
                        <line x1="8.7" y1="13.3" x2="15.3" y2="16.7" />
                    </svg>
                    Undang
                </span>
            </div>
        </div>
    </div>
    <div class="row row-cards mt-1" id="list-project">
        @foreach($result as $val)
        <div class="col-md-12 col-lg-12 px-2">
            <div class="card card-sm rounded-20-left shadow-none border-0 hover-shadow-primary h-100" onclick="window.open('<?= route('workspace.task') ?>', '_parent')">
                <div class="card-body px-3 py-3 d-flex align-items-center justify-content-start">
                    <div>
                        <span class="avatar avatar-sm avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)"></span>
                    </div>
                    <div class="ms-3">
                        <span class="h3">{{ $val->title }}</span>
                    </div>
                    <div class="ms-auto">
                        <span class="text-muted">Designer</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots-vertical" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <desc>Download more icon variants from https://tabler-icons.io/i/dots-vertical</desc>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="12" cy="19" r="1"></circle>
                            <circle cx="12" cy="5" r="1"></circle>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>