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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Rekam Medis</h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Tanggal</th>
                                            <th class="text-center">Poli</th>
                                            <th class="text-center">No RM</th>
                                            <th class="text-center">Nama Pasien</th>
                                            <th class="text-center">Usia</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Jenis Pasien</th>
                                            <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php foreach($data as  $index => $item ):?>
                                    
                                    <tr>
                                            <td class="text-center"><?= $index+1 ?></td>
                                            <td class="text-center"><?= $item->tanggal_daftar  ?></td>
                                            <td class="text-center"><?= $item->poli  ?></td>
                                            <td class="text-center"><?= $item->id_rekammedis  ?></td>
                                            <td class="text-center"><?= $item->nama  ?></td>
                                            <td class="text-center"><?= $item->usia  ?></td>
                                            <td class="text-center"><?= $item->alamat  ?></td>
                                            <td class="text-center"><?= $item->category  ?></td>
                                            <?php
                                                $id = $item->id_rekammedis;
                                                $ids = $item->history_id;
                                                $id_history = $item->id;
                                            ?>
                                            <td> 
                                                <a
                                                href="<?= base_url("cetakRM?id=$id&history=$ids"); ?>" 
                                                    class="btn btn-success waves-effect waves-light" id="">
                                                    <i class="uil uil-print"></i>
                                                </a>
                                                <a
                                                href="<?= base_url("rekammedis?id=$ids"); ?>" 
                                                    class="btn btn-primary waves-effect waves-light" id="">
                                                    <i class="uil uil-pen"></i>
                                                </a>
                                                <button
                                                id="deleteBtn" 
                                                data-id="<?= $item->id ?>" 
                                                data-name="<?= $item->nama ?>"
                                                data-url="pendaftaran"
                                                type="button" 
                                                class="deleteBtn btn btn-danger waves-effect waves-light">
                                                    <i class="uil uil-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

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