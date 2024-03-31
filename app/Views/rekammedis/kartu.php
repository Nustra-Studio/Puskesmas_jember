<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Kartu/title></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-9">
                <div class="card mx-3">
                    <div class="card-header bg-white">
                    <div class="d-flex align-items-center">
                        <!-- Logo -->
                        <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo" width="50" height="50" class="me-3">
                        <!-- Title and Address -->
                        <div>
                        <h6 class="card-title text-center mb-0">PEMERINTAHAN KABUPATEN JEMBER <br> DINAS KESEHATAN <br> UPT.PUSKESMAS KEMUNINGSARI KIDUL </h6>
                        <p class="card-text">Alamat: Jln.Jambu No. 42 . Kec.Jenggawah, Jember</p>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <h3 style="border-bottom: 1px solid #ccc; display: inline-block;">Kartu Berobat</h3>
                        </div>
                        <div class="text-start">
                            <p>No RM: <span class="mx-1"><?= $data['id_rekammedis'] ?> </span></p>
                            <p>Nama Perserta:  <span class="mx-1"><?= $data['nama'] ?> </span></p>
                            <p>Jenis Kelamin:  <span class="mx-1">Laki-Laki</span></p>
                            <p>Alamat:  <span class="mx-1"><?= $data['alamat'] ?> </span></p>
                            <!-- Tambahkan konten lain di sini -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    window.onload = function() {
        window.print();
    }
    window.onafterprint = function(event) {
        // Kembali ke URL sebelumnya menggunakan window.history
        window.history.back();
    };
</script>
    </body>
    </html>
