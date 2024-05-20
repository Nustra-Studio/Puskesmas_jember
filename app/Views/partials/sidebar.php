
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark d-flex justify-content-center align-items-center">
            <span class="logo-sm text-center">
                <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="" height="60">
            </span>
            <span class="logo-lg text-center">
                <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="" height="60">
            </span>
        </a>

        <a href="/" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?php echo base_url('assets/images/logo-sm.png'); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo base_url('assets/images/logo-light.png'); ?>" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
        <?php
            $jabatan = session()->get('jabatan');
        ?>
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="<?php echo base_url('/'); ?>">
                        <i class="uil-home-alt"></i>
                        <span><?= lang('Files.Dashboard') ?></span>
                    </a>
                </li>
                <?php if($jabatan == "admin"): ?>
                    <li>
                    
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-database"></i>
                            <span>MasterData</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li>
                                <a href="<?php echo base_url('pasien'); ?>">Data Pasien</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('user'); ?>">Data User</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('diagnosis'); ?>">Data Diagnosis</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('tindakan'); ?>">Data Tindakan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('obat'); ?>">Data Obat</a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo base_url('kasus'); ?>">Data kasus</a>
                            </li> -->
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if($jabatan == "admin"||$jabatan == "pendaftran"): ?>
                <li>
                    <a href="<?php echo base_url('pendaftaran'); ?>">
                        <i class="uil-clipboard-notes"></i>
                        <span>Pendaftaran</span>
                    </a>
                </li>
                <?php endif; ?>
                <?php if($jabatan == "rekammedis"): ?>
                <li>
                    <a href="<?php echo base_url('data-rekammedis'); ?>">
                        <i class="uil-clipboard-notes"></i>
                        <span>Data Pendaftar </span>
                    </a>
                </li>
                <?php endif; ?>
                <?php if($jabatan == "admin"||$jabatan == "rekammedis"||$jabatan == "dokter" ): ?>
                <li>
                    <a href="javascript: void(1);" class="has-arrow waves-effect">
                        <i class="uil-heart-medical"></i>
                        <span>Rekam Medis</span>
                    </a>
                    <!-- rekam medis -->
                    <?php
                        $rekam_medis = $RekamMedis ?? "normal";
                        $id = $id_perserta ?? null;
                    ?>
                    <?php if ($rekam_medis !== "normal"): ?>
                        <ul class="sub-menu" aria-expanded="true">
                            <li>
                                <a href="<?= base_url("rekam-pasien?id=$id"); ?>">Data Pasien</a>
                            </li>
                            <li>
                                <a href="<?= base_url("rekam-anamnese?id=$id"); ?>">Anamnese</a>
                            </li>
                            <li>
                                <a href="<?= base_url("rekam-diagnosis?id=$id"); ?>">Diagnosis</a>
                            </li>
                            <li>
                                <a href="<?= base_url("rekam-tindakan?id=$id"); ?>">Tindakan</a>
                            </li>
                            <li>
                                <a href="<?= base_url("rekam-obat?id=$id"); ?>">Obat</a>
                            </li>
                        </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                <li>
                    <a href="javascript: void(1);" class="has-arrow waves-effect">
                        <i class="uil-arrow-growth"></i>
                        <span>Laporan</span>
                    </a>

                        <ul class="sub-menu" aria-expanded="true">
                            <li>
                                <a href="<?= base_url("/laporan/kunjungan"); ?>">Kunjungan</a>
                            </li>
                            <li>
                                <a href="<?= base_url("laporan/penyakit"); ?>">10 Besar Penyakit</a>
                            </li>
                        </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
