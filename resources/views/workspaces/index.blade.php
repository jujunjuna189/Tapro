@extends('layouts.app_template')
@section('content')
<!-- Empty Page -->
@if(count($workspaces) == 0)
<x-empty-page.empty-page :image="asset('assets/dist/img/illustration/undraw_quitting_time_dm8t.svg')" title="Ruang Kerja" subtitle="Mulai bekerja dengan cepat." :icon="App\Models\GlobalModel::my_icon()->layer" buttonText="Buat Ruangan Kerja" />
@endif
<!-- Page Workspace -->
@if(count($workspaces) > 0)
<div class="row">
    <div class="d-none d-lg-block col-lg-3">
        <x-sub-page.workspace :result="$workspaces" />
    </div>
    <div class="col-lg-9 ps-lg-4">
        <div class="card shadow-none rounded-20 mt-3">
            <div class="card-stamp" style="border-top-right-radius: 20px !important;">
                <div class="card-stamp-icon bg-yellow">
                    {!! App\Models\GlobalModel::my_icon()->layer_grid !!}
                </div>
            </div>
            <div class="card-body">
                <h2 class="h2">
                    <span class="status status-{{ $workspace->color }} bg-{{ $workspace->color }}-lt me-3">
                        <span class="status-dot status-dot-animated"></span>
                    </span>
                    {{ $workspace->title }}
                </h2>
                <div class="btn-list mt-4">
                    <a href="#" class="btn bg-red-lt rounded-10">
                        {!! App\Models\GlobalModel::my_icon()->bell_ringing !!}
                        Mengikuti
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <x-sub-nav.nav-workspace :totalMember="count($member)" />
            </div>
        </div>
        <!-- List Task Utama-->
        <x-sub-page.project :result="$project" :workspaceId="$workspace->id" />
        <!-- Task -->
        <x-sub-page.task :result="$task" />
        <!-- Member -->
        <x-sub-page.member :result="$member" :workspaceId="$workspace->id" />
        <!-- Setting -->
        <x-sub-page.setting :workspaceId="$workspace->id" />
    </div>
</div>
@endif

@endsection
@section('modal')
<!-- Modal for new Project -->
<x-modal.new-workspace />
<!-- Modal for new Project -->
<x-modal.new-project />
<!-- Modal for share -->
<x-modal.share />
<!-- Modal Confirm -->
<x-modal.confirm />
@endsection