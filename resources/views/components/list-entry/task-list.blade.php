<div class="card card-sm rounded-20-left shadow-none border-0 hover-shadow-primary mb-2">
    <div class="card-body px-3 py-3 d-flex align-items-center justify-content-start">
        <div>
            <span class="h3">{{ $title }}</span>
        </div>
        <div class="ms-auto">
            @if($completed)
            <input class="form-check-input checkbox-custome" type="checkbox" checked onclick="onTaskCompleted(this, '{{ $id }}')">
            @else
            <input class="form-check-input checkbox-custome" type="checkbox" onclick="onTaskCompleted(this, '{{ $id }}')">
            @endif
        </div>
    </div>
</div>