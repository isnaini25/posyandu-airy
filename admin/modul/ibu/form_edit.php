	        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">ibu</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                   <form class="form-valide" action="../admin/modul/ibu/aksi_edit.php" method="post" >
                                        <?php
                                    include "../lib/config.php";
                                    include "../lib/koneksi.php";
                                    $id = $_GET['id_ibu'];
                                    $kueri = mysqli_query($koneksi, "SELECT * FROM tbl_ibubalita WHERE kode_ibubalita= '$id'");
                                    while ($res=mysqli_fetch_array($kueri)) {
                                    ?>
                                    <input hidden value="<?php echo $res['kode_ibubalita']; ?>" name="kode_ibubalita">
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="namaIbu">Nama <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama" name="namaIbu" value="<?php echo $res['namaIbu'] ;?>" placeholder="Enter a nama..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="suami">Nama Suami<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="suami" name="namaSuami" value="<?php echo $res['namaSuami'] ;?>" placeholder="Name Your Husband ..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="tglPendaftaran">Tanggal Pendaftaran <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" id="tglPendaftaran" value="<?php echo $res['tglPendaftaran'] ;?>" name="tglPendaftaran">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </form>
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
                           