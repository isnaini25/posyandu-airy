<style type="text/css">
 textarea{
		width: 300px;
		height: 150px;
		border-color: rgba(156, 118, 179, 0.5);
	
	}

	.rating{
		margin-left: 30px;
		width: 250px;
	}
</style>


<?php 

include "lib/koneksi.php";

if(isset($_POST["kirim"])){
	$produk = $_POST['id_produk'];
	$idCust = $_SESSION['idCustomer'];

	$ulasan = $_POST['ulasan'];
	$rating = $_POST['nilai'];

	for ($i=0; $i < count($produk); $i++) { 
		$idProduk = $produk[$i];
		$Ulasan = $ulasan[$i];
		$Nilai = $rating[$i];

		$querySimpan= mysqli_query($koneksi, "INSERT INTO tbl_review(id_customer, id_produk, review,rating) VALUES ('$idCust', '$idProduk', '$Ulasan', '$Nilai')");

		if ($querySimpan) {
			echo "<script >alert('Terimakasih telah memberikan ulasan'); window.location ='riwayat.php';</script>	";
		}else{

		}
	}
}
 ?>

<main>
	<section>
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<form action="ulasan.php" method="post">
					<?php 
					include "lib/koneksi.php";
					$id = $_GET['id_transaksi'];
					$q = mysqli_query($koneksi, "SELECT * FROM tbl_item_transaksi it INNER JOIN tbl_produk p ON it.id_produk = p.id_produk INNER JOIN tbl_merek m ON p.id_merek = m.id_merek WHERE id_transaksi = '$id'");
                  while($r=mysqli_fetch_array($q)){
                   ?>
					<table class="table table-borderless">
						<tr>
							<td rowspan="3"><img src="admin/upload/<?php echo $r['gambar']; ?>" width="100"><br>
							<?php 
                        echo $r['nama_merek']." - ".$r['nama_produk']; ?></td>
                        	
						</tr>
						<tr>
							<td>
                        		<input type="text" name="id_produk[]" value="<?php echo $r['id_produk'] ?>" hidden>
                        		<textarea name="ulasan[]" placeholder="Tulis ulasan tentang produk ini..."></textarea></td>

						</tr>
						
						<tr><td >
							<div class="rating">
							<select class="custom-select" name="nilai[]" >
 								<option disabled selected>--Beri Nilai--</option>
 								<?php 
 									
 								for ($i=1; $i <=10; $i++) { 
 									
 									?>

 									<option value="<?php echo $i; ?>"><?php echo $i ; ?></option>
 									
 								<?php } ?>
 								</select>
 								</div>
						</td>
					</tr>
						<?php } ?>

						<tr>
							<td></td>
							<td><button type="submit" class="btn-all" name="kirim">Kirim</button></td>
						</tr>
					</table>
				
				</form>
			</div>
		</div>
	</section>
</main>


