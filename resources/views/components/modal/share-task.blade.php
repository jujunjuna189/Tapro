<!--modal-share-task -->
<div class="modal modal-blur fade" id="modal-share-task" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content bg-white">
            <div class="modal-header">
                <div class="d-flex justify-content-between">
                    <h3>Share</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body" id="share-task-list-task">
                @if(count($result) == 0)
                <span class="text-muted">Tidak ada member</span>
                @endif
                @foreach($result as $res)
                <div class="d-flex align-items-center mt-auto py-2">
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