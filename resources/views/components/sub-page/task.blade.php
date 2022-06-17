<div class="row row-cards page-custom-tab d-none" id="custome-tab-2">
    <div class="col-md-12">
        <div class="mt-4">
            <h2 class="fw-bolder text-muted">Tugas</h2>
        </div>
    </div>
    <div class="col-md-4 col-lg-3 p-2">
        <div class="card card-sm rounded-10 shadow-none border-0 hover-shadow-primary h-100" data-bs-toggle="modal" data-bs-target="#modal-project">
            <div class="card-body px-2 py-2 text-center d-flex align-items-center justify-content-center">
                <div>
                    <span class="h3">Buat Baru</span>
                    <div class="mt-3">
                        <span class="text-dark p-2 bg-light-blue rounded-10">
                            {!! App\Models\GlobalModel::my_icon()->plus !!}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($result as $val)
    <div class="col-md-4 col-lg-3 p-2">
        <div class="card card-sm rounded-10 shadow-none border-0 hover-shadow-primary h-100" onclick="window.open('<?= route('workspace.task') ?>', '_parent')">
            <div class="card-body px-3 py-3 text-center">
                <span class="h3">{{ App\Models\GlobalModel::overlayText($val->title) }}</span>
                <div class="my-3">
                    <div class="avatar-list avatar-list-stacked">
                        <span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)"></span>
                        <span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)"></span>
                        <span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)"></span>
                    </div>
                </div>
                <div class="button-box-fly-center">
                    <span class="p-2 bg-light-blue rounded-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12h4l3 8l4 -16l3 8h4" />
                        </svg>
                        {{ $val->total_task }}
                    </span>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>