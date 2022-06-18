const difference_in_days = (date1, date2) => {
    date1 = new Date(date1);
    date2 = new Date(date2);

    let diff = new Date(date2 - date1);
    let days = diff / 1000 / 60 / 60 / 24;

    return Math.floor(days);
};

const custome_tab_page = (id) => {
    let parent = ".page-custom-tab";

    $(parent).attr("hidden", true);
    $(parent).addClass("d-none");

    $(parent + id).removeAttr("hidden");
    $(parent + id).removeClass("d-none");
};

// =========================================================================================================
// Picker date
const lite_picker = () => {
    let picker = new Litepicker({
        element: document.getElementById("datepicker-icon"),
        buttonText: {
            previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>`,
            nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>`,
        },
    });

    return picker;
};
// =========================================================================================================
// =========================================================================================================
// Open Modal
const open_modal = (target, onFucus) => {
    $(target).modal("show");
    setTimeout(function () {
        if (onFucus) {
            $(onFucus).focus();
        }
    }, 500);
};
// =========================================================================================================
// Jusgage chart
const chartJusgage = (value = 0) => {
    let jusgage = new JustGage({
        id: "jusgage",
        value: value,
        min: 0,
        max: 100,
        symbol: "%",
        donut: true,
        pointer: true,
        gaugeWidthScale: 0.7,
        shadowOpacity: 0.6,
        shadowSize: 5,
        pointerOptions: {
            toplength: 10,
            bottomlength: 10,
            bottomwidth: 8,
            color: "#000",
        },
        customSectors: [
            {
                color: "#4299e1",
                lo: 50,
                hi: 100,
            },
            {
                color: "#4299e1",
                lo: 0,
                hi: 50,
            },
        ],
        counter: true,
    });

    return jusgage;
};
// For Toast and sweetalert
const swal_loader = (message) => {
    $(function () {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-right',
            showConfirmButton: false,
            onOpen: function () {
                swal.showLoading();
            },
        });

        Toast.fire({
            icon: false,
            background: '#fff',
            title: message,
        })
    });
}

const close_swal = (notif_status = true, message = 'Success', icon = 'success') => {
    setTimeout(function () {
        Swal.close()

        if (notif_status) {
            notif(message, icon);
        }
    }, 1000)
}

const notif = (message = '', icon = false) => {
    $(function () {
        'use strict';
        resetToastPosition();
        $.toast({
            heading: 'Notifikasi',
            text: message,
            showHideTransition: 'plain',
            position: 'top-right',
            icon: icon,
            stack: false,
            loader: false,
            loaderBg: '#57c7d4',
        })
    });
}

const resetToastPosition = () => {
    $('.jq-toast-wrap').removeClass('bottom-left bottom-right top-left top-right mid-center'); // to remove previous position class
    $(".jq-toast-wrap").css({
        "top": "",
        "left": "",
        "bottom": "",
        "right": ""
    }); //to remove previous position style
}
// For recognition
// Funtion untuk memulai recognition Custome
// =========================================================================================================
function startButton(event, target) {
    recognitionFinalSpanParent = target;
    toggle_icon_color('.icon-mic-toggle', 'text-azure', 'text-dark');
    if (recognizing) {
        // Set list 
        toggle_icon_color('.icon-mic-toggle', 'text-dark', 'text-azure');
        recognition.stop();
        return;
    }
    final_transcript = '';
    recognition.lang = default_language;
    recognition.start();
    ignore_onend = false;
    final_span.value = '';
    showInfo('info_allow');
    start_timestamp = event.timeStamp;
}

// Funtion untuk megubah warna pada icon microfon di modal task_list
// =========================================================================================================
const toggle_icon_color = (element, class_add, class_remove) => {
    $(element).addClass(class_add);
    $(element).removeClass(class_remove);
}

const uploadDataServer = ({ url = '', type = 'post', data = [], onSuccess }) => {
    $.ajax({
        url: url,
        type: type,
        dataType: 'json',
        data: {
            data: data,
        },
        headers: {
            'X-CSRF-TOKEN': token,
        },
        beforeSend: function () {
            swal_loader('Sedang unggah data...');
        },
        success: function (data) {
            onSuccess(data);
        },
        error: function (error) {
            close_swal(true, 'Terjadi kesalahan saat unggah data', 'error');
        }
    });
}
