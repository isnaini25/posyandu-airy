
<body> 
	 <style type="text/css">
    .cari {
      width: 350px;
    }
  </style>
	<main>
	<section>
		<div class="row" >
			<?php 
			include "lib/koneksi.php";
			include "lib/config.php";
			$idCustomer = $_SESSION['idIbubalita'];
			$queryGetBio = mysqli_query($koneksi, "SELECT * FROM tbl_balita WHERE kode_ibubalita = '$idCustomer'");
			while ($res = mysqli_fetch_array($queryGetBio)) {
			$kode_ibubalita = $res['kode_ibubalita']; ?>
			<div class="col-lg-4 col-md-6 offset-1">
				
				<form action="aksi_profil_edit.php" method="post">
					<fieldset id="myFieldset" disabled>
						<input type="hidden" name="id_ibu" value="<?php echo $id_ibu; ?>">
						<input type="hidden" name="username" value="<?php $res['username']  ?>">
						<label>Username</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">@</span>
							</div> 
							<input disabled type="text" class="form-control"   name="usernameshow" value="<?php echo $res['namaBalita']  ?>">
						</div>
						
						<label>Tanggal Lahir</label>
						<div class="input-group mb-3">						
							<input type="text" class="form-control"  placeholder="Masukkan Nama Lengkap" name="nama" value="<?php echo $res['TTL'] ?>">
						</div>

						<div class="form-group">
						<label class="col-form-label">Jenis Kelamin</label>	
						<input type="text" class="form-control"  placeholder="Masukan Nomor Telepon" name="notelp" value="<?php if ($res['jenkel']=='P'){
								echo "perempuan";
							} else {
								echo "laki-laki";
							}?>">
					</div>
							<label>Anak Ke</label>
							<div class="input-group mb-3">						
							<input type="text" class="form-control"  placeholder="Masukkan Nama Lengkap" name="nama" value="<?php echo $res['anak_ke'] ?>">
						</div>

							<label>Berat badan Lahir</label>
							<div class="input-group mb-3">						
							<input type="text" class="form-control"  placeholder="Masukkan Nama Lengkap" name="nama" value="<?php echo $res['Bb_lahir'] ?>">
						</div>

							<label>Tinggi badan Lahir</label>
							<div class="input-group mb-3">						
							<input type="text" class="form-control"  placeholder="Masukkan Nama Lengkap" name="nama" value="<?php echo $res['Tb_lahir'] ?>">
						</div>

						</fieldset>
						
					</form>

					
				</div>
			<?php } ?>	
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
</body>
