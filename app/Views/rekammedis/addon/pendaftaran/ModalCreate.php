<?php
date_default_timezone_set('Asia/Jakarta');
use App\Models\PasienModel;
$model = new PasienModel();
$last = $model->last();
$date = date('Y-m-d H:i:s');
?>
<div class="modal fade bs-example-modal-lg modal-pendaftaran-create modal-dialog-scrollable" 
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
                            <form action="<?= site_url('pendaftaran') ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                        <input required type="hidden" value="<?=$date?>" name="tanggal_daftar" class="form-control input-tanggal_daftar">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-id-rekammedis-input">No RM</label>
                                            <input required type="text" value="<?= $last ?>" name="id_rekammedis" class="form-control input-id_rekammedis">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="NoHp">No Hp</label>
                                            <input type="number" name="no_hp" class="form-control input-no_hp">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-ktp-input">No KTP</label>
                                            <input required type="text" name="ktp" class="form-control input-ktp">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                                        $agama = [
                                            ['name' => 'Islam'],
                                            ['name' => 'Kristen'],
                                            ['name' => 'Katolik'],
                                            ['name' => 'Budha'],
                                            ['name' => 'Hindu'],
                                            ['name' => 'Konghucu'],
                                        ];
                                        ?>
                                        <div class="mb-3">
                                            <label class="form-label" for="agama">Agama</label>
                                            <select name="agama" class="form-select input-agama">
                                                <?php foreach ($agama as $unit): ?>
                                                    <option value="<?= $unit['name'] ?>"><?= $unit['name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-bpjs-input">No BPJS</label>
                                            <input required type="text" name="bpjs" class="form-control input-bpjs">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="gol_darah">Gol Darah</label>
                                            <select name="gol_darah" class="form-select input-gol_darah">
                                                <option value="A">A</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-nama-input">Nama Lengkap</label>
                                            <input required type="text" name="nama" class="form-control input-nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="job">Pekerjaan</label>
                                            <input type="text" name="pekerjaan" class="form-control input-pekerjaan">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-lahir-input">Tanggal Lahir</label>
                                            <input type="date" name="lahir" class="form-control input-lahir">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="pendidikan">Pendidikan</label>
                                            <select name="pendidikan" class="form-select input-pendidikan">
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="ayah">Nama Ayah</label>
                                            <input type="text" name="ayah" class="form-control input-ayah">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="kelamin">Jenis Kelamin</label>
                                            <select name="gender" class="form-select input-gender">
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="Ibu">Nama Ibu</label>
                                            <input type="text" name="ibu" class="form-control input-ibu">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="kelamin">Jenis Pasien</label>
                                            <select name="category" class="form-select input-category">
                                                <option value="Kritis">Kritis</option>
                                                <option value="Normal">Normal</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="orang">Orang Yang Dapat Dihubungi</label>
                                            <input type="text" name="hubungi" class="form-control input-hubungi">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="kelamin">Cara Bayar</label>
                                            <select name="payment" class="form-select input-payment">
                                                <option value="Cash">Cash</option>
                                                <option value="Transfer">Transfer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="kelamin">POLI</label>
                                            <select name="poli" class="form-select input-poli">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat" class="form-control input-alamat">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex flex-wrap gap-3 mt-3">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                            <button type="button" data-bs-dismiss="modal" class="btn btn-secondary waves-effect waves-light w-md">Batal</button>
                                            <button type="reset" class="btn btn-outline-danger waves-effect waves-light w-md">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
document.addEventListener('DOMContentLoaded', function() {
});
</script>
