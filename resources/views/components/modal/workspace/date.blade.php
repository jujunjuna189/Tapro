<!--modal-share-task -->
<div class="modal modal-blur fade" id="modal-date-project" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content bg-white">
            <div class="modal-header">
                <div class="d-flex justify-content-between">
                    <h3>Tanggal</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body" id="share-task-list-task">
                <div class="datepicker-inline d-flex justify-content-center" id="datepicker-inline">
                </div>
                <div class="mt-4">
                    <div class="d-flex justify-content-end">
                        <div class="btn btn-primary" onclick="saveDealine()">Simpan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
    // @formatter:off
    const dataDeadlineModal = {};
    $(document).ready(() => {
        new Litepicker({
            element: document.getElementById('datepicker-inline'),
            singleMode: false,
            inlineMode: true,
            buttonText: {
                previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
                nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
            },
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    dataDeadlineModal.dateStart = formatterDate(date1.dateInstance);
                    dataDeadlineModal.dateEnd = formatterDate(date2.dateInstance);
                });
            },
        })
    });

    const saveDealine = () => {
        uploadDataServer({
            url: '<?= route('deadline.create') ?>',
            data: {
                id: '<?= $id ?>',
                ...dataDeadlineModal
            },
            onSuccess: ((res) => {
                $(contentDeadlineProject).html(res.deadline);
            }),
        });
    }
    // @formatter:on
</script>
@endpush