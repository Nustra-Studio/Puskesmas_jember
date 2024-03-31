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
                    <!-- INfo Section -->
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col p-0">
                                <div class="row">
                                    <div class="col px-3">
                                        <div class="mb-3">
                                            <label for="diagnosatxt">Diagnosa</label>
                                            <textarea name="" id="diagnosatxt" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 d-flex justify-content-end">
                                        <button class="btn btn-primary px-5 shadow">Tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="kasus">Jenis Kasus</label>
                                        <select id="Kasus" name="Kasus" class="form-select">
                                            <option value="kritis">kritis</option>
                                            <option value="parah">parah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="kasus">Jenis Diagnosa</label>
                                        <select id="Kasus" name="Kasus" class="form-select">
                                            <option value="kritis">kritis</option>
                                            <option value="parah">parah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="a">Kode ICD</label>
                                    <div class="input-group mb-3" id="a">
                                        <input type="text" class="form-control" id="icd" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                            <i class="bi bi-search"></i>
                                            Kode ICD
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="container-fluid p-0">
                                    <div class="table-responsive-sm p-0">
                                        <table id="diagnosa" class="table table-bordered border-dark-subtle">
                                            <thead>
                                                <tr>
                                                    <th class="text-center bg-light">No</th>
                                                    <th class="text-center bg-light">Kode ICD</th>
                                                    <th class="text-center bg-light">Diagnosa</th>
                                                    <th class="text-center bg-light">Jenis Kasus</th>
                                                    <th class="text-center bg-light">Jenis Diagnosa</th>
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