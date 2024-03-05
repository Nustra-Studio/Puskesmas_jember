<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?php echo base_url('assets/images/logo-sm.png'); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo base_url('assets/images/logo-dark.png'); ?>" alt="" height="20">
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
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="<?php echo base_url('/'); ?>">
                        <i class="uil-home-alt"></i>
                        <span><?= lang('Files.Dashboard') ?></span>
                    </a>
                </li>

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
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('pendaftaran'); ?>">
                        <i class="uil-clipboard-notes"></i>
                        <span>Pendaftaran</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(1);" class="has-arrow waves-effect">
                        <i class="uil-heart-medical"></i>
                        <span>Rekam Medis</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="<?php echo base_url('rekam-pasien'); ?>">Data Pasien</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('rekam-user'); ?>">Anamnese</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('rekam-diagnosis'); ?>">Diagnosis</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('rekam-tindakan'); ?>">Tindakan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('rekam-obat'); ?>">Obat</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
