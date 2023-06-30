@extends('layouts.app_template')
@section('header')
<div class="page-header d-print-none">
    <div class="row align-items-center">
        <div class="col">
            <!-- Page pre-title -->
            <div class="page-pretitle">
                Overview
            </div>
            <h2 class="page-title">
                {{ isset($title) ? $title : 'Task Progress' }}
            </h2>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row row-deck row-cards">
    <div class="col-12">
        <div class="card card-md">
            <div class="card-stamp card-stamp-lg">
                <div class="card-stamp-icon bg-primary">
                    <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                        <line x1="10" y1="10" x2="10.01" y2="10" />
                        <line x1="14" y1="10" x2="14.01" y2="10" />
                        <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                    </svg>
                </div>
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-10">
                        <h3 class="h1">Taspro (Task Progress)</h3>
                        <div class="markdown text-muted">
                            Kelola tugas dengan cepat dan juga mudah
                            jadikanlah deadline mu lebih terencana.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Project Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Your project name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label class="form-label">Deadline</label>
                            <input type="text" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">Visibility</label>
                            <select class="form-select">
                                <option value="1" selected>Private</option>
                                <option value="2">Public</option>
                                <option value="3">Hidden</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Client</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Periode Pelaporan</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div>
                            <label class="form-label">Informasi Tambahan</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Batal
                </a>
                <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Buat Project
                </a>
            </div>
        </div>
    </div>
</div>
@endsection