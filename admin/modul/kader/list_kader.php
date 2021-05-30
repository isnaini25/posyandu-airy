
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
                                            <th>password</th>
                                            <th>nama admin</th>
                                            <th>email</th>
                                            <th style="width: 110px">Aksi</th>
                                        </tr>
                                        <?php 
                                        include "../lib/config.php";
                                        include "../lib/koneksi.php";
                                        $kueriadmin = mysqli_query($koneksi, "select * from tbl_kader");
                                        while ($adm=mysqli_fetch_array($kueriadmin)) {

                                           ?>
                                           <tr>
                                            <td><?php echo $adm['username']; ?></td>
                                            <td><?php echo $adm['password']; ?></td>
                                            <td><?php echo $adm['nama']; ?></td>
                                            <td><?php echo $adm['email']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo $admin_url ;?>adminweb.php?modul=edit_kader&id_admin=<?php echo $adm['kode_kader'];?>" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                                                    <a href="<?php echo $admin_url ;?>modul/kader/aksi_hapus.php?id_admin=<?php  echo $adm['kode_kader'];?>" onClick ="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="fa fa-power-off"></i></button></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php  } ?>
                                </table>
                                <div class="box-footer">
                              <a href="<?php echo $base_url; ?>admin/adminweb.php?modul=tambah_kader"><button class="btn btn-primary">Tambah Kader</button></a>
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