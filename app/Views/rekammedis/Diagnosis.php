<!doctype html>
<html lang="en">

<head>
    <?php
        use App\Models\KasusModel;
        use App\Models\DiagnosaModel;
        use App\Models\RekamDiagnosa;
        $model = new RekamDiagnosa();
        $data = $model->where('id_history',$id_perserta)->findAll();
        $kasus = new KasusModel();
        $kasus = $kasus->findAll();
        $Diagnosa = new DiagnosaModel();
        $diagnosa = $Diagnosa->findAll();
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
                <div class="card py-5">
                    <!-- INfo Section -->
                    <div class="container-fluid ">
                    <form action="<?=site_url('rekammedis/core/diagnosa')?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col p-0">
                                <div class="row">
                                    <div class="col px-3">
                                        <div class="mb-3">
                                            <label for="diagnosatxt">Diagnosa</label>
                                            <input type="hidden" value="<?=$id_perserta ?>" name="id_history" >
                                            <textarea name="diagnosa" cols="30" rows="9" id="input-diagnosa" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="kasus">Jenis Kasus</label>
                                        <select id="jenis_kasus" name="jenis_kasus" class="form-select search">
                                                <?php foreach($kasus as $unit): ?>
                                                    <option value="<?=$unit['name'] ?>"><?=$unit['name']?>/<?=$unit['kode']?></option>
                                                <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="kasus">Jenis Diagnosa</label>
                                        <select id="jenis_diagnosa" name="jenis_diagnosa" class="form-select search">
                                        <?php foreach($diagnosa as $unit): ?>
                                                    <option value="<?=$unit['name'] ?>"><?=$unit['name']?>/<?=$unit['kode']?></option>
                                                <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="a">Kode ICD</label>
                                    <div class="input-group mb-3" id="a">
                                        <input type="text" name="kode_icd" class="form-control" id="icd" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="button" id="button-icd">
                                            <i class="bi bi-search"></i>
                                            Kode ICD
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="my-3 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary px-5 shadow">Tambah</button>
                                    </div>
                                </div>
                        </div>
                    </form>
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
                                                    <?php foreach($data as $index => $item): ?>
                                                    <tr>
                                                        <td class="text-center"><?=$index +1 ?></td>
                                                        <td class="text-center"><?=$item->kode_icd ?></td>
                                                        <td class="text-center"><?=$item->diagnosa ?></td>
                                                        <td class="text-center"><?=$item->jenis_kasus ?></td>
                                                        <td class="text-center"><?=$item->jenis_diagnosa ?></td>
                                                        <td class="text-center">
                                                        <button
                                                                    id="deleteBtn" 
                                                                    data-id="<?=$item->id ?>" 
                                                                    data-name="<?=$item->kode_icd ?>"
                                                                    data-url="Rdiagnosa"
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
                function fetchData(name, check) {
                Swal.fire({
                            title: 'Memproses...',
                            text: 'Silakan tunggu.',
                            icon: 'info',
                            showConfirmButton: false
                });
                var id_sheet = "AKfycbz3GQoNbyzNoHL0p9BHOCS8Z_wdvwRk64jfnKEsDQOztdSHNdqbxzYsuIQ8FVts6A";
                var sheet_name = 'ICD10';
                var url = 'https://script.google.com/macros/s/'+ id_sheet +'/exec?sheet='+sheet_name+'&search='+name;
                    $.ajax({
                        url: url,
                        dataType: 'json',
                        success: function(response){
                            if(check == 'input-diagnosa'){
                                var data = response.filter(item => item.CODE === name);
                            }
                            else{
                                var data = response.filter(item => item.STR === name);
                            }
                            mapping(data , check);
                            console.log(response); // Display data based on query
                        }
                    });
                }
                function mapping (datas,check){
                    if(check == 'input-diagnosa'){
                        var data = datas.map(item => item.STR);
                    }
                    else{
                        var data = datas.map(item => item.CODE);
                    }
                    document.getElementById(check).value = data;
                    Swal.close();
                    console.log(data);
                }

                document.getElementById("button-icd").addEventListener("click", function() {
                    var kodeicd = document.getElementById("icd").value;
                    var diagnosa = document.getElementById('input-diagnosa').value;
                    if (kodeicd.trim() === "") {
                        var name = diagnosa;
                        var check = "icd";
                    }
                    else{
                        var name = kodeicd;
                        var check = "input-diagnosa";
                    }
                    
                    fetchData(name , check);
                });
            });
        </script>

    </body>

</html>