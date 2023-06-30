<!--modal-share-task -->
<div class="modal modal-blur fade" id="modal-comment-task" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content bg-white">
            <div class="modal-header">
                <div class="d-flex justify-content-between">
                    <h3>Comment</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body" id="share-task-list-task">
                <div>
                    <label for="comment">Comment</label>
                    <textarea name="comment-task" id="comment-task" cols="30" rows="3" class="form-control" placeholder="..."></textarea>
                </div>
                <div class="mt-4">
                    <div class="d-flex justify-content-end">
                        <div class="btn btn-primary" onclick="onSaveCommentTask()">Simpan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>