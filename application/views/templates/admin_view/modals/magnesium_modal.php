<!-- Upload Modal magnesium-->
<div class="modal fade" id="uploadModalMagnesium" tabindex="-1" role="dialog" aria-labelledby="uploadModalMagnesium" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="uploadModalMagnesium">Upload Data Magnesium</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- Form -->
            <?php echo form_open_multipart('Magnesium/save') ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" required autofocus class="form-control" id="namafile" name="namafile" placeholder="nama file">
                </div>
                <div class="form-group">
                    <input type="text" required autofocus class="form-control datepicker" id='tanggaldata' name="tanggaldata" placeholder="tanggal pengambilan data">
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fileupload" name="fileupload">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div>
                    <p>klik "Upload" untuk melanjutkan</p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <button class='btn btn-success' type='submit'>Save</button>
            </div>
            <?php echo form_close(); ?>
            <!-- endform -->
        </div>
    </div>
</div>
<!-- end of upload modal -->
<!-- edit modals -->
<div class="modal fade" id="editMagnesium" tabindex="-1" role="dialog" aria-labelledby="editMagnesium" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="editMagnesium">Edit Data Magnesium</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- Form -->
            <?php echo form_open_multipart('Magnesium/ubah_data') ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" required autofocus class="form-control" id="namafilemg" name="namafile" placeholder="nama file">
                </div>
                <div class="form-group">
                    <input type="text" required autofocus class="form-control datepicker" id='tanggaldatamg' name="tanggaldata" placeholder="tanggal pengambilan data">
                    <input type="hidden" name="id" class="form-control" id="idmg" required readonly>
                </div>
                <div>
                    <p>klik "save" untuk melanjutkan</p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <button class='btn btn-success' type='submit'>Save</button>
            </div>
            <?php echo form_close(); ?>
            <!-- endform -->
        </div>
    </div>
</div>
<!-- end of edit modal -->