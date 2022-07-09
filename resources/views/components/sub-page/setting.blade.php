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
                        <span class="btn bg-red-lt rounded-10" onclick="open_modal('#modal-confirm')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="4" y1="7" x2="20" y2="7"></line>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                            </svg>
                            Hapus Ruang Kerja
                        </span>
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