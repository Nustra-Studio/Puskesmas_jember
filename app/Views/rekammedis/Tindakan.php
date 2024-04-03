<!doctype html>
<html lang="en">

<head>
    <?php
        use App\Models\RekamTindakan;
        use App\Models\TindakanModel;
        $model = new RekamTindakan();
        $tindakan = new TindakanModel();
        $data = $model->where('id_history',$id_perserta)->findAll();
        $tindakan = $tindakan->findAll();
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
                    <div class="container-fluid my-4">
                    <form action="<?=site_url('rekammedis/core/tindakan')?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="a">Tindakan</label>
                                            <div class="input-group mb-3" id="a">
                                                <select type="text" class="form-select search" id="tindakan" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                        <?php foreach($tindakan as $unit): ?>
                                                            <option name="hai" value="<?=$unit['kode'] ?>"><?=$unit['name'] ?></option>
                                                        <?php endforeach; ?>
                                                </select>
                                                <input type="hidden" name="tindakan" id="dtindakan">
                                                <input type="hidden" name="id_history" value="<?=$id_perserta ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="a">Kode Tindakan</label>
                                            <div class="input-group mb-3" id="a">
                                                <input type="text" class="form-control " id="dkode" name="kode" aria-label="Recipient's username" aria-describedby="button-addon2">

                                                    <button class="btn btn-outline-success" type="button" id="button-addon2">
                                                        <i class="bi bi-search"></i>
                                                        Lihat CD9
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="tarif">Tarif</label>
                                        <input type="text" name="tarif" id="tarif" class="form-control">
                                    </div>
                                </div>
                                <div class="row" style="height: 50px;">
                                    <div class="mb-3">
                                        <label for="Jumlah">Jumlah</label>
                                        <input type="text" name="jumlah" id="Jumlah" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="container-fluid d-flex align-items-end justify-content-center my-3">
                                    <button action="submit" class="btn btn-primary px-5">Tambah</button>
                                </div>
                            </div>
                        </div>
                        </form>
                        <div class="row">
                            <div class="col">
                                <div class="container-fluid px-0">
                                    <div class="table-responsive-sm">
                                        <table id="tindakan" class="table table-bordered border-dark-subtle">
                                            <thead>
                                                <tr>
                                                    <th class="text-center bg-light">No</th>
                                                    <th class="text-center bg-light">Kode Tindakan</th>
                                                    <th class="text-center bg-light">Tindakan</th>
                                                    <th class="text-center bg-light">Jumlah</th>
                                                    <th class="text-center bg-light">Tarif</th>
                                                    <th class="text-center bg-light">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="align-middle" style="height: 50px;">
                                                <tr>
                                                    <?php foreach($data as $index => $item): ?>
                                                        <td class="text-center"><?=$index +1 ?></td>
                                                        <td class="text-center"><?=$item->kode ?></td>
                                                        <td class="text-center"><?=$item->tindakan ?></td>
                                                        <td class="text-center"><?=$item->jumlah ?></td>
                                                        <td class="text-center"><?=$item->tarif ?></td>
                                                        <td class="text-center">
                                                        <button
                                                                    id="deleteBtn" 
                                                                    data-id="<?=$item->id ?>" 
                                                                    data-name="<?=$item->tindakan ?>"
                                                                    data-url="Rtindakan"
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
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const tindakanSelect = $('#tindakan');
                    const kodeInput = $('#dkode');
                    const namaTindakanInput = $('#dtindakan');

                    tindakanSelect.on('select2:select', function (e) {
                        const selectedOption = e.params.data;
                        const namaTindakan = selectedOption.text; // Ambil teks nama tindakan dari opsi yang dipilih
                        const kodeTindakan = selectedOption.id; // Ambil nilai value dari opsi yang dipilih

                        // Setel nilai kode tindakan dan nama tindakan
                        kodeInput.val(kodeTindakan); 
                        namaTindakanInput.val(namaTindakan);
                    });
                });
            </script>

    </body>

</html>