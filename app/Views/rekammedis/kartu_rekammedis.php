
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Kartu Rekam Medis</title>
    <!-- Bootstrap CSS -->
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo base_url('assets/css/icons.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo base_url('assets/css/app.min.css'); ?>" id="app-style" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/libs/select2/css/select2.min.css'); ?>" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
            use App\Models\ObatModel;
            use App\Models\AlergiObat;
            use App\Models\Anamnese;
            // $data_anamnese = new Anamnese;
            // $data_anamnese = $data_anamnese->where('id_history',$id_perserta)->first();
            
        ?>
        <!---->
    <div class="container-fluid">
            <!-- Pasien -->
            <?= $this->include('rekammedis/addon/cetak/pasien'); ?>
            <?= $this->include('rekammedis/addon/cetak/anamnese'); ?>
            <?= $this->include('rekammedis/addon/cetak/diagnosis'); ?>
            <?= $this->include('rekammedis/addon/cetak/tindakan'); ?>
            <?= $this->include('rekammedis/addon/cetak/obat'); ?>
        </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // window.onload = function() {
    //     window.print();
    // }
    // window.onafterprint = function(event) {
    //     // Kembali ke URL sebelumnya menggunakan window.history
    //     window.history.back();
    // };
</script>
    </body>
    </html>
