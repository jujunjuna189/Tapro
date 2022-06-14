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
                <x-sub-nav.nav-workspace />
            </div>
        </div>
        <!-- List Task Utama-->
        <x-project-page.project :result="$workspaces[0]->project" />
        <!-- Task -->
        <x-project-page.task :result="$workspaces[0]->project" />
        <!-- Member -->
        <x-project-page.member :result="$workspaces[0]->project" />
    </div>
</div>
@endif

@endsection
@section('modal')
<!-- Modal for new Project -->
<x-modal.new-project />
<!-- Modal for share -->
<x-modal.share />
@endsection