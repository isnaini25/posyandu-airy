            

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
                                                 <?php 
                                                 include "../lib/config.php";
                                                 include "../lib/koneksi.php";

                                                 $idBalita=$_GET['kode_balita'];
                                                 $kueri = mysqli_query($koneksi, "SELECT * FROM tbl_balita WHERE kode_balita= '$idBalita'");

                                                 while ($res=mysqli_fetch_array($kueri)) {

                                                      ?>
                                                      <form class="form-valide" action="../admin/modul/penimbangan/aksi_simpan.php" method="post">
                                                        <div class="form-group row">
                                                         <label class="col-lg-4 col-form-label" for="namaBalita">Nama Balita <span class="text-danger">*</span>
                                                         </label>
                                                         <div class="col-lg-4 col-form-label">
                                                              <input disabled="" type="text" name="namaBalita" value="<?php echo $res['namaBalita']?>">
                                                              <input type="text" name="kode_balita" value="<?php echo $idBalita ?>" hidden>  
                                                        </div>
                                                  </div>


                                                  <div class="form-group row">
                                                   <label class="col-lg-4 col-form-label" for="tb">TB<span class="text-danger">*</span>
                                                   </label>
                                                   <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="tb" name="tb">
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                             <label class="col-lg-4 col-form-label" for="bb">BB<span class="text-danger">*</span>
                                             </label>
                                             <div class="col-lg-6">
                                              <input type="text" class="form-control" id="bb" name="bb">
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
