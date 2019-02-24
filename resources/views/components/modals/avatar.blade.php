<div class="modal fade" id="avatar" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title pull-left">Profile Image</h5>
            </div>
            <div class="modal-body">
                <avatar-uploader :user="`{{ $data['user']->id }}`"></avatar-uploader>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>