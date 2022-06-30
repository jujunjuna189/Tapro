<h4 class="strong fw-bold mb-4">Ruang Kerja</h4>
<div id="list-workspace">
    @foreach($result as $val)
    <div class="card rounded-20 mt-4 bg-{{ $val->color }}-lt shadow-none">
        <div class="card-body">
            <h6 class="mb-1 fw-normal status-{{ $val->color }}">
                <span class="status-dot status-dot-animated me-2"></span>
                {{ $val->visibility }}
            </h6>
            <h4 class="m-0 fw-bolder">{{ $val->title }}</h4>
            <a href="{{ $val->url_open }}" class="bg-{{ $val->color }} p-2 rounded-10 shadow button-fly">
                {!! App\Models\GlobalModel::my_icon()->eye !!}
            </a>
        </div>
    </div>
    @endforeach
</div>
<div class="card rounded-20 mt-4 bg-white shadow-none cursor-pointer" onclick="open_modal('#modal-workspace', '#modal-workspace textarea[name=title]')">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
            <h4 class="m-0 fw-bolder">Buat Ruang Kerja</h4>
            <a href="#" class="p-2 rounded-10 text-dark shadow">
                {!! App\Models\GlobalModel::my_icon()->plus !!}
            </a>
        </div>
    </div>
</div>

@push('script')
<script>
    // Data
    let data_workspace = <?= json_encode($result) ?>;
    // =========================================================================================================
    // Modal New workspace (Start)
    // =========================================================================================================
    // --- Modal Workspace --- Setting modal new workspace
    let parentWorkspaceModal = '#modal-workspace';
    let modalWorkspaceUpload = '#form-workspace';
    // Form data
    let modalWorkspaceTitle = 'textarea[name="title"]';
    // Workspace list
    let workspaceViewList = '#list-workspace';

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
                pushWorkspaceData(data);
            }
        });
    }

    const pushWorkspaceData = (object) => {
        data_workspace.unshift(object);
        drawWorkspace(data_workspace);
    }

    // Draw list
    const drawWorkspace = (array) => {
        $(workspaceViewList).empty();
        let view = '';
        $.each(array, function(i, row) {
            view += '<div class="card rounded-20 mt-4 bg-' + row.color + '-lt shadow-none">' +
                '<div class="card-body">' +
                '<h6 class="mb-1 fw-normal status-' + row.color + '">' +
                '<span class="status-dot status-dot-animated me-2"></span>' +
                row.visibility +
                '</h6>' +
                '<h4 class="m-0 fw-bolder">' + row.title + '</h4>' +
                '<a href="' + row.url_open + '" class="bg-' + row.color + ' p-2 rounded-10 shadow button-fly">' +
                '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
                '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' +
                '<circle cx="12" cy="12" r="2"></circle>' +
                '<path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>' +
                '</svg>' +
                '</a>' +
                '</div>' +
                '</div>';
        });

        $(workspaceViewList).prepend(view);
    }
    // =========================================================================================================
    // Modal New Workspace (End)
    // =========================================================================================================
</script>
@endpush