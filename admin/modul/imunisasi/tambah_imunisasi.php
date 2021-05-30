            

            <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

            	<div class="row page-titles mx-0">
            		<div class="col p-md-0">
            			<ol class="breadcrumb">
            				<li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Balita</a></li>
                                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Imunisasi</a></li>
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
                              <?php 
                              include "../lib/config.php";
                              include "../lib/koneksi.php";

                              $idBalita=$_GET['kode_balita'];
                              $kueri = mysqli_query($koneksi, "SELECT * FROM tbl_balita WHERE kode_balita= '$idBalita'");

                              while ($res=mysqli_fetch_array($kueri)) {

                                    $tanggal1 = new DateTime($res['TTL']);
                                    $tanggal2 = new DateTime();
                                    $perbedaan = $tanggal2->diff($tanggal1)->format("%a");
                                    $beda = floor($perbedaan/30);

                              ?>
                              <form class="form-valide" action="../admin/modul/imunisasi/aksi_simpan.php" method="post">
                                <div class="form-group row">
                                 <label class="col-lg-4 col-form-label" for="namaBalita">Nama Balita <span class="text-danger">*</span>
                                 </label>
                                 <div class="col-lg-6">
                                  <input disabled="" type="text" name="namaBalita" value="<?php echo $res['namaBalita']?>" class="form-control">
                                  <input hidden type="text" name="kode_balita" value="<?php echo $idBalita ?>">  
                            </div>
                              </div>
                              <div class="form-group row">
                              <label class="col-lg-4 col-form-label" for="usia">Usia Perbulan</label>
                              <div class="col-lg-6">
                                    <input class="form-control" readonly="" type="text" name="usiaPerbulan" value="<?php echo $beda ?>"> 
                              </div>

                        </div>


                  <div class="form-group row">
                     <label class="col-lg-4 col-form-label" for="tb">Imunisasi<span class="text-danger">*</span>
                     </label>
                     <div class="col-lg-6">
                      <select name="imunisasi" class="form-control">
                        <option value="ohb">OHB</option>
                        <option value="bsg">BSG</option>
                        <option value="dpt1">DPT1 dan polio 1</option>
                        <option value="dpt2">DPT2 dan polio 2</option>
                        <option value="dpt3">DPT3 dan polio 3</option>
                        <option value="avp">AVP</option>
                        <option value="campak">CAMPAK</option>
                        <option value="dptP">DPT Poster</option>
                        <option value="campakP">Campak Poster</option>           
                  </select>
            </div>
      </div>

</div>
<div class="form-group row">
  <div class="col-lg-8 ml-auto">
   <button type="submit" class="btn btn-primary">SIMPAN</button>
</div>
</div>
</form>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- #/ container -->
</div>
