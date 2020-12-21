
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
                                            <th>username</th>
                                            <th>nama admin</th>
                                            <th>nama suami</th>
                                            <th>tanggal pendaftaran</th>
                                            <th style="width: 110px">Aksi</th>
                                        </tr>
                                        <?php 
                                        include "../lib/config.php";
                                        include "../lib/koneksi.php";
                                        $kueriibu = mysqli_query($koneksi, "select * from tbl_ibubalita");
                                        while ($ibu=mysqli_fetch_array($kueriibu)) {

                                           ?>
                                           <tr>
                                            <td><?php echo $ibu['username']; ?></td>
                                            <td><?php echo $ibu['namaIbu']; ?></td>
                                            <td><?php echo $ibu['namaSuami']; ?></td>
                                            <td><?php echo $ibu['tglPendaftaran']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo $admin_url ;?>adminweb.php?modul=edit_ibu&id_ibu=<?php echo $ibu['kode_ibubalita'];?>" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                                                    <a href="<?php echo $admin_url ;?>modul/ibu/aksi_hapus.php?id_ibu=<?php  echo $ibu['kode_ibubalita'];?>" onClick ="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="fa fa-power-off"></i></button></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php  } ?>
                                </table>
                                <div class="box-footer">
                              <a href="<?php echo $base_url; ?>admin/adminweb.php?modul=tambah_ibu"><button class="btn btn-primary">Tambah Ibu</button></a>
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