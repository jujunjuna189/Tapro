<div class="modal modal-blur fade" id="modal-update-profile" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" onclick="onSaveUpdate()">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('script')
<script>
    const onSaveUpdate = () => {
        let name = $(element.name_field).val();
        uploadDataServer({
            url: '<?= route('profile.update') ?>',
            data: {
                name: name,
            },
            onSuccess: ((res) => {
                location.reload();
            }),
        });
    }
</script>
@endpush