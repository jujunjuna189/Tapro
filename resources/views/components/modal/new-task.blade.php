<div class="modal modal-blur fade" id="modal-task" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Buat Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="post" id="form-task">
                <div class="modal-body">
                    <div class="mb-3">
                        <textarea name="title" id="final_span" cols="30" rows="4" class="form-control" autofocus required placeholder="Judul tugas ..."></textarea>
                    </div>
                    <div class="mt-4"></div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                Batal
                            </a>
                        </div>
                        <div class="rounded-circle input-group-text bg-white cursor-pointer" style="padding-top: 12px; padding-bottom: 12px;" onclick="startButton(event)">
                            <a href="#" class="link-secondary " title="Speech" data-bs-toggle="tooltip">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-mic-toggle text-dark" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="9" y="2" width="6" height="11" rx="3" />
                                    <path d="M5 10a7 7 0 0 0 14 0" />
                                    <line x1="8" y1="21" x2="16" y2="21" />
                                    <line x1="12" y1="17" x2="12" y2="21" />
                                </svg>
                            </a>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <line x1="12" y1="5" x2="12" y2="19" />
                                    <line x1="5" y1="12" x2="19" y2="12" />
                                </svg>
                                Buat
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('script')
<script>
    $(document).ready(function() {
        recognition.onend = function() {
            toggle_icon_color('.icon-mic-toggle', 'text-dark', 'text-azure');
            recognizing = false;
            if (ignore_onend) {
                return;
            }
            // start_img.src = 'mic.gif';
            if (!final_transcript) {
                showInfo('info_start');
                return;
            }
            showInfo('');
            if (window.getSelection) {
                window.getSelection().removeAllRanges();
                var range = document.createRange();
                range.selectNode(document.getElementById('final_span'));
                window.getSelection().addRange(range);
            }
            if (create_email) {
                create_email = false;
                createEmail();
            }
        };

        $('#final_span').on('keyup', function() {
            recognition.stop();
        });
    });

    // Funtion untuk memulai recognition
    // =========================================================================================================
    function startButton(event) {
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
</script>
@endpush