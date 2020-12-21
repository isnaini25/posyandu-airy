            

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
            							<form class="form-valide" action="../admin/modul/penimbangan/aksi_simpan.php" method="post">
            								<div class="form-group row">
            									<label class="col-lg-4 col-form-label" for="namaBalita">Nama Balita <span class="text-danger">*</span>
            									</label>
            									<div class="col-lg-6">
            										<select class="form-control"  name="namaBalita">
            											<?php
            											include "../lib/config.php";
            											include "../lib/koneksi.php";

            											$query = mysqli_query($koneksi, "SELECT * FROM tbl_balita");
            											while ($result = mysqli_fetch_array($query)) {
            												?>
            												<option value=" <?php echo $result['kode_balita']; ?>"><?php echo $result['namaBalita']; ?></option>
            												<?php
            											} ?>
            										</select>

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
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- #/ container -->
        </div>
