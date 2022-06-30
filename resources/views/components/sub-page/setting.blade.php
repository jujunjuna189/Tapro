<div class="page-custom-tab d-none mt-4" id="custome-tab-4">
    <div class="row">
        <div class="col-md-12">
            <div class="float-start">
                <h2 class="fw-bolder text-muted">Pengaturan</h2>
            </div>
        </div>
    </div>
    <div class="row row-cards mt-1">
        <div class="col-md-12">
            <div class="card shadow-none rounded-20">
                <div class="card-body">
                    <h3>Hapus ruang kerja</h3>
                    <p>Mengahapus ruang kerja akan menghapus tugas utama dan list tugas yang telah di atur dan juga ruang kerja akan hilang dari sisi member</p>
                    <div>
                        <span class="btn bg-red-lt rounded-10" onclick="open_modal('#modal-confirm')">Hapus Ruang Kerja</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
    //Data
    let setting_workspace_id = <?= json_encode($workspaceId) ?>;
    //Modal
    let parentConfirmModal = '#modal-confirm';
    let modalConfirmExecute = '#btn-confirm-execute';
    // State
    $(document).ready(function() {
        onConfirm();
    });
    // Setting modal delete workspace
    //on action 
    const onConfirm = () => {
        $(parentConfirmModal + ' ' + modalConfirmExecute).on('click', function() {
            onDeleted();
        });
    }

    const onDeleted = () => {
        deleteDataServer({
            url: url + '/workspace/delete',
            data: {
                workspace_id: setting_workspace_id,
            },
            onSuccess: function(data) {
                location.reload();
            }
        });
    }
</script>
@endpush