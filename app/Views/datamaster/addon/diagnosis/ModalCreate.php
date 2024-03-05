<div class="modal fade bs-example-modal-lg" 
        tabindex="-1" role="dialog" 
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Tambah Diagnosis</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-2">
                            <form action="<?=site_url('diagnosis')?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-email-input">Kode Diagnosis</label>
                                                <input require type="text" name="kode"  class="form-control" id="formrow-email-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-email-input">Nama Diagnosis</label>
                                                <input require type="text" name="name"  class="form-control" id="formrow-email-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap gap-3 mt-3">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                        <button type="reset" class="btn btn-outline-danger waves-effect waves-light w-md">Reset</button>
                                    </div>
                        </form>
                    </div>
                </div>

            </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
