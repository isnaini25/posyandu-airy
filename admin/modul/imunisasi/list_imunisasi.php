
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
                                        <th>Usia Perbulan</th>
                                        <th>Imunisasi</th>
                                    </tr>
                                    <?php 
                                    include "../lib/config.php";
                                    include "../lib/koneksi.php";
                                    $id=$_GET['id_balita'];
                                    $kueribal = mysqli_query($koneksi, "SELECT * FROM tbl_imunisasi WHERE kode_balita='$id'");

                                    while ($bal=mysqli_fetch_array($kueribal)) {

                                       ?>
                                       <tr>
                                        <td><?php echo $bal['usiaPerbulan']; ?></td>
                                        <td><?php echo $bal['imunisasi']; ?></td>
                                    </tr>
                                <?php  } ?>
                            </table>



                            <div class="box-footer">
                              <a href="<?php echo $base_url; ?>admin/adminweb.php?modul=tambah_imunisasi&kode_balita=<?php echo $id?>"><button class="btn btn-primary" >Imunisasi Selanjutnya</button></a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>