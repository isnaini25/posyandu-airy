<main>
	<section>
		<div class="row">
			<?php 
			include "lib/koneksi.php";
			include "lib/config.php";
			$idCustomer = $_SESSION['idIbubalita'];


			$queryGetProfil = mysqli_query($koneksi, "SELECT * FROM tbl_ibubalita WHERE kode_ibubalita = '$idCustomer'");
			$res = mysqli_fetch_array($queryGetProfil);
			$kode_ibubalita = $res['kode_ibubalita']; ?>
			<div class="col-lg-4 col-md-6">
				

			</div>
			<div class="col-lg-4 col-md-6">
				
				<form action="aksi_profil_edit.php" method="post">
					<fieldset id="myFieldset" disabled>
						<input type="hidden" name="id_customer" value="<?php echo $id_customer; ?>">
						<input type="hidden" name="username" value="<?php $res['username']  ?>">
						<label>Username</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">@</span>
							</div> 
							<input disabled type="text" class="form-control"   name="usernameshow" value="<?php echo $res['username']  ?>">
						</div>
						
						<label>Nama Lengkap</label>
						<div class="input-group mb-3">						
							<input type="text" class="form-control"  placeholder="Masukkan Nama Lengkap" name="nama" value="<?php echo $res['namaIbu'] ?>">
						</div>


						<label>Nama Suami</label>
						<div class="input-group mb-3">
							<input type="text" class="form-control"  placeholder="example@example.com" name="suami" value="<?php echo $res['namaSuami'] ?>">
						</div>

						<div class="form-group">
						<label class="col-form-label">Tanggal Pendaftaran</label>	
						<input type="text" class="form-control"  placeholder="Masukan Nomor Telepon" name="notelp" value="<?php echo $res['tglPendaftaran'] ?>">
					</div>


							<label>Password</label>
							<div class="input-group mb-3">
								<input type="password" class="form-control"  placeholder="Masukkan Password" name="password">

							</div>

						</fieldset>
						<div class="mb-5">
							<button type="button" class="btn btn-warning mr-4" onclick="ubahfieldset()" id="btnUbah"><i class="fa fa-edit" aria-hidden="true"></i>Ubah</button>


							<button class="btn btn-success" id="btnSimpan" disabled type="submit"> <i class="fa fa-save" aria-hidden="true" ></i> Simpan</button>

						</div>
					</form>

					
				</div>
				<!-- <div class="col-lg-4 col-md-6">
				<button class="btn btn-info"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
			</div> -->
		</div>


	</section>
</main>

<script>
	function ubahfieldset() {
		document.getElementById("myFieldset").disabled = false;
		document.getElementById("btnUbah").disabled = true;
		document.getElementById("btnSimpan").disabled = false;

	}
</script>