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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <div>
                                            <h4 class="card-title">Modals Examples</h4>
                                            <p class="card-title-desc">Modals are streamlined, but flexible
                                                dialog prompts powered by JavaScript. They support a number of use cases
                                                from user notification to completely custom content and feature a
                                                handful of helpful subcomponents, sizes, and more.</p>

                                            <div class="modal bs-example-modal" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Modal Title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>One fine body&hellip;</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-lg-6 mt-4">
                                                <h4 class="card-title">Default Modal</h4>
                                                <p class="card-title-desc">Toggle a working modal demo by clicking the button below. It will slide down and fade in from the top of the page.</p>

                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Standard modal</button>
                                                <!-- sample modal content -->
                                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="myModalLabel">Modal Heading</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5 class="font-size-16">Overflowing text to show scroll behavior</h5>
                                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                                    Cras justo odio, dapibus ac facilisis in,
                                                                    egestas eget quam. Morbi leo risus, porta ac
                                                                    consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                    Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                                    ullamcorper nulla non metus auctor
                                                                    fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                                    Cras justo odio, dapibus ac facilisis in,
                                                                    egestas eget quam. Morbi leo risus, porta ac
                                                                    consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                    Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                                    ullamcorper nulla non metus auctor
                                                                    fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                                    Cras justo odio, dapibus ac facilisis in,
                                                                    egestas eget quam. Morbi leo risus, porta ac
                                                                    consectetur ac, vestibulum at eros.</p>
                                                                    
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>

                                            <div class="col-lg-6 mt-4">
                                                <h4 class="card-title">Optional Sizes</h4>
                                                <p class="card-title-desc">Modals have three optional sizes, available via modifier classes to be placed on a <code>.modal-dialog</code>.</p>

                                                <div class="d-flex flex-wrap gap-2">
                                                    <!-- Extra Large modal -->
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Extra large modal</button>

                                                    <!-- Large modal -->
                                                    <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Large modal</button>

                                                    <!-- Small modal -->
                                                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm">Small modal</button>
                                                </div>

                                                <!--  Extra Large modal example -->
                                                <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="myExtraLargeModalLabel">Extra large modal</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                                    Cras justo odio, dapibus ac facilisis in,
                                                                    egestas eget quam. Morbi leo risus, porta ac
                                                                    consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                    Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                                    ullamcorper nulla non metus auctor
                                                                    fringilla.</p>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->

                                                <!--  Large modal example -->
                                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                                    Cras justo odio, dapibus ac facilisis in,
                                                                    egestas eget quam. Morbi leo risus, porta ac
                                                                    consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                    Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                                    ullamcorper nulla non metus auctor
                                                                    fringilla.</p>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->

                                                <!--  Small modal example -->
                                                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="mySmallModalLabel">Small modal</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                                    Cras justo odio, dapibus ac facilisis in,
                                                                    egestas eget quam. Morbi leo risus, porta ac
                                                                    consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                    Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                                    ullamcorper nulla non metus auctor
                                                                    fringilla.</p>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                        </div>
                                        
                                        <div class="row mt-4">
                                            <div class="col-lg-6">
                                                <div class="mt-4">
                                                    <h5 class="card-title">Vertically Centered</h5>
                                                    <p class="card-title-desc">Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center the modal.</p>
                                                </div>


                                                <div class="d-flex flex-wrap gap-3">
                                                    <!-- Center Modal -->
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Center Modal</button>
                                                </div>

                                                <!-- Center Modal example -->
                                                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Center modal</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                                    Cras justo odio, dapibus ac facilisis in,
                                                                    egestas eget quam. Morbi leo risus, porta ac
                                                                    consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                    Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                                    ullamcorper nulla non metus auctor
                                                                    fringilla.</p>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                            <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mt-4">
                                                    <h5 class="card-title">Scrollable modal</h5>
                                                    <p class="card-title-desc">You can also create a scrollable modal that allows scroll the modal body by adding <code>.modal-dialog-scrollable</code> to <code>.modal-dialog</code>.</p>
                                                
                                                    <div class="d-flex flex-wrap gap-3">
                                                        <!-- Scrollable modal -->
                                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalScrollable">
                                                            Scrollable modal
                                                        </button>
                                                    
                                                        <!-- Scrolling long content Modal -->
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                                                            Scrolling Long Content
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- Scrollable modal example-->
                                                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalScrollableTitle">Scrollable Modal</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->

                                                <!-- Scrolling long content Modal example -->
                                                <div class="modal fade" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body" style="min-height: 1500px">
                                                                <p>This is some placeholder content to show the scrolling behavior for modals. Instead of repeating the
                                                                    text the modal, we use an inline style set a minimum height, thereby extending the length of the
                                                                    overall modal and demonstrating the overflow scrolling. When content becomes longer than the height
                                                                    of the viewport, scrolling will move the modal as needed.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row mt-4">
                                            <div class="col-lg-6">
                                                <div class="mt-4">
                                                    <h5 class="card-title">Static backdrop</h5>
                                                    <p class="card-title-desc">When backdrop is set to static, the modal will not close when clicking outside it. Click the button below to try it.</p>
                                                
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                        Static backdrop modal
                                                    </button>

                                                    <!-- staticBackdrop Modal example -->
                                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>I will not close if you click outside me. Don't even try to press escape key.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Understood</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-lg-6">
                                                <div class="mt-4">
                                                    <h4 class="card-title">Toggle between modals</h4>
                                                    <p class="card-title-desc">Toggle between multiple modals with some clever placement of the <code>data-bs-target</code> and <code>data-bs-toggle</code> attributes.</p>
                                                    
                                                    <div>
                                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal">Open First Modal</button>
                                                                    
                                                        <!-- First modal dialog example -->
                                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Modal 1</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Show a second modal and hide this one with the button below.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <!-- Toogle to second dialog -->
                                                                        <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Open Second Modal</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Second modal dialog example -->
                                                        <div class="modal fade" id="secondmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Modal 2</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Hide this modal and show the first with the button below.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <!-- Toogle to first dialog, `data-bs-dismiss` attribute can be omitted - clicking on link will close dialog anyway -->
                                                                        <button class="btn btn-primary" data-bs-target="#firstmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Back to First</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row mt-4">
                                            <div class="col-lg-6">
                                                <div class="mt-4">
                                                    <h5 class="card-title">Varying Modal Content</h5>
                                                    <p class="card-title-desc">Use <code>event.relatedTarget</code> and HTML <code>data-bs-*</code> attributes</a> to
                                                        vary the contents of the modal depending on which button was clicked.</p>
                                                
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                            data-bs-whatever="@mdo">Open modal for @mdo</button>
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                            data-bs-whatever="@fat">Open modal for @fat</button>
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                            data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>
                                                    </div>
                                                
                                                    <!-- Varying Modal Content example -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                                            <input type="text" class="form-control" id="recipient-name">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text" class="col-form-label">Message:</label>
                                                                            <textarea class="form-control" id="message-text"></textarea>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Send message</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-lg-6">
                                                <div class="mt-4">
                                                    <h4 class="card-title">Fullscreen Modal</h4>
                                                    <p class="card-title-desc">Another override is the option to pop up a modal that covers the user viewport, available via modifier classes that are placed on a <code>.modal-dialog</code>.</p>
                                                    
                                                    <div>
                                                        <div class="d-flex flex-wrap gap-2">
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">
                                                                Full screen
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenSm">
                                                                Full screen below sm
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenMd">
                                                                Full screen below md
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenLg">
                                                                Full screen below lg
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXl">
                                                                Full screen below xl
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXxl">
                                                                Full screen below xxl
                                                            </button>
                                                        </div>

                                                        <!-- Full screen Content -->
                                                        <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-fullscreen">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Full screen modal</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                        <p>Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Vivamus sagittis lacus vel
                                                                            augue laoreet rutrum faucibus dolor auctor.</p>
                                                                        <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                            Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Donec sed odio dui. Donec
                                                                            ullamcorper nulla non metus auctor
                                                                            fringilla.</p>
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                        <p>Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Vivamus sagittis lacus vel
                                                                            augue laoreet rutrum faucibus dolor auctor.</p>
                                                                        <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                            Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Donec sed odio dui. Donec
                                                                            ullamcorper nulla non metus auctor
                                                                            fringilla.</p>
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Full screen below Sm Content -->
                                                        <div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1" aria-labelledby="exampleModalFullscreenSmLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-fullscreen-sm-down">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title h4" id="exampleModalFullscreenSmLabel">Full screen below sm</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                        <p>Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Vivamus sagittis lacus vel
                                                                            augue laoreet rutrum faucibus dolor auctor.</p>
                                                                        <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                            Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Donec sed odio dui. Donec
                                                                            ullamcorper nulla non metus auctor
                                                                            fringilla.</p>
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                        <p>Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Vivamus sagittis lacus vel
                                                                            augue laoreet rutrum faucibus dolor auctor.</p>
                                                                        <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                            Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Donec sed odio dui. Donec
                                                                            ullamcorper nulla non metus auctor
                                                                            fringilla.</p>
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Full screen below Md Content -->
                                                        <div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1" aria-labelledby="exampleModalFullscreenMdLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-fullscreen-md-down">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title h4" id="exampleModalFullscreenMdLabel">Full screen below md</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                        <p>Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Vivamus sagittis lacus vel
                                                                            augue laoreet rutrum faucibus dolor auctor.</p>
                                                                        <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                            Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Donec sed odio dui. Donec
                                                                            ullamcorper nulla non metus auctor
                                                                            fringilla.</p>
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                        <p>Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Vivamus sagittis lacus vel
                                                                            augue laoreet rutrum faucibus dolor auctor.</p>
                                                                        <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                            Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Donec sed odio dui. Donec
                                                                            ullamcorper nulla non metus auctor
                                                                            fringilla.</p>
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Full screen below Lg Content -->
                                                        <div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1" aria-labelledby="exampleModalFullscreenLgLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-fullscreen-lg-down">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title h4" id="exampleModalFullscreenLgLabel">Full screen below lg</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                        <p>Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Vivamus sagittis lacus vel
                                                                            augue laoreet rutrum faucibus dolor auctor.</p>
                                                                        <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                            Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Donec sed odio dui. Donec
                                                                            ullamcorper nulla non metus auctor
                                                                            fringilla.</p>
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                        <p>Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Vivamus sagittis lacus vel
                                                                            augue laoreet rutrum faucibus dolor auctor.</p>
                                                                        <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                            Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Donec sed odio dui. Donec
                                                                            ullamcorper nulla non metus auctor
                                                                            fringilla.</p>
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Full screen below Xl Content -->
                                                        <div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1" aria-labelledby="exampleModalFullscreenXlLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-fullscreen-xl-down">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title h4" id="exampleModalFullscreenXlLabel">Full screen below xl</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                        <p>Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Vivamus sagittis lacus vel
                                                                            augue laoreet rutrum faucibus dolor auctor.</p>
                                                                        <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                            Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Donec sed odio dui. Donec
                                                                            ullamcorper nulla non metus auctor
                                                                            fringilla.</p>
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                        <p>Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Vivamus sagittis lacus vel
                                                                            augue laoreet rutrum faucibus dolor auctor.</p>
                                                                        <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                            Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Donec sed odio dui. Donec
                                                                            ullamcorper nulla non metus auctor
                                                                            fringilla.</p>
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Full screen below Xxl Content -->
                                                        <div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1"
                                                            aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-fullscreen-xxl-down">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title h4" id="exampleModalFullscreenXxlLabel">Full screen below xxl</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                        <p>Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Vivamus sagittis lacus vel
                                                                            augue laoreet rutrum faucibus dolor auctor.</p>
                                                                        <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                            Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Donec sed odio dui. Donec
                                                                            ullamcorper nulla non metus auctor
                                                                            fringilla.</p>
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                        <p>Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Vivamus sagittis lacus vel
                                                                            augue laoreet rutrum faucibus dolor auctor.</p>
                                                                        <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                            Praesent commodo cursus magna, vel scelerisque
                                                                            nisl consectetur et. Donec sed odio dui. Donec
                                                                            ullamcorper nulla non metus auctor
                                                                            fringilla.</p>
                                                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                                                            Cras justo odio, dapibus ac facilisis in,
                                                                            egestas eget quam. Morbi leo risus, porta ac
                                                                            consectetur ac, vestibulum at eros.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- end row -->

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

<script src="assets/js/app.js"></script>

</body>

</html>