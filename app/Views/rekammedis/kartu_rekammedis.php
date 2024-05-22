
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Kartu Rekam Medis></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
            use App\Models\HistoryModel;
            $model = new HistoryModel();
            $id = $data['id'];
            $pasien = $model->Join($id);
            
        ?>
        <!---->
    <div class="container mt-3">
        <div class="row">
            <!-- Pasien -->
            <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Pasien</h4>
                            <div class="row mx-4">
                            <div class="col-lg-12">
                                <div class="mt-2">
                                <?php foreach($pasien as $index=>$item): ?>
                                    <form action="<?=site_url('rekammedis/core/pasien')?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col">
                                                    <div class="mb-3">
                                                        <input type="hidden" name="id" value="<?=$item->history_id ?>">
                                                        <label class="form-label" for="formrow-email-input">Tanggal Daftar</label>
                                                        <input require type="date" name="tanggal_daftar"value="<?=$item->tanggal_daftar ?>" class="form-control" id="formrow-email-input">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-email-input">No RM</label>
                                                        <input require readonly id="disabledInput" type="text" value="<?=$item->id_rekammedis ?>" name="id_rekammedis" class="form-control">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="NoHp">No Hp</label>
                                                            <input type="text" name="no_hp" id="NoHp" value="<?=$item->no_hp ?>" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-email-input">No KTP</label>
                                                        <input require type="text" name="ktp" value="<?=$item->ktp ?>" class="form-control" id="formrow-email-input">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <?php
                                                    $agama = [
                                                        [
                                                        'name'=>'Islam'
                                                        ],
                                                        [
                                                        'name'=>'Kristen'
                                                        ],
                                                        [
                                                        'name'=>'Katolik'
                                                        ],
                                                        [
                                                        'name'=>'Budha'
                                                        ],
                                                        [
                                                        'name'=>'Hindu'
                                                        ],
                                                        [
                                                        'name'=>'Konghucu'
                                                        ],
                                                        
                                                    ]
                                                ?>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="agama">Agama</label>
                                                        <select name="agama" id="agama" class="form-select">
                                                            <?php foreach($agama as $unit): ?>
                                                                <option
                                                                <?=($item->agama ===$unit['name'] ) ? 'selected' : ''?>
                                                                value="<?=$unit['name']?>"><?=$unit['name']?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-email-input">No BPJS</label>
                                                        <input require type="text" value="<?=$item->bpjs ?>" name="bpjs" class="form-control" id="formrow-email-input">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <?php
                                                $darah = [
                                                    [
                                                    'name'=>'A'
                                                    ],
                                                    [
                                                    'name'=>'B'
                                                    ],
                                                    [
                                                    'name'=>'AB'
                                                    ],
                                                    [
                                                    'name'=>'O'
                                                    ],
                                                
                                                    
                                                ]
                                                ?>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="agama">Gol Darah</label>
                                                        <select name="gol_darah" id="agama" class="form-select">
                                                        <?php foreach($darah as $unit): ?>
                                                                <option
                                                                <?=($item->gol_darah ===$unit['name'] ) ? 'selected' : ''?>
                                                                value="<?=$unit['name']?>"><?=$unit['name']?></option>
                                                        <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-email-input">Nama Lengkap</label>
                                                        <input require type="text" value="<?=$item->nama ?>" name="nama" class="form-control" id="formrow-email-input">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="job">Pekerjaan</label>
                                                        <input type="text"value="<?=$item->pekerjaan ?>" name="pekerjaan" id="job" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-email-input">Tanggal Lahir</label>
                                                        <input type="date" value="<?=$item->lahir ?>" name="lahir" id="" class="form-control">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <?php
                                                    $pendidikan = [
                                                        [
                                                            'name'=>'SD'
                                                        ],
                                                        [
                                                            'name'=>'SMP'
                                                        ],
                                                        [
                                                            'name'=>'SMA'
                                                        ],
                                                        [
                                                            'name'=>'Sarjana'
                                                        ],
                                                ];

                                                ?>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="pendidikan">Pendidikan</label>
                                                        <select name="pendidikan" id="pendidikan" class="form-select">
                                                        <?php foreach($pendidikan as $unit): ?>
                                                                <option
                                                                <?=($item->pendidikan ===$unit['name'] ) ? 'selected' : ''?>
                                                                value="<?=$unit['name']?>"><?=$unit['name']?></option>
                                                        <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
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
                                                        <input type="text" value="<?=$item->ayah ?>" name="ayah" id="ayah" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="kelamin">Jenis Kelamin</label>
                                                        <select name="gender" id="kelamin" class="form-select">
                                                            <option <?=($item->gender ==='Pria' ) ? 'selected' : ''?> value="Pria">Pria</option>
                                                            <option <?=($item->gender ==='Wanita' ) ? 'selected' : ''?> value="Wanita">Wanita</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="Ibu">Nama Ibu</label>
                                                        <input type="text" value="<?=$item->ibu ?>" name="ibu" id="Ibu" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="kelamin">Jenis Pasien</label>
                                                        <select name="category" id="kelamin" class="form-select">
                                                            <option value="Kritis">Kritis</option>
                                                            <option value="Normal">Normal</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="orang">Orang Yang Dapat Dihubungi</label>
                                                        <input type="text" value="<?=$item->hubungi ?>" name="hubungi" id="orang" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="kelamin">Cara Bayar</label>
                                                        <select name="payment" id="kelamin" class="form-select">
                                                            <option value="Cash">Cash</option>
                                                            <option value="Transfer">Transfer</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="kelamin">POLI</label>
                                                        <select name="poli" id="kelamin" class="form-select">
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
                                                    <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"><?=$item->alamat ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex flex-wrap gap-3 mt-3">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                                    <button type="reset" class="btn btn-outline-danger waves-effect waves-light w-md">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                            </form>
                                <?php endforeach; ?>
                            </div>
                        </div>
        
                        </div>
            <!-- end Pasien -->
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // window.onload = function() {
    //     window.print();
    // }
    // window.onafterprint = function(event) {
    //     // Kembali ke URL sebelumnya menggunakan window.history
    //     window.history.back();
    };
</script>
    </body>
    </html>
