<!doctype html>
<html lang="en">

<head>
    <?php
        use App\Models\HistoryModel;
        $model = new HistoryModel();
        $data = $model->where('status','pending')->JoinAll();
        $processed_ids = [];
        function hitungUsia($tanggalLahir) {
            // Mengubah tanggal lahir menjadi objek DateTime
            $lahir = new DateTime($tanggalLahir);
            $hariIni = new DateTime();
            
            // Menghitung selisih antara tanggal lahir dan tanggal hari ini
            $selisih = $hariIni->diff($lahir);
        
            // Menghasilkan string format tahun, bulan, dan hari
            $usia = $selisih->y . ' tahun ' . $selisih->m . ' bulan ' . $selisih->d . ' hari';
            
            return $usia;
        }
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
                    data-bs-target=".modal-pendaftaran-create">Tambah <i class="uil uil-plus ms-2"></i> </button>
                </div>
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
                                    <!-- <span><?=var_dump($item)?></span> -->
                                    <?php
                                    $id = $item->id;
                                        if (in_array($id, $processed_ids)) {
                                            continue;
                                        }
                                        $processed_ids[] = $id;
                                    ?>
                                    <tr>
                                            <td class="text-center"><?= $index+1 ?></td>
                                            <td class="text-center"><?= $item->tanggal_daftar  ?></td>
                                            <td class="text-center"><?= $item->id  ?></td>
                                            <td class="text-center"><?= $item->id_rekammedis  ?></td>
                                            <td class="text-center"><?= $item->nama  ?></td>
                                            <td class="text-center"><?= hitungUsia($item->lahir) ?></td>
                                            <td class="text-center"><?= $item->alamat  ?></td>
                                            <td class="text-center"><?= $item->category  ?></td>
                                            <?php
                                                $id = $item->id_rekammedis;
                                                $ids = $item->history_id;
                                            ?>
                                            <td> 
                                                <a
                                                href="<?= base_url("cetakkartu?id=$id"); ?>" 
                                                    class="btn btn-success waves-effect waves-light" id="">
                                                    <i class="uil uil-print"></i>
                                                </a>
                                                <button
                                                id="deleteBtn" 
                                                data-id="<?= $item->history_id ?>" 
                                                data-name="<?= $item->nama ?>"
                                                data-url="pendaftaran"
                                                type="button" 
                                                class="deleteBtn btn btn-danger waves-effect waves-light">
                                                    <i class="uil uil-trash-alt"></i>
                                                </button>
                                                <button
                                                data-bs-toggle="modal" 
                                                data-bs-target=".modal-update-pendaftaraan" 
                                                data-idrm=<?=$item->id ?>
                                                type="button" class="btn btn-primary waves-effect waves-light" id="">
                                                    <i class="uil uil-pen"></i>
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
            <?= $this->include('rekammedis/addon/pendaftaran/ModalUpdate') ?>
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
        <script>
            // 
        document.addEventListener('DOMContentLoaded', function() {
                document.addEventListener('blur', function(event) {
                    if (event.target.id === 'formrow-id-rekammedis-input') {
                        var idRekammedis = event.target.value;
                        if (idRekammedis) {
                        fetch('/data/pasien?id_rm=' + idRekammedis)
                            .then(response => response.json())
                            .then(data => {
                                console.log(data);
                                if (data) {
                                    document.querySelector('input[name="ktp"]').value = data.ktp || '';
                                    document.querySelector('input[name="bpjs"]').value = data.bpjs || '';
                                    document.querySelector('input[name="nama"]').value = data.nama || '';
                                    document.querySelector('input[name="lahir"]').value = data.lahir || '';
                                    document.querySelector('select[name="gender"]').value = data.gender || '';
                                    document.querySelector('select[name="category"]').value = data.category || '';
                                    document.querySelector('select[name="payment"]').value = data.payment || '';
                                    document.querySelector('input[name="alamat"]').value = data.alamat || '';
                                    document.querySelector('input[name="no_hp"]').value = data.no_hp || '';
                                    document.querySelector('select[name="agama"]').value = data.agama || '';
                                    document.querySelector('select[name="gol_darah"]').value = data.gol_darah || '';
                                    document.querySelector('input[name="pekerjaan"]').value = data.pekerjaan || '';
                                    document.querySelector('select[name="pendidikan"]').value = data.pendidikan || '';
                                    document.querySelector('input[name="ayah"]').value = data.ayah || '';
                                    document.querySelector('input[name="ibu"]').value = data.ibu || '';
                                    document.querySelector('input[name="hubungi"]').value = data.hubungi || '';
                                    document.querySelector('select[name="poli"]').value = data.poli || '';
                                }
                            })
                            .catch(error => console.error('Error fetching data:', error));
                    }
                }
                    });
                $('.modal-update-pendaftaraan').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Tombol yang memicu modal
                    var idRekammedis = button.data('idrm') // Ekstrak informasi dari atribut data-id
                    // Fetch data dari server
                    fetch('/update-rekammedis?id_rm=' + idRekammedis)
                        .then(response => response.json())
                        .then(data => {
                            // console.log(data);
                            
                            if (data) {
                                document.querySelector('input[name="tanggal_daftar"]').value = data.tanggal_daftar || '';
                                document.querySelector('input[name="id"]').value = data.id || '';
                                document.querySelector('input[name="id_rekammedis"]').value = data.id_rekammedis || '';
                                document.querySelector('input[name="ktp"]').value = data.ktp || '';
                                document.querySelector('input[name="bpjs"]').value = data.bpjs || '';
                                document.querySelector('input[name="nama"]').value = data.nama || '';
                                document.querySelector('input[name="lahir"]').value = data.lahir || '';
                                document.querySelector('select[name="gender"]').value = data.gender || '';
                                document.querySelector('select[name="category"]').value = data.category || '';
                                document.querySelector('select[name="payment"]').value = data.payment || '';
                                document.querySelector('input[name="alamat"]').value = data.alamat || '';
                                document.querySelector('input[name="no_hp"]').value = data.no_hp || '';
                                document.querySelector('select[name="agama"]').value = data.agama || '';
                                document.querySelector('select[name="gol_darah"]').value = data.gol_darah || '';
                                document.querySelector('input[name="pekerjaan"]').value = data.pekerjaan || '';
                                document.querySelector('select[name="pendidikan"]').value = data.pendidikan || '';
                                document.querySelector('input[name="ayah"]').value = data.ayah || '';
                                document.querySelector('input[name="ibu"]').value = data.ibu || '';
                                document.querySelector('input[name="hubungi"]').value = data.hubungi || '';
                                document.querySelector('select[name="poli"]').value = data.poli || '';
                            }
                        })
                        .catch(error => console.error('Error fetching data:', error));
                });
            });    
        </script>
    </body>

</html>