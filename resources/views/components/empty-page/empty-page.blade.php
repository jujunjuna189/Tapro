<div class="empty">
    <div class="empty-img"><img src="{{ $image }}" height="128" alt="">
    </div>
    <p class="empty-title">{{ $title }}</p>
    <p class="empty-subtitle text-muted">
        {{ $subtitle }}
    </p>
    <div class="empty-action">
        <a href="#" class="btn bg-blue-lt" data-bs-toggle="modal" data-bs-target="#modal-workspaces" onclick="open_modal('#modal-workspace', '#modal-workspace textarea[name=title]')">
            <span class="nav-link-icon d-md-none d-lg-inline-block">
                {!! $icon !!}
            </span>
            {{ $buttonText }}
        </a>
    </div>
</div>

@push('script')
<script>
    // =========================================================================================================
    // Modal New workspace (Start)
    // =========================================================================================================
    // --- Modal Workspace --- Setting modal new workspace
    let parentWorkspaceModal = '#modal-workspace';
    let modalWorkspaceUpload = '#form-workspace';
    // Form data
    let modalWorkspaceTitle = 'textarea[name="title"]';

    // Modal on submit
    $(document).ready(function() {
        onSubmitWorkspace();
    });

    // Void on submit
    const onSubmitWorkspace = () => {
        $(parentWorkspaceModal + ' ' + modalWorkspaceUpload).on('submit', function(e) {
            e.preventDefault();
            recognition.stop(); //from recognition start file
            uploadDataWorkspace();
        });
    }

    // get data on form workspace
    const getDataFormWorkspace = () => {
        let title = $(parentWorkspaceModal + ' ' + modalWorkspaceTitle).val();
        let visibility = 1;

        let array = {
            title: title,
            description: '',
            color: 'orange',
            visibility: 'private',
        };

        // Clear form
        $(parentWorkspaceModal + ' ' + modalWorkspaceTitle).val('');

        return array;
    }

    // Upload data
    const uploadDataWorkspace = () => {
        let dataBatch = getDataFormWorkspace();

        uploadDataServer({
            url: url + '/workspace/create',
            data: {
                user_id: user_id,
                title: dataBatch.title,
                description: dataBatch.description,
                visibility: dataBatch.visibility,
            },
            onSuccess: function(data) {
                location.reload();
            }
        });
    }
    // =========================================================================================================
    // Modal New Workspace (End)
    // =========================================================================================================
</script>
@endpush