
        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

                <div class="row page-titles mx-0">
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                        </a>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">

                                <table class="table table-hover">

                                    <tr>
                                        <th>Usia Perminggu</th>
                                        <th>TB Lahir</th>
                                        <th>BB Lahir</th>
                                    </tr>
                                    <?php 
                                    include "../lib/config.php";
                                    include "../lib/koneksi.php";
                                    $id=$_GET['id_balita'];
                                    $kueribal = mysqli_query($koneksi, "SELECT * FROM tbl_penimbangan WHERE kode_balita='$id'");

                                    while ($bal=mysqli_fetch_array($kueribal)) {

                                       ?>
                                       <tr>
                                        <td><?php echo $bal['usiaPerminggu']; ?></td>
                                        <td><?php echo $bal['tinggiBadan']; ?> cm</td>
                                        <td><?php echo $bal['beratBadan']; ?> kg</td>
                                    </tr>
                                <?php  } ?>
                            </table>



                            <div class="box-footer">
                              <a href="<?php echo $base_url; ?>admin/adminweb.php?modul=tambah_penimbangan&kode_balita=<?php echo $id ?>"><button class="btn btn-primary">Tambah Penimbangan</button></a>
                          </div>

                          <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body pb-0 d-flex justify-content-between">
                                                <div>

                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <div class="chart-wrapper">
                                                <canvas id="chart_widget_2"></canvas>
                                            </div>

                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="w-100 mr-2">
                                                        <center>    <h6>Tinggi Badan </h6></center>
                                                        <div class="progress" style="height: 6px">
                                                           <!--  <div class="progress-bar bg-danger" style="width: 40%"></div> -->
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="chart-wrapper">
                                                <canvas id="chart_widget_3"></canvas>
                                            </div>

                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                                        <div class="ml-2 w-100">
                                                        <center><h6>Berat Badan </h6></center>
                                                        <div class="progress" style="height: 6px">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
        <!--**********************************
            Content body end
            ***********************************-->
            <?php   
                                            $id=$_GET['id_balita'];
                                            $tb=array();
                                            $bb=array();
                                            $yearNow =  date("Y");

                                            $kueribal = mysqli_query($koneksi, "SELECT   * FROM tbl_penimbangan WHERE  kode_balita = $id AND YEAR(tanggal_penimbangan)='$yearNow' GROUP BY MONTH(tanggal_penimbangan)");
                                            //diambil berdasarkan tahun, lalu di grup kn brdasarkn bulan
                                             while ($bal=mysqli_fetch_array($kueribal)) {
                                             array_push($tb,$bal['tinggiBadan']);
                                             //array push untuk mindahin data dari lokal ke global
                                             array_push($bb,$bal['beratBadan']);


                                             }


                                            ?>
            <script src="./asset/plugins/chart.js/Chart.bundle.min.js"></script>
            <script type="text/javascript">
             let ctx = document.getElementById("chart_widget_2");
             ctx.height = 280;
             new Chart(ctx, {

                type: 'line',
                data: {
                    labels: ["januari","februari","maret","april","mei","juni","juli","agustus","september","oktober","november","desember"],
                    type: 'line',
                    defaultFontFamily: 'Montserrat',
                    datasets: [{
                        data: [<?=$tb[0]??0?>,<?=$tb[1]??0?>,<?=$tb[2]??0?>,<?=$tb[3]??0?>,<?=$tb[4]??0?>,<?=$tb[5]??0?>,<?=$tb[6]??0?>,<?=$tb[7]??0?>,<?=$tb[8]??0?>,<?=$tb[9]??0?>,<?=$tb[10]??0?>,<?=$tb[11]??0?>],
                        //memunculkn tb array 0 ?? check untuk data null, klo ada datta nmpil klo tidak ada maka 0
                        label: "Tinggi Badan",
                        backgroundColor: '#847DFA',
                        borderColor: '#847DFA',
                        borderWidth: 0.5,
                        pointStyle: 'circle',
                        pointRadius: 5,
                        pointBorderColor: 'transparent',
                        pointBackgroundColor: '#847DFA',
                    }]
                },
                options: {
                    responsive: !0,
                    maintainAspectRatio: false,
                    tooltips: {
                        mode: 'index',
                        titleFontSize: 12,
                        titleFontColor: '#000',
                        bodyFontColor: '#000',
                        backgroundColor: '#fff',
                        titleFontFamily: 'Montserrat',
                        bodyFontFamily: 'Montserrat',
                        cornerRadius: 3,
                        intersect: false,
                    },
                    legend: {
                        display: false,
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            fontFamily: 'Montserrat',
                        },


                    },
                    scales: {
                        xAxes: [{
                            display: false,
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            scaleLabel: {
                                display: false,
                                labelString: 'Month'
                            }
                        }],
                        yAxes: [{
                            display: false,
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Value'
                            }
                        }]
                    },
                    title: {
                        display: false,
                    }
                }
            });
             let ctx2 = document.getElementById("chart_widget_3");
             ctx2.height = 280;
             new Chart(ctx2, {

                type: 'line',
                data: {
                    labels: ["januari","februari","maret","april","mei","juni","juli","agustus","september","oktober","november","desember"],
                    type: 'line',
                    defaultFontFamily: 'Montserrat',
                    datasets: [{
                        label: "Berat Badan",
                        data: [<?=$bb[0]??0?>,<?=$bb[1]??0?>,<?=$bb[2]??0?>,<?=$bb[3]??0?>,<?=$bb[4]??0?>,<?=$bb[5]??0?>,<?=$bb[6]??0?>,<?=$bb[7]??0?>,<?=$bb[8]??0?>,<?=$bb[9]??0?>,<?=$bb[10]??0?>,<?=$bb[11]??0?>],
                        backgroundColor: '#F196B0',
                        borderColor: '#F196B0',
                        borderWidth: 0.5,
                        pointStyle: 'circle',
                        pointRadius: 5,
                        pointBorderColor: 'transparent',
                        pointBackgroundColor: '#F196B0',
                    }]
                },
                options: {
                    responsive: !0,
                    maintainAspectRatio: false,
                    tooltips: {
                        mode: 'index',
                        titleFontSize: 12,
                        titleFontColor: '#000',
                        bodyFontColor: '#000',
                        backgroundColor: '#fff',
                        titleFontFamily: 'Montserrat',
                        bodyFontFamily: 'Montserrat',
                        cornerRadius: 3,
                        intersect: false,
                    },
                    legend: {
                        display: false,
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            fontFamily: 'Montserrat',
                        },


                    },
                    scales: {
                        xAxes: [{
                            display: false,
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            scaleLabel: {
                                display: false,
                                labelString: 'Month'
                            }
                        }],
                        yAxes: [{
                            display: false,
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Value'
                            }
                        }]
                    },
                    title: {
                        display: false,
                    }
                }
            });
        </script>