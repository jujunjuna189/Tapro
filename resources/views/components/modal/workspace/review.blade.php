<div class="modal modal-blur fade" id="modal-review" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Periksa Tugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="post" id="form-review">
                <div class="modal-body">
                    <div class="mb-3">
                        <textarea name="title" id="final_span" cols="30" rows="4" class="form-control" autofocus required placeholder="Judul tugas..."></textarea>
                    </div>
                    <div class="mt-4"></div>
                    <div class="d-flex justify-content-between">
                        <div class="rounded-circle input-group-text bg-white cursor-pointer" style="padding-top: 12px; padding-bottom: 12px;" onclick="startButton(event, '#modal-review #final_span')">
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
                range.selectNode($(recognitionFinalSpanParent));
                window.getSelection().addRange(range);
            }
            if (create_email) {
                create_email = false;
                createEmail();
            }
        };

        $(recognitionFinalSpanParent).on('keyup', function() {
            recognition.stop();
        });

        //On Modal Close
        $("#modal-review").on('hide.bs.modal', function() {
            recognition.stop();
        });

        recognition.onresult = function(event) {
            var interim_transcript = '';
            for (var i = event.resultIndex; i < event.results.length; ++i) {
                if (event.results[i].isFinal) {
                    final_transcript += event.results[i][0].transcript;
                } else {
                    interim_transcript += event.results[i][0].transcript;
                }
            }

            var text = interim_transcript.split(' ');
            console.log(text[(text.length - 1)]);
        };
    });
</script>
@endpush