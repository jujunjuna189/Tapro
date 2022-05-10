<div class="card card-sm card-stacked">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <span class="status status-teal">
                    <span class="status-dot status-dot-animated"></span>
                </span>
            </div>
            <div class="dropdown">
                <a href="#" class="text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                    <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="12" cy="12" r="1" />
                        <circle cx="12" cy="19" r="1" />
                        <circle cx="12" cy="5" r="1" />
                    </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item">Import</a>
                    <a href="#" class="dropdown-item">Export</a>
                    <a href="#" class="dropdown-item">Download</a>
                    <a href="#" class="dropdown-item text-danger">Delete</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <div class="mb-2 px-3 cursor-pointer">
                        <a href="{{ route('workspace.project') }}" class="h3 strong text-dark">{{ $title }}</a>
                    </div>
                    <small class="text-muted">{{ $description }}</small>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="avatar-list avatar-list-stacked mt-3">
                    @foreach($share as $val)
                    @if($val->thumbnail == '')
                    <span class="avatar avatar-xs avatar-rounded" title="{{ $val->name }}" data-bs-toggle="tooltip">{{ substr($val->name, 0, 2) }}</span>
                    @else
                    <span class="avatar avatar-xs avatar-rounded" title="{{ $val->name }}" data-bs-toggle="tooltip" style="background-image: url(<?= $val->thumbnail ?>)"></span>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-12">
                <div class="px-3 mt-3">
                    <div class="d-flex justify-content-between">
                        <small class="strong">Progress</small>
                        <small class="strong">{{ $progress }}%</small>
                    </div>
                    <div class="progress progress-md bg-blue-lt mt-2">
                        <div class="progress-bar bg-blue rounded" style="width: <?= $progress ?>%" role="progressbar" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">
                            <span class="visually-hidden">{{ $progress }}% Complete</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div class="text-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/layers-subtract -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="8" y="4" width="12" height="12" rx="2" />
                                <path d="M16 16v2a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-8a2 2 0 0 1 2 -2h2" />
                            </svg>
                            {{ $task }}
                        </div>
                        <div>
                            <span class="status status-blue">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar-event -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="4" y="5" width="16" height="16" rx="2" />
                                    <line x1="16" y1="3" x2="16" y2="7" />
                                    <line x1="8" y1="3" x2="8" y2="7" />
                                    <line x1="4" y1="11" x2="20" y2="11" />
                                    <rect x="8" y="15" width="2" height="2" />
                                </svg>
                                <small>
                                    Tersisa {{ App\Models\GlobalModel::difference_in_days($deadline) }} Hari
                                </small>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>