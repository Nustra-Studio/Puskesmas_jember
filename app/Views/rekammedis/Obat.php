<!doctype html>
<html lang="en">

<head>
    <?php
        use App\Models\RekamObat;
        use App\Models\ObatModel;
        $model = new RekamObat();
        $obat = new ObatModel();
        $data = $model->where('id_history',$id_perserta)->findAll();
        $obat = $obat->findAll();
    ?>
    <?= $title_meta ?>
    <style>
        .select2-selection {
        padding-top:4px;
        padding-bottom: 34px; /* Adjust the value as needed */
    }
    .select2-selection__arrow{
        margin-top:8px;
    }
    </style>
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
            <div class="col">
                <div class="card">
                    <div class="container-fluid">
                    <form  action="<?=site_url('rekammedis/core/obat')?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="a">Obat</label>
                                            <div class="input-group mb-3" id="a">
                                                <input type="hidden" name="id_history" value="<?=$id_perserta ?>">
                                                <select type="text" class="form-select search" name="obat" id="icd" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                        <?php foreach($obat as $unit): ?>
                                                            <option value="<?=$unit['name'] ?>"><?=$unit['name'] ?> / <?=$unit['kode'] ?> </option>
                                                        <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="dosis">Dosis</label>
                                            <input type="text" name="dosis" id="dosis" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="dosis">Satuan</label>
                                            <select name="satuan" id="dosis" class="form-select">
                                                <option value="PCS">PCS</option>
                                                <option value="Pack">Pack</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="Tarif">Tarif</label>
                                            <input type="text" name="tarif" id="Tarif" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">      
                                            <label for="Jumlah">Jumlah</label>
                                            <input type="text" name="jumlah" id="Jumlah" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    Catatan
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <textarea name="catatan" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary px-5">Tambah</button>
                            </div>
                        </div>
                    </form>
                        <div class="row mt-2">
                            <div class="col">
                                <div class="container-fluid p-0">
                                    <div class="table-responsive-sm p-0">
                                        <table id="diagnosa" class="table table-bordered border-dark-subtle">
                                            <thead>
                                                <tr>
                                                    <th class="text-center bg-light">No</th>
                                                    <th class="text-center bg-light">Obat</th>
                                                    <th class="text-center bg-light">Dosis</th>
                                                    <th class="text-center bg-light">Satuan</th>
                                                    <th class="text-center bg-light">Tarif</th>
                                                    <th class="text-center bg-light">Harga</th>
                                                    <th class="text-center bg-light">Catatan</th>
                                                    <th class="text-center bg-light">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="align-middle" style="height: 50px;">
                                                <tr>
                                                    <?php foreach($data as $index => $item): ?>
                                                        <td class="text-center"><?=$index +1 ?></td>
                                                        <td class="text-center"><?=$item->obat ?></td>
                                                        <td class="text-center"><?=$item->dosis ?></td>
                                                        <td class="text-center"><?=$item->satuan ?></td>
                                                        <td class="text-center"><?=$item->tarif ?></td>
                                                        <td class="text-center"><?=$item->tarif * $item->jumlah ?></td>
                                                        <td class="text-center"><?=$item->catatan ?></td>
                                                        <td class="text-center">
                                                        <button
                                                                    id="deleteBtn" 
                                                                    data-id="<?=$item->id ?>" 
                                                                    data-name="<?=$item->obat ?>"
                                                                    data-url="Robat"
                                                                    type="button" 
                                                                    class="deleteBtn btn btn-danger waves-effect waves-light">
                                                                        <i class="uil uil-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <?php if (session()->has('success')) : ?>
            showSuccessAlert(<?= json_encode(session('success')) ?>);
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
        <script>
                $(document).ready(function() {
                    $('.search').select2();
                });
            </script>

    </body>

</html>