@extends('layouts.app_template')
@section('content')
<!-- Empty Page -->
@if(count($workspaces) == 0)
<x-empty-page.empty-page :image="asset('assets/dist/img/illustration/undraw_quitting_time_dm8t.svg')" title="Ruang Kerja" subtitle="Mulai bekerja dengan cepat." :icon="App\Models\GlobalModel::my_icon()->layer" buttonText="Buat Ruangan Kerja" />
@endif
<!-- Page Workspace -->
@if(count($workspaces) > 1)
<div class="row">
    <div class="d-none d-lg-block col-lg-3">
        <h4 class="strong fw-bold mb-4">Workspace's</h4>
        @foreach($workspaces as $val)
        <div class="card rounded-20 mt-4 border-0 bg-{{ $val->color }}-lt shadow-none">
            <div class="card-body">
                <h6 class="mb-1 fw-normal status-{{ $val->color }}">
                    <span class="status-dot status-dot-animated me-2"></span>
                    {{ $val->visibility }}
                </h6>
                <h4 class="m-0 fw-bolder">{{ $val->title }}</h4>
                <a href="#" class="bg-{{ $val->color }} p-2 rounded-10 shadow button-fly">
                    {!! App\Models\GlobalModel::my_icon()->eye !!}
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-lg-9 ps-lg-4">
        <div class="card shadow-none border-0 rounded-20 mt-3">
            <div class="card-stamp" style="border-top-right-radius: 20px !important;">
                <div class="card-stamp-icon bg-yellow">
                    {!! App\Models\GlobalModel::my_icon()->layer_grid !!}
                </div>
            </div>
            <div class="card-body">
                <h2 class="h2">
                    <span class="status status-blue bg-blue-lt me-3">
                        <span class="status-dot status-dot-animated"></span>
                    </span>
                    {{ $workspaces[0]->title }}
                </h2>
                <div class="btn-list mt-4">
                    <a href="#" class="btn rounded-10">
                        {!! App\Models\GlobalModel::my_icon()->edit_circle !!}
                        Edit
                    </a>
                    <a href="#" class="btn bg-red-lt rounded-10">
                        {!! App\Models\GlobalModel::my_icon()->bell_ringing !!}
                        Subscribe
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="btn-list d-flex justify-content-center">
                    <a href="#" class="btn rounded-10 bg-dark-lt" role="button">{!! App\Models\GlobalModel::my_icon()->layer_grid !!} Projek</a>
                    <a href="#" class="btn rounded-10 bg-dark-lt" role="button">{!! App\Models\GlobalModel::my_icon()->layout_board !!} Tugas</a>
                    <a href="#" class="btn rounded-10 bg-dark-lt" role="button">{!! App\Models\GlobalModel::my_icon()->users !!} Tim <sup class="ms-1 text-red">16</sup> </a>
                    <a href="#" class="btn rounded-10 bg-dark-lt" role="button">{!! App\Models\GlobalModel::my_icon()->setting !!} Pengaturan</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mt-3">
                    <h3 class="fw-bolder text-muted">Projek Saya</h3>
                </div>
            </div>
        </div>
        <!-- List -->
        <div class="row row-cards" id="list-data">
            <div class="col-md-4 col-lg-3 p-2">
                <div class="card card-sm rounded-10 shadow-none border-0 hover-shadow-primary" style="max-height: 100px; height: 100px">
                    <div class="card-body px-2 py-2 text-center">
                        <span class="h3">Buat Baru</span>
                        <div class="mt-3">
                            <span class="text-dark p-2 bg-light-blue rounded-10">
                                {!! App\Models\GlobalModel::my_icon()->plus !!}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($workspaces[0]->project as $val)
            <div class="col-md-4 col-lg-3 p-2">
                <div class="card card-sm rounded-10 shadow-none border-0 hover-shadow-primary" style="max-height: 100px; height: 100px" onclick="window.open('<?= route('workspace.task') ?>', '_parent')">
                    <div class="card-body px-2 py-2 text-center">
                        <span class="h3">{{ $val->title }}</span>
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
    </div>
</div>
@endif

@endsection
@section('modal')
<div class="modal modal-blur fade" id="modal-workspaces" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ruang Kerja Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nama Ruang Kerja</label>
                    <input type="text" class="form-control" name="title" id="title" required placeholder="...">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="description" id="description" cols="30" rows="2" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
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
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-selectgroup-boxes mb-3">
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
                <button type="button" class="btn btn-primary ms-auto" onclick="new_workspaces_on_upload()">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Simpan
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    let parent_modal_workspaces = "#modal-workspaces";

    $(document).ready(function() {

    });

    const get_value_form = () => {
        let title = $(parent_modal_workspaces + " input[name='title']");
        let description = $(parent_modal_workspaces + " textarea[name='description']");
        let visibility = $(parent_modal_workspaces + " input[name='visibility']:checked");

        let value = {
            title: title.val(),
            description: description.val(),
            visibility: visibility.val()
        };

        return value;
    }

    const new_workspaces_on_upload = () => {
        console.log(get_value_form());
    }
</script>
@endsection