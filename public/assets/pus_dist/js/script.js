var stackedCard = new stackedCards({
    selector: ".stacked-cards-slide",
    layout: "slide",
    transformOrigin: "center",
});

stackedCard.init();

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
