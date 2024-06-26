<div class="modal fade bs-example-modal-lg" 
        tabindex="-1" role="dialog" 
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Tambah User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-2">
                            <form action="<?=site_url('user')?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-email-input">Nama Lengkap</label>
                                                <input require type="text" name="name"  class="form-control" id="formrow-email-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="formrow-email-input">Tanggal Lahir</label>
                                                    <input require type="date" name="tanggal_lahir" class="form-control" id="formrow-email-input">
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="formrow-password-input">Jenis Kelamin</label>
                                                    <select id="formrow-password-input" name="gender" class="form-select" >
                                                            <option value="laki">Laki-Laki</option>
                                                            <option value="perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                                    <label class="form-label" for="formrow-email-input">Jabatan</label>
                                                    <select id="formrow-password-input" name="jabatan" class="form-select" >
                                                            <option value="admin">Admin</option>
                                                            <option value="pendaftran">Petugas Pendaftaran</option>
                                                            <option value="rekammedis">Petugas RekamMedis</option>
                                                            <option value="dokter">Dokter</option>

                                                    </select>
                                                </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="formrow-email-input">Username</label>
                                                    <input require type="text" name="username" class="form-control" id="formrow-email-input">
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="formrow-email-input">Password</label>
                                                    <input require type="text" name="password" class="form-control" id="formrow-email-input">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="alamat">Alamat</label>
                                                    <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="formFileLg">Gambar</label>
                                                    <input require name="file" class="form-control " id="formFileLg" type="file">
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
