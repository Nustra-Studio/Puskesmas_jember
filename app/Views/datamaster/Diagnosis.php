<!doctype html>
<html lang="en">

<head>
    <?php
        use App\Models\DiagnosaModel;
        $model = new DiagnosaModel();
        $data = $model->findAll();
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
                <div class="col-12 text-end my-2 me-3"> 
                    <button type="button" 
                    class="btn w-lg btn-success waves-effect waves-light" 
                    data-bs-toggle="modal" 
                    data-bs-target=".bs-example-modal-lg">Tambah <i class="uil uil-plus ms-2"></i> </button>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Diagnosis</h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Diagnosis</th>
                                        <th>Nama  Diagnosis</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php foreach($data as  $index => $item ):?>
                                    <tr>
                                            <td><?=$index +1 ?></td>
                                            <td><?=$item['kode'] ?></td>
                                            <td><?=$item['name'] ?></td>
                                            <td> 
                                                <button
                                                data-bs-toggle="modal" 
                                                data-bs-target=".bs-<?=$item['id'] ?>-edit-modal-lg" 
                                                type="button" class="btn btn-primary waves-effect waves-light" id="">
                                                    <i class="uil uil-pen"></i>
                                                </button>
                                                <button
                                                id="deleteBtn" 
                                                data-id="<?= $item['id'] ?>" 
                                                data-name="<?= $item['name'] ?>"
                                                data-url="diagnosis"
                                                type="button" 
                                                class="deleteBtn btn btn-danger waves-effect waves-light">
                                                    <i class="uil uil-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <div class="modal fade bs-<?=$item['id'] ?>-edit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myLargeModalLabel">Edit Obat</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="mt-2">
                                                                    <form action="<?=site_url("diagnosis/update/{$item['id']}")?>" method="post" enctype="multipart/form-data">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label" for="formrow-email-input">Kode Diagnosis</label>
                                                                                    <input type="text" value="<?=$item['kode'] ?>" name="kode" class="form-control" id="formrow-email-input">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label" for="formrow-email-input">Nama Diagnosis</label>
                                                                                    <input type="text" value="<?=$item['name'] ?>" name="name" class="form-control" id="formrow-email-input">
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

                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
            <?= $this->include('datamaster/addon/diagnosis/ModalCreate') ?>
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