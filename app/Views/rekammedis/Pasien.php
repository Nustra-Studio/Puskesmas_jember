<!doctype html>
<html lang="en">

<head>
    <?php
        use App\Models\HistoryModel;

        $model = new HistoryModel();
        $id = $id_perserta;
        $data = $model->Join($id);
    ?>
    <?= $title_meta ?>

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

        <?= $this->include('partials/menu') ?>


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <?= $page_title ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Pasien</h4>
                            <div class="row mx-4">
                            <div class="col-lg-12">
                                <div class="mt-2">
                                <?php foreach($data as $index=>$item): ?>
                                    <form action="<?=site_url('rekammedis/core/pasien')?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                        <?php
                                            $tanggal_daftar = strtotime($item->tanggal_daftar);
                                            $tanggal_daftar = date('Y-m-d',$tanggal_daftar);
                                        ?>
                                            <div class="col">
                                                    <div class="mb-3">
                                                        <input type="hidden" name="id" value="<?=$item->history_id ?>">
                                                        <label class="form-label" for="formrow-email-input">Tanggal Daftar</label>
                                                        <input require type="date" name="tanggal_daftar"value="<?=$tanggal_daftar ?>" class="form-control" id="formrow-email-input">
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
                                            </div>
                                            <div class="col-md-12">
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
            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
            <?= $this->include('rekammedis/addon/pendaftaran/ModalCreate') ?>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
<!--  Large modal example -->
        <?= $this->include('partials/footer') ?>
    </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

		<?= $this->include('partials/right-sidebar') ?>

		<?= $this->include('partials/vendor-scripts') ?>
        <script>
        <?php if (session()->has('errors')) : ?>
            showErrorAlert(<?= json_encode(session('errors')) ?>);
        <?php endif ?>
        </script>
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <!-- <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script> -->
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

</html>