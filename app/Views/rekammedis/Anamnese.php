<!doctype html>
<html lang="en">

<head>

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
                    <div class="container-fluid my-5">
                    <?php
                        use App\Models\Anamnese;
                        $data = new Anamnese;
                        $data = $data->where('id_history',$id_perserta)->first();
                    ?>
                    <?php
                    if(!empty($data)){?>
                        <?= $this->include('rekammedis/addon/anamnese/update'); ?>
                    
                    <?php  }else{ ?>
                        <?= $this->include('rekammedis/addon/anamnese/create'); ?>
                    <?php } ?>
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
                $("#button-alergi").click(function(){
                var url = $("#url_alergi").val();
                var select = $("#select_alergi").val();
                var id = $("#id_perserta").val();
                var data = {
                    id:id,
                    alergi:select
                };
                $.ajax({
                        url: url,
                        type: "POST",
                        dataType: "json",
                        contentType: "application/json",
                        data: JSON.stringify(data),
                    success: function(response) {
                        Swal.fire('Insert', 'The record has been Alergi', 'success')
                        .then(function() {
                                location.reload();
                            });
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                        Swal.fire('Error!', 'An error occurred while add the record.', 'error');
                    }
                });
                    
            });

                });
                var checkboxYes = document.getElementById("checkboxYes");
                var checkboxNo = document.getElementById("checkboxNo");
                var myButton = document.getElementById("button-alergi");

                // Menambahkan event listener ke checkbox
                checkboxYes.addEventListener("change", function() {
                    // Jika checkbox 'Yes' dicentang, aktifkan tombol
                    if (this.checked) {
                        myButton.disabled = false;
                    } else {
                        // Jika tidak, nonaktifkan tombol kembali
                        myButton.disabled = true;
                    }
                });
                checkboxNo.addEventListener("change", function() {
                    // Jika checkbox 'Yes' dicentang, aktifkan tombol
                    if (this.checked) {
                        myButton.disabled = true;
                    } else {
                        // Jika tidak, nonaktifkan tombol kembali
                        myButton.disabled = false;
                    }
                });
            </script>
    </body>

</html>