<div class="page-custom-tab d-none mt-4" id="custome-tab-3">
    <div class="row">
        <div class="col-md-12">
            <div class="float-start">
                <h2 class="fw-bolder text-muted">Member</h2>
            </div>
            <div class="float-end">
                <span class="btn rounded-10" onclick="open_modal('#modal-share', '#modal-share input[name=email]')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="6" cy="12" r="3" />
                        <circle cx="18" cy="6" r="3" />
                        <circle cx="18" cy="18" r="3" />
                        <line x1="8.7" y1="10.7" x2="15.3" y2="7.3" />
                        <line x1="8.7" y1="13.3" x2="15.3" y2="16.7" />
                    </svg>
                    Undang
                </span>
            </div>
        </div>
    </div>
    <div class="row row-cards mt-1 pt-3" id="list-project">
        @foreach($result as $val)
        <div class="col-md-12 col-lg-12 px-2 my-1">
            <div class="card card-sm rounded-20-left shadow-none hover-shadow-primary h-100" onclick="window.open('<?= route('workspace.task') ?>', '_parent')">
                <div class="card-body px-3 py-3 d-flex align-items-center justify-content-start">
                    <div>
                        <span class="avatar avatar-sm avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)">{{ substr($val->name, 0, 2) }}</span>
                    </div>
                    <div class="ms-3">
                        <span class="h3">{{ $val->name }}</span>
                    </div>
                    <div class="ms-auto">
                        <span class="text-muted">{{ $val->role }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots-vertical" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <desc>Download more icon variants from https://tabler-icons.io/i/dots-vertical</desc>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="12" cy="19" r="1"></circle>
                            <circle cx="12" cy="5" r="1"></circle>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@push('script')
<script>
    // Data share modal
    let member_workspace_id = <?= json_encode($workspaceId) ?>;
    let user_name = auth_user.name; // From app template
    // =========================================================================================================
    // Modal New share (Start)
    // =========================================================================================================
    // --- Modal share --- Setting modal new share
    let parentShareModal = '#modal-share';
    let modalShareUpload = '#firebase-push-data-notification';
    // Form data
    let modalShareEmail = 'input[name="email"]';
    let modalShareAccess = 'select[name="access"]';

    // Modal on input email
    $(document).ready(function() {
        onInputEmailShare();
        onSelectAccessShare();
    });

    // Remove attr in element Html
    const removeAttrForm = () => {
        $(parentShareModal + ' ' + modalShareUpload).removeAttr('data-fire-key-id');
        $(parentShareModal + ' ' + modalShareUpload).removeAttr('data-fire-title');
        $(parentShareModal + ' ' + modalShareUpload).removeAttr('data-fire-message');
        $(parentShareModal + ' ' + modalShareUpload).removeAttr('data-fire-data');
    }

    const addAttrForm = () => {
        $(parentShareModal + ' ' + modalShareUpload).attr('data-fire-key-id', '');
        $(parentShareModal + ' ' + modalShareUpload).attr('data-fire-title', '');
        $(parentShareModal + ' ' + modalShareUpload).attr('data-fire-message', '');
        $(parentShareModal + ' ' + modalShareUpload).attr('data-fire-data', '');
    }

    // set Atribute in element Html
    const setAttrForm = (data) => {
        // First remove atrribute if exist
        removeAttrForm();
        // Second add atribut
        addAttrForm();
        // And last update attribute becouse not use not changed
        $(parentShareModal + ' ' + modalShareUpload).data('fire-key-id', data.key_id);
        $(parentShareModal + ' ' + modalShareUpload).data('fire-title', data.title);
        $(parentShareModal + ' ' + modalShareUpload).data('fire-message', data.message);
        $(parentShareModal + ' ' + modalShareUpload).data('fire-data', data.data);
    }

    const shareSetForm = (email, access) => {
        setAttrForm({
            key_id: email,
            title: 'Undangan Ruang Kerja',
            message: user_name + ' mengundang anda untuk bergabung',
            data: JSON.stringify({
                email: email,
                workspace_id: member_workspace_id,
                access: access,
                type: 'notif_btn',
                read: false,
            })
        });
    }

    // On input email keyup
    const onInputEmailShare = () => {
        $(parentShareModal + ' ' + modalShareEmail).on('keyup', function() {
            let email = $(this).val();
            let access = $(parentShareModal + ' ' + modalShareAccess).val();
            shareSetForm(email, access);
        });
    }

    // On change select access
    const onSelectAccessShare = () => {
        $(parentShareModal + ' ' + modalShareAccess).on('change', function() {
            let email = $(parentShareModal + ' ' + modalShareEmail).val();
            let access = $(this).val();
            shareSetForm(email, access);
        });
    }
</script>
@endpush