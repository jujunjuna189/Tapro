<!-- Modal Share -->
<div class="modal modal-blur fade" id="modal-share" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Undang Seseorang</label>
                    <div class="input-group">
                        <input type="text" name="email" id="email" autofocus class="form-control border-end-0 shadow-none" placeholder="contoh@gmail.com">
                        <select name="access" class="small form-block border-start-0 shadow-none">
                            <option value="1">Can View</option>
                            <option value="2">Editor</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Batal
                </a>
                <a id="firebase-push-data-notification" href="#" class="btn btn-primary ms-auto">
                    <!-- Download SVG icon from http://tabler-icons.io/i/share -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="6" cy="12" r="3" />
                        <circle cx="18" cy="6" r="3" />
                        <circle cx="18" cy="18" r="3" />
                        <line x1="8.7" y1="10.7" x2="15.3" y2="7.3" />
                        <line x1="8.7" y1="13.3" x2="15.3" y2="16.7" />
                    </svg>
                    Undang
                </a>
            </div>
        </div>
    </div>
</div>