<div class="row page-custom-tab d-none" id="custome-tab-2">
    <div class="col-md-12">
        <div class="mt-4">
            <h2 class="fw-bolder text-muted">Tugas Saya</h2>
        </div>
    </div>
    @foreach($result as $val)
    <x-list-entry.task-list :id="$val->id" :title="$val->title" :completed="$val->completed" :deleted="$val->deleted" :share="$val->share" />
    @endforeach
</div>