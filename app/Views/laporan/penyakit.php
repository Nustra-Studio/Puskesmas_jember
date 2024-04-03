<!doctype html>
<?php
    use App\Models\RekamDiagnosa;
    use App\Models\DiagnosaModel;
    $model = new RekamDiagnosa();
    $diagnosa = new DiagnosaModel();
    $penyakit = $model->findAll();
    $besar = $model->select('jenis_diagnosa, COUNT(*) as total')
                ->groupBy('jenis_diagnosa')
                ->orderBy('total', 'DESC')
                ->limit(10)
                ->findAll();
?>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <title> Laporan Kunjungan | NustraStudio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
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

					<div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Laporan 10 Besar Penyakit</h4>


                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                <div class="card-body">
                                <div data-simplebar style="max-height: 336px;">
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-centered table-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kode</th>
                                                            <th>Penyakit</th>
                                                            <th>jumlah</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach($besar as $index => $item ): ?>
                                                        <?php
                                                            $unit = $diagnosa->where('name',$item->jenis_diagnosa)->first();
                                                        ?>
                                                        <tr>
                                                            <td>  <?= $index+1 ?></td>
                                                            <td><?=$unit['kode'] ?></td>
                                                            <td>  <?= $item->jenis_diagnosa ?></td>
                                                            <td><?= $item->total ?></td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                    
                                                    </tbody>
                                                </table>
                                            </div> <!-- enbd table-responsive-->
                                        </div> <!-- data-sidebar-->
                                    </div>
 <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> <!-- end row-->


                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

<input type="hidden" id="range" value="yearly">
				<?= $this->include('partials/footer') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

		<?= $this->include('partials/right-sidebar') ?>

		<?= $this->include('partials/vendor-scripts') ?>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.js"></script>

        <!-- <script src="assets/js/pages/dashboard.init.js"></script> -->

        <script src="assets/js/app.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var dropdownMenu = document.querySelector('#data-menu');
                var selectedRangeText = document.querySelector('.selected-range');
                var queryString = window.location.search;
                var urlParams = new URLSearchParams(queryString);
                var rangeValue = urlParams.get('range');
                var rangeInput = document.getElementById('range');
                if(rangeValue){
                    rangeInput.value=rangeValue;
                    selectedRangeText.innerHTML = rangeValue + '<i class="mdi mdi-chevron-down ms-1"></i>';
                    call(rangeValue);
                }
                else{
                    var data = rangeInput.value;
                    call(data);
                }
                    dropdownMenu.addEventListener('click', function(e) {
                            e.preventDefault();
                            
                            if (e.target.classList.contains('dropdown-item')) {
                                var selectedRange = e.target.getAttribute('data-range');
                                var selectedText = e.target.innerText;
                                selectedRangeText.innerHTML = rangeValue + '<i class="mdi mdi-chevron-down ms-1"></i>';
                                window.location.href = window.location.pathname + '?range=' + selectedRange;
                                // call(selectedRange);

                            }
                    });
                    function call(data){
                        var url = '/data/kunjungan?range='+data;
                                $.ajax({
                                    url: url,
                                    dataType: 'json',
                                    success: function(response)
                                    {  
                                        chart(response);
                                        console.log(response); 
                                    }
                                });
                    }
                function chart(data) {
                        const visitData = data;
                        const visitDates = Object.keys(visitData);
                        const visitCounts = Object.values(visitData);

                        var options = {
                            chart: {
                                height: 339,
                                type: 'line',
                                stacked: false,
                                toolbar: {
                                    show: false
                                }
                            },
                            stroke: {
                                width: [4], // Hanya satu lebar garis
                                curve: 'smooth'
                            },
                            colors: ['#5b73e8'], // Warna biru untuk garis
                            series: [{
                                name: 'Kunjungan', // Mengubah nama seri menjadi "Kunjungan"
                                type: 'line',
                                data: visitCounts
                            }],
                            fill: {
                                opacity: 1,
                                gradient: {
                                    inverseColors: false,
                                    shade: 'light',
                                    type: "vertical",
                                    opacityFrom: 0.85,
                                    opacityTo: 0.55,
                                    stops: [0, 100, 100, 100]
                                }
                            },
                            xaxis: {
                                type: 'text',
                                categories: visitDates
                            },
                            yaxis: {
                                title: {
                                    text: 'Kunjungan',
                                },
                            },
                            markers: {
                                size: 0
                            },
                            tooltip: {
                                shared: true,
                                intersect: false,
                                y: {
                                    formatter: function(y) {
                                        if (typeof y !== "undefined") {
                                            return y.toFixed(0) + " kunjungan";
                                        }
                                        return y;
                                    }
                                }
                            },
                            grid: {
                                borderColor: '#f1f1f1'
                            }
                        };
                        
                        var charts = new ApexCharts(document.querySelector("#sales-analytics-chart"), options);
                        var chartElement = document.querySelector('.apexcharts-canvas');
                        if (chartElement) {
                            // charts.updateOptions({
                            // // xaxis: {
                            // //     categories: visitDates // Update x-axis categories with new dates
                            // // }
                            // animate:true
                            // });
                            // // charts.updateSeries([{
                            // //     data: visitCounts
                            // // }])
                            console.log(visitDates);
                        } else {
                            // Create chart if it doesn't exist yet
                            charts.render();
                            console.log('Chart rendered');
                        }
                            

                    }
            });
            function rawatjalan(){
                var url = '/data/kunjungan?range=monthly';
                $.ajax({
                    url: url,
                    dataType: 'json',
                    success: function(response)
                    {  
                        const dataBaru = {};
                        for (const key in response) {
                            const bulan = key.split(" ")[1]; // Mengambil nama bulan
                            dataBaru[bulan] = response[key]; // Menyimpan nilai ke bulan yang sesuai
                        }
                        for (const monthName in dataBaru) {
                            const value = dataBaru[monthName];
                            const cellId = `td-${monthName}`; // Construct ID from month name
                            const cell = document.getElementById(cellId); // Get cell element
                            cell.innerHTML = value; // Update cell content with value
                        }
                        console.log(dataBaru);
                    }
                });
            }

        </script>
    </body>

</html>