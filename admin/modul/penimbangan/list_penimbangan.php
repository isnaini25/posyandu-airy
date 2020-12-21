
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
                              <a href="<?php echo $base_url; ?>admin/adminweb.php?modul=tambah_penimbangan"><button class="btn btn-primary">Tambah Penimbangan</button></a>
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