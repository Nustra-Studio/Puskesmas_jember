<!doctype html>
<html lang="en">

<head>
    <?php
        use App\Models\PasienModel;
        $model = new PasienModel();
        $data = $model->findAll();
        $last = $model->last();
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
                                    <h4 class="card-title">Pasien</h4>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No RM</th>
                                                <th>Jenis Pasien</th>
                                                <th>Nama Pasien</th>
                                                <th>Usia</th>
                                                <th>Alamat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php foreach($data as  $index => $item ):?>
                                            <tr>
                                                    <td><?=$index +1 ?></td>
                                                    <td><?=$item['id_rekammedis'] ?></td>
                                                    <td><?=$item['category'] ?></td>
                                                    <td><?=$item['nama'] ?></td>
                                                    <td><?=$item['usia'] ?></td>
                                                    <td><?=$item['alamat'] ?></td>
                                                    <td> 
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" id="sa-warning">
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

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
        <!--  Large modal example -->
                                    <div class="modal fade bs-example-modal-lg" 
                                            tabindex="-1" role="dialog" 
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Tambah Pasien</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mt-2">
                                                            <form>
                                                            <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="formrow-email-input">No RM</label>
                                                                            <input type="text" value="<?= $last ?>"  disabled class="form-control" id="formrow-email-input">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="formrow-password-input">Jenis Pasien</label>
                                                                            <select id="formrow-password-input" class="form-select" >
                                                                                    <option value="bpjs">BPJS</option>
                                                                                    <option value="">Non BPJS</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-Fullname-input">Nama Pasien</label>
                                                                    <input type="text" class="form-control" id="formrow-Fullname-input" placeholder="Enter your full Name">
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="formrow-email-input">Umur</label>
                                                                            <input type="number" class="form-control" id="formrow-email-input">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="formrow-email-input">Alamat</label>
                                                                            <input type="text" class="form-control" id="formrow-email-input">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex flex-wrap gap-3 mt-3">
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <div class="modal fade bs-example-modal-lg" 
                                            tabindex="-1" role="dialog" 
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Tambah Pasien</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mt-2">
                                                            <form>
                                                            <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="formrow-email-input">No RM</label>
                                                                            <input type="text"  disabled class="form-control" id="formrow-email-input">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="formrow-password-input">Jenis Pasien</label>
                                                                            <select id="formrow-password-input" class="form-select" >
                                                                                    <option value="bpjs">BPJS</option>
                                                                                    <option value="">Non BPJS</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-Fullname-input">Nama Pasien</label>
                                                                    <input type="text" class="form-control" id="formrow-Fullname-input" placeholder="Enter your full Name">
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="formrow-email-input">Umur</label>
                                                                            <input type="number" class="form-control" id="formrow-email-input">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="formrow-email-input">Alamat</label>
                                                                            <input type="text" class="form-control" id="formrow-email-input">
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