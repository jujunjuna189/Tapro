<div class="page-custom-tab mt-4" id="custome-tab-1">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h2 class="fw-bolder text-muted">Tugas Utama</h2>
            </div>
        </div>
    </div>
    <div class="row row-cards mt-1" id="list-project">
        @foreach($result as $val)
        <div class="col-md-4 col-lg-3 p-2">
            <div class="card card-sm rounded-10 shadow-none hover-shadow-primary h-100" onclick="window.open('<?= $val->url_open ?>', '_parent')">
                <div class="card-body px-3 py-3 text-center">
                    <span class="h3">{{ $val->title }}</span>
                    <div class="my-3">
                        <div class="avatar-list avatar-list-stacked">
                            <span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)"></span>
                            <span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)"></span>
                            <span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)"></span>
                        </div>
                    </div>
                    <div class="button-box-fly-center">
                        <span class="p-2 bg-light-blue rounded-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12h4l3 8l4 -16l3 8h4" />
                            </svg>
                            {{ $val->total_task_completed . '/' . $val->total_task }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-4 col-lg-3 p-2">
            <div class="card card-sm rounded-10 shadow-none hover-shadow-primary h-100" onclick="open_modal('#modal-project', '#modal-project textarea[name=title]')">
                <div class="card-body px-2 pt-3 pb-4 text-center d-flex align-items-center justify-content-center">
                    <div>
                        <span class="h3">Buat Baru</span>
                        <div class="mt-3">
                            <span class="text-dark p-2 bg-light-blue rounded-10">
                                {!! App\Models\GlobalModel::my_icon()->plus !!}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
    // Data
    let workspace_id = <?= json_encode($workspaceId) ?>;
    let data_project = <?= json_encode($result) ?>;
    // =========================================================================================================
    // Modal New Project (Start)
    // =========================================================================================================
    // --- Modal Project --- Setting modal new project
    let parentProjectModal = '#modal-project';
    let modalProjectUpload = '#form-project';
    // Form data
    let modalProjectTitle = 'textarea[name="title"]';
    // Project list
    let projectViewList = '#list-project';

    // Modal on submit
    $(document).ready(function() {
        onSubmitProject();
    });

    // Void on submit
    const onSubmitProject = () => {
        $(parentProjectModal + ' ' + modalProjectUpload).on('submit', function(e) {
            e.preventDefault();
            recognition.stop(); //from recognition start file
            uploadDataProject();
        });
    }

    // get data on form project
    const getDataFormProject = () => {
        let title = $(parentProjectModal + ' ' + modalProjectTitle).val();

        let array = {
            title: title,
            description: '',
            deadline: '',
            visibility: 'private',
            total_task: 0,
        };

        // Clear form
        $(parentProjectModal + ' ' + modalProjectTitle).val('');

        return array;
    }

    // Upload data
    const uploadDataProject = () => {
        let dataBatch = getDataFormProject();

        uploadDataServer({
            url: url + '/project/create',
            data: {
                workspace_id: workspace_id,
                title: dataBatch.title,
                description: dataBatch.description,
                deadline: dataBatch.deadline,
                visibility: dataBatch.visibility,
            },
            onSuccess: function(data) {
                pushProjectData(data);
            }
        });
    }

    const pushProjectData = (object) => {
        data_project.push(object);
        drawProject(data_project);
    }

    // Draw list
    const drawProject = (array) => {
        $(projectViewList).children('.col-md-4').not(":nth-child(" + (array.length) + ")").remove();
        let view = '';
        $.each(array, function(i, row) {
            view += '<div class="col-md-4 col-lg-3 p-2">' +
                '<div class="card card-sm rounded-10 shadow-none hover-shadow-primary h-100" onclick="window.open(\'' + row.url_open + '\', \'' + '_parent' + '\')">' +
                '<div class="card-body px-3 py-3 text-center">' +
                '<span class="h3">' + row.title + '</span>' +
                '<div class="my-3">' +
                '<div class="avatar-list avatar-list-stacked">' +
                '<span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)"></span>' +
                '<span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)"></span>' +
                '<span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" style="background-image: url(<?= asset('assets/dist/img/user.svg') ?>)"></span>' +
                '</div>' +
                '</div>' +
                '<div class="button-box-fly-center">' +
                '<span class="p-2 bg-light-blue rounded-10">' +
                '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
                '<path stroke="none" d="M0 0h24v24H0z" fill="none" />' +
                '<path d="M3 12h4l3 8l4 -16l3 8h4" />' +
                '</svg>' +
                row.total_task +
                '</span>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>';
        });

        $(projectViewList).prepend(view);
    }
    // =========================================================================================================
    // Modal New Project (End)
    // =========================================================================================================
</script>
@endpush