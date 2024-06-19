<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
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

        </div>

        <div class="d-flex">
        <?php
            $name = session()->get('name');
            $id = session()->get('id');
            use App\Models\UserModel;
            $model = new UserModel();
            $foto = $model->where('id',$id)->first();
            $foto = $foto['foto']; 
            $url = "/uploads/$foto";
        ?>
       
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?php echo base_url($url); ?>"
                        alt="Header Avatar">
                       
                    <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"><?= $name ?></span>
                    <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="<?php echo base_url('/auth/logout'); ?>"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle"><?= lang('Files.Sign out') ?></span></a>
                </div>
            </div>
        </div>
    </div>
</header>
