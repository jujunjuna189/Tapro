<div class="d-none d-md-flex">
    <div class="nav-item dropdown d-none d-md-flex me-3">
        <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
            <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
            </svg>
            <span class="badge bg-red" id="notificationBeat" style="display: none;"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card rounded-20">
            <div class="card rounded-20">
                <div class="card-header d-flex justify-content-between cursor-pointer">
                    <h3 class="card-title">Last updates</h3>
                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Bersihkan Notifikasi" onclick="notifClearNotification()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clear-all" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M8 6h12"></path>
                            <path d="M6 12h12"></path>
                            <path d="M4 18h12"></path>
                        </svg>
                    </div>
                </div>
                <div class="list-group list-group-flush list-group-hoverable" id="bell-notification-list">
                    <div class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col text-truncate text-center">
                                <span class="text-muted d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell-ringing" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                                        <path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727"></path>
                                        <path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727"></path>
                                    </svg>
                                    <span class="ms-2">
                                        Belum ada notifikasi
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
    // --- Notification share --- Setting notification
    let notificationViewBeat = '#notificationBeat';
    let notificationViewList = '#bell-notification-list';
    // ===============================================
    // Data
    let notifDraf = [];

    $(document).ready(function() {
        getFirebaseNotification(auth_user.email, function(data) {
            notifDraf = data;
            notification_draw(notifDraf);
        }); // getFirebase from file js on config in folder firebase

        onChildRemovedFirebaseNotivication(auth_user.email, function(data) {
            notifDraf = [];
            notification_draw(notifDraf);
        });
    });

    // Add element notification
    const notification_draw = (data) => {
        if (data != null) {
            let view = '';
            let dotNotif = [];
            //empty notif
            $(notificationViewList).empty();
            //Loop notification
            Object.keys(data).forEach((key) => {
                let json = JSON.parse(data[key].data);
                let type = json.type;
                dotNotif.push(json.read);
                view += notifViewType(type, key, data[key]);
            });
            //Show notif
            notifShowDot($.inArray(false, dotNotif) != -1);

            view = data.length == 0 ? notifVewEmpty() : view;
            $(notificationViewList).prepend(view);
        }
    }

    // Show dot notif bell
    const notifShowDot = (status = false) => {
        if (status) {
            $(notificationViewBeat).show();
        } else {
            $(notificationViewBeat).hide();
        }
    }

    // Type notification
    const notifViewType = (type, key, data) => {
        let json = JSON.parse(data.data);
        let is_read = json.read ? {
            dotColor: 'bg-sendary',
            btnHidden: 'hidden'
        } : {};

        let view = {
            notif_btn: '<div class="list-group-item">' +
                '<div class="row align-items-center">' +
                '<div class="col-auto"><span class="status-dot status-dot-animated ' + is_read.dotColor + ' d-block"></span></div>' +
                '<div class="col text-truncate">' +
                '<a href="#" class="text-body d-block">' + data.title + '</a>' +
                '<div class="d-block text-muted text-truncate mt-n1">' +
                data.message +
                '</div>' +
                '</div>' +
                '<div class="col-12 text-end mt-3" ' + is_read.btnHidden + '>' +
                '<span class="badge bg-azure-lt border cursor-pointer me-2 px-2 py-1">Tolak</span>' +
                '<span class="badge bg-azure border cursor-pointer px-2 py-1" onclick="notifJoinWorkspace(\'' + key + '\', \'' + auth_user.id + '\', \'' + json.workspace_id + '\', \'Member\', \'' + json.access + '\')">Bergabung</span>' +
                '</div>' +
                '</div>' +
                '</div>',
        }

        return view[type];
    }

    //Notif empty
    const notifVewEmpty = () => {
        let view = '<div class="list-group-item">' +
            '<div class="row align-items-center">' +
            '<div class="col text-truncate text-center">' +
            '<span class="text-muted d-flex align-items-center justify-content-center">' +
            '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell-ringing" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
            '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' +
            '<path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>' +
            '<path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>' +
            '<path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727"></path>' +
            '<path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727"></path>' +
            '</svg>' +
            '<span class="ms-2">' +
            'Belum ada notifikasi' +
            '</span>' +
            '</span>' +
            '</div>' +
            '</div>' +
            '</div>';

        return view;
    }

    // For join workspace
    const notifJoinWorkspace = (collec_key, user_id, workspace_id, role, access) => {
        //To firebase
        updateFirebaseNotification(auth_user.email, collec_key, 'data', JSON.stringify({
            email: auth_user.email,
            workspace_id: workspace_id,
            access: access,
            type: 'notif_btn',
            read: true
        }), false);

        // To Mysql
        uploadDataServer({
            url: url + '/member/create',
            data: {
                user_id: user_id,
                workspace_id: workspace_id,
                role: role,
                access: access,
            },
            onSuccess: function() {
                location.reload();
            },
        });
    }

    const notifClearNotification = () => {
        deleteFirebaseNotification(auth_user.email);
    }
</script>
@endpush