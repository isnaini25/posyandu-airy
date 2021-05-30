            

            <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

                <div class="row page-titles mx-0">
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">balita</a></li>
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
                                        <form class="form-valide" action="../admin/modul/balita/aksi_edit.php" method="post" >
                                            <?php
                                            include "../lib/config.php";
                                            include "../lib/koneksi.php";
                                            $id = $_GET['id_balita'];
                                            $kueri = mysqli_query($koneksi, "SELECT * FROM tbl_balita WHERE kode_balita= '$id'");
                                            while ($res=mysqli_fetch_array($kueri)) {
                                                ?>
                                                <input hidden value="<?php echo $res['kode_balita']; ?>" name="kode_balita">

                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="namaBalita">Nama Balita <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="namaBalita" value="<?php echo $res['namaBalita'] ;?>" name="namaBalita" placeholder="Enter a name..">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="namaibubalita" class="col-lg-4">Nama Ibu</label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control"  name="namaIbu">
                                                            <?php
                                                            include "../lib/config.php";
                                                            include "../lib/koneksi.php";

                                                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_ibubalita");
                                                            while ($result = mysqli_fetch_array($query)) {
                                                                ?>
                                                                <option <?php 
                                                                if ($res['kode_ibubalita']==$result['kode_ibubalita']) {
                                                                    echo "selected";
                                                                }

                                                                ?> value=" <?php echo $result['kode_ibubalita']; ?>"><?php echo $result['namaIbu']; ?></option>
                                                                <?php
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Jenis Kelamin
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <label class="radio-inline mr-3">
                                                            <input <?php 
                                                            if ($res['jenkel']=='L') {
                                                                echo "checked";
                                                            }

                                                            ?> type="radio" name="jenkel"  value="L">Laki-laki</label>
                                                            <label class="radio-inline mr-3">
                                                                <input <?php 
                                                                if ($res['jenkel']=='P') {
                                                                    echo "checked";
                                                                } ?>
                                                                type="radio" name="jenkel" value="P">Perempuan</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="ttl">TTL<span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="date" class="form-control" id="ttl" name="ttl" value="<?php echo $res['TTL'] ;?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="anakke">Anak Ke<span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control"value="<?php echo $res['anak_ke'] ;?>" id="anakke" name="anakke">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="tb">TB Lahir<span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="tb" name="tb" value="<?php echo $res['Tb_lahir'] ;?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="bb">BB lahir<span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" value="<?php echo $res['Bb_lahir'] ;?>" class="form-control" id="bb" name="bb">
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
            <!-- <script>
                $(document).ready(function(){
                    $("#username").change(function(){
                        var username = $("#username").val();
                        console.log(username);

                        $.ajax({
                            type:"post",
                            dataType:"html",
                            url:"modul/balita/cekNamaIbu.php",
                            data:"namaIbu"+username,
                            success:function(data){
                                $("#nama").html(data);
                            }
                        });
                    });
                });

            </script> -->
