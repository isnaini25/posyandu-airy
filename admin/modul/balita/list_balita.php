
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

                                            <th>nama balita</th>
                                            <th>nama ibu</th>
                                            <th>jenis kelamin</th>
                                            <th>TTL</th>
                                            <th>anak ke</th>
                                            <th>TB Lahir</th>
                                            <th>BB Lahir</th>
                                            <th style="width: 110px">Aksi</th>
                                        </tr>
                                        <?php 
                                        include "../lib/config.php";
                                        include "../lib/koneksi.php";
                                        $kueribal = mysqli_query($koneksi, "select * from tbl_balita b INNER JOIN tbl_ibubalita i on b.kode_ibubalita = i.kode_ibubalita ");

                                        while ($bal=mysqli_fetch_array($kueribal)) {

                                           ?>
                                           <tr>
                                            <td><?php echo $bal['namaBalita']; ?></td>
                                            <td><?php echo $bal['namaIbu']; ?></td>
                                            <td><?php echo $bal['jenkel']; ?></td>
                                            <td><?php echo $bal['TTL']; ?></td>
                                            <td><?php echo $bal['anak_ke']; ?></td>
                                            <td><?php echo $bal['Tb_lahir']; ?> cm</td>
                                            <td><?php echo $bal['Bb_lahir']; ?> kg</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo $admin_url ;?>adminweb.php?modul=edit_balita&id_balita=<?php echo $bal['kode_balita'];?>" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                                                    <a href="<?php echo $admin_url ;?>modul/balita/aksi_hapus.php?kode_balita=<?php  echo $bal['kode_balita'];?>" onClick ="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="fa fa-power-off"></i></button></a>
                                                    <a href="<?php echo$admin_url ;?>adminweb.php?modul=penimbangan&id_balita=<?php echo $bal['kode_balita'];?>" class="btn btn-warning"><i>PENIMBANGAN</i></button></a>
                                                </div>
                                            </td>

                                        </tr>
                                    <?php  } ?>
                                </table>
                                <div class="box-footer">
                              <a href="<?php echo $base_url; ?>admin/adminweb.php?modul=tambah_balita"><button class="btn btn-primary">Tambah Balita</button></a>
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