<!doctype html>
<html lang="en">

<head>
    <?php
        use App\Models\HistoryModel;
        $model = new HistoryModel();
        $data = $model->JoinAll();
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
            <div class="col">
                <div class="card">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="a">Tindakan</label>
                                            <div class="input-group mb-3" id="a">
                                                <input type="text" class="form-control" id="icd" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <button class="btn btn-outline-primary" type="button" id="button-addon2">
                                                        <i class="bi bi-search"></i>
                                                        Cari
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="dosis">Dosis</label>
                                            <input type="text" name="" id="dosis" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="dosis">Satuan</label>
                                            <select name="" id="dosis" class="form-select">
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
                                            <input type="text" name="" id="Tarif" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">      
                                            <label for="Jumlah">Jumlah</label>
                                            <input type="text" name="" id="Jumlah" class="form-control">
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
                                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <button class="btn btn-primary px-5">Tambah</button>
                            </div>
                        </div>
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
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">1236</td>
                                                    <td class="text-center">Batuk</td>
                                                    <td class="text-center">Kritis</td>
                                                    <td class="text-center">Sedang</td>
                                                    <td class="text-center">Sedang</td>
                                                    <td class="text-center">Sedang</td>
                                                    <td class="text-center">
                                                        <div class="row p-0 gap-0 d-flex justify-content-center">
                                                            <div class="col m-0 p-0">
                                                                <button class="btn btn-primary m-0"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                            </div>
                                                            <div class="col m-0 p-0">
                                                                <button class="btn btn-danger m-0" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </td>
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