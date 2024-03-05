<div class="modal fade bs-example-modal-lg  modal-dialog-scrollable" 
        tabindex="-1" role="dialog" 
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Pendaftaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
            <div class="row mx-4">
                            <div class="col-lg-12">
                                <div class="mt-2">
                                    <form action="<?=site_url('user')?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-email-input">Tanggal Daftar</label>
                                                        <input require type="date" name="tanggal_lahir" class="form-control" id="formrow-email-input">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-email-input">No RM</label>
                                                        <input require type="text" name="username" class="form-control" id="formrow-email-input">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="NoHp">No Hp</label>
                                                            <input type="text" name="NoHp" id="NoHp" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-email-input">No KTP</label>
                                                        <input require type="text" name="KTP" class="form-control" id="formrow-email-input">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="agama">Agama</label>
                                                        <select name="agama" id="agama" class="form-select">
                                                            <option value="Islam">islam</option>
                                                            <option value="kristen">kristen</option>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-email-input">No BPJS</label>
                                                        <input require type="text" name="KTP" class="form-control" id="formrow-email-input">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="agama">Gol Darah</label>
                                                        <select name="agama" id="agama" class="form-select">
                                                            <option value="A">A</option>
                                                            <option value="O">O</option>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-email-input">Nama Lengkap</label>
                                                        <input require type="text" name="KTP" class="form-control" id="formrow-email-input">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="job">Pekerjaan</label>
                                                        <input type="text" name="job" id="job" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-email-input">Tanggal Lahir</label>
                                                        <input type="date" name="" id="" class="form-control">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="pendidikan">Pendidikan</label>
                                                        <select name="pendidikan" id="pendidikan" class="form-select">
                                                            <option value="S1">S1</option>
                                                            <option value="S2">S2</option>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        Usia
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="th">Tahun</label>
                                                                <input type="text" name="th" id="th" class="form-control">
                                                            </div>
                                                            <div class="col">
                                                                <label for="th">Bulan</label>
                                                                <input type="text" name="th" id="th" class="form-control">
                                                            </div>
                                                            <div class="col">
                                                                <label for="th">Hari</label>
                                                                <input type="text" name="th" id="th" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="ayah">Nama Ayah</label>
                                                        <input type="text" name="" id="ayah" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="kelamin">Jenis Kelamin</label>
                                                        <select name="" id="kelamin" class="form-select">
                                                            <option value="Pria">Pria</option>
                                                            <option value="Wanita">Wanita</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="Ibu">Nama Ibu</label>
                                                        <input type="text" name="Ibu" id="Ibu" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="kelamin">Jenis Pasien</label>
                                                        <select name="" id="kelamin" class="form-select">
                                                            <option value="Kritis">Kritis</option>
                                                            <option value="Normal">Normal</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="orang">Orang Yang Dapat Dihubungi</label>
                                                        <input type="text" name="orang" id="orang" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="kelamin">Cara Bayar</label>
                                                        <select name="" id="kelamin" class="form-select">
                                                            <option value="Cash">Cash</option>
                                                            <option value="Transfer">Transfer</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="kelamin">POLI</label>
                                                        <select name="" id="kelamin" class="form-select">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea name="" id="alamat" cols="30" rows="5" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex flex-wrap gap-3 mt-3">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                                    <button type="submit" class="btn btn-secondary waves-effect wav   es-light w-md">Batal</button>
                                                    <button type="reset" class="btn btn-outline-danger waves-effect waves-light w-md">Reset</button>
                                                    <button type="submit" class="btn btn-outline-success">Cetak KIB</button>
                                                </div>
                                            </div>
                                        </div>
                            </form>
                            </div>
                        </div>
        
                        </div>
            </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
