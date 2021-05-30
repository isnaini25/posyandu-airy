<style type="text/css">
	.daftar{
  margin: 0 auto;
  width:400px;
}

.daftar input{

  width: 400px;
}
</style>

<main>
	<section>
		<h1><center>DAFTAR</center></h1>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				 <div class="daftar">
				<form action="aksi_daftar.php" method="post">
					<div class="form-group">	
						<label class="col-form-label">Nama Lengkap</label>				
						<input type="text" class="form-control"  placeholder="Masukkan Nama Lengkap" name="nama">
					</div>

					<div class="form-group">
						<label class="col-form-label">Nama Suami</label>	
						<input type="text" class="form-control"  placeholder="masukkan Nama suami" name="suami">
					</div>

					<div class="form-group">
						<label class="col-form-label">Tgl pendaftaran</label>	
						<input type="date" class="form-control"  placeholder="" name="tgl">
					</div>
				
						
							<hr>
							<div class="form-group">
							<label class="col-form-label">Username</label>
							<input type="text" class="form-control"  placeholder="Masukkan Username" name="username" >
							</div>
							<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control"  placeholder="Masukkan Password" name="password" >
							</div>

							<div class="kliksignup">
								<button type="submit" class="btn-more">SIGN UP</button>
							</div>
				</form>
			</div>
			</div>
		</div>
	</section>
</main>