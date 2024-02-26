<!doctype html>
<html lang="en">
    <head>

        <?= $title_meta ?>

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
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton5"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton5">
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title mb-4">Sales Analytics</h4>

                                        <div class="mt-1">
                                            <ul class="list-inline main-chart mb-0">
                                                <li class="list-inline-item chart-border-left me-0 border-0">
                                                    <h3 class="text-primary">$<span data-plugin="counterup">2,371</span><span class="text-muted d-inline-block font-size-15 ms-3">Income</span></h3>
                                                </li>
                                                <li class="list-inline-item chart-border-left me-0">
                                                    <h3><span data-plugin="counterup">258</span><span class="text-muted d-inline-block font-size-15 ms-3">Sales</span>
                                                    </h3>
                                                </li>
                                                <li class="list-inline-item chart-border-left me-0">
                                                    <h3><span data-plugin="counterup">3.6</span>%<span class="text-muted d-inline-block font-size-15 ms-3">Conversation Ratio</span></h3>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="mt-3">
                                            <div id="sales-analytics-chart" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> <!-- end row-->

                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <div class="dropdown">
                                                <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted">All Members<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item" href="#">Locations</a>
                                                    <a class="dropdown-item" href="#">Revenue</a>
                                                    <a class="dropdown-item" href="#">Join Date</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title mb-4">Top Users</h4>

                                        <div data-simplebar style="max-height: 336px;">
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-centered table-nowrap">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 20px;"><img src="assets/images/users/avatar-4.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Glenn Holden</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Nevada</p>
                                                            </td>
                                                            <td><span class="badge bg-soft-danger font-size-12">Cancel</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$250.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/users/avatar-5.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Lolita Hamill</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Texas</p>
                                                            </td>
                                                            <td><span class="badge bg-soft-success font-size-12">Success</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$110.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/users/avatar-6.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Robert Mercer</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                                            </td>
                                                            <td><span class="badge bg-soft-info font-size-12">Active</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$420.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Montana</p>
                                                            </td>
                                                            <td><span class="badge bg-soft-warning font-size-12">Pending</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/users/avatar-8.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Colorado</p>
                                                            </td>
                                                            <td><span class="badge bg-soft-info font-size-12">Active</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/users/avatar-2.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Australia</p>
                                                            </td>
                                                            <td><span class="badge bg-soft-success font-size-12">Success</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/users/avatar-1.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> India</p>
                                                            </td>
                                                            <td><span class="badge bg-soft-danger font-size-12">Cancel</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- enbd table-responsive-->
                                        </div> <!-- data-sidebar-->
                                    </div><!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                            <div class="col-xl-1"></div>
                            <div class="col-xl-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <div class="dropdown">
                                                <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted">All Members<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item" href="#">Locations</a>
                                                    <a class="dropdown-item" href="#">Revenue</a>
                                                    <a class="dropdown-item" href="#">Join Date</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title mb-4">Top Users</h4>

                                        <div data-simplebar style="max-height: 336px;">
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-centered table-nowrap">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 20px;"><img src="assets/images/users/avatar-4.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Glenn Holden</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Nevada</p>
                                                            </td>
                                                            <td><span class="badge bg-soft-danger font-size-12">Cancel</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$250.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/users/avatar-5.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Lolita Hamill</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Texas</p>
                                                            </td>
                                                            <td><span class="badge bg-soft-success font-size-12">Success</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$110.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/users/avatar-6.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Robert Mercer</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                                            </td>
                                                            <td><span class="badge bg-soft-info font-size-12">Active</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$420.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Montana</p>
                                                            </td>
                                                            <td><span class="badge bg-soft-warning font-size-12">Pending</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/users/avatar-8.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Colorado</p>
                                                            </td>
                                                            <td><span class="badge bg-soft-info font-size-12">Active</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/users/avatar-2.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Australia</p>
                                                            </td>
                                                            <td><span class="badge bg-soft-success font-size-12">Success</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/users/avatar-1.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                            <td>
                                                                <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> India</p>
                                                            </td>
                                                            <td><span class="badge bg-soft-danger font-size-12">Cancel</span></td>
                                                            <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- enbd table-responsive-->
                                        </div> <!-- data-sidebar-->
                                    </div><!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


				<?= $this->include('partials/footer') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

		<?= $this->include('partials/right-sidebar') ?>

		<?= $this->include('partials/vendor-scripts') ?>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

</html>