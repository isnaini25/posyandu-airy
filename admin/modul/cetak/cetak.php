
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

            <div class="container-fluid" >
                <div class="row">
                    <div class="col">
                        <div class="card" > 
                            <div class="card-body" id="printArea">

                                <table class="table table-hover" >
                                    <tr>
                                        <th colspan="10 " class="text-center" >DATA ANAK</th>
                                        <th colspan="2" class="text-center">DATA IBU</th>
                                    </tr>

                                    <tr>

                                        <th rowspan="2">Nama Balita</th>
                                        <th rowspan="2">Anak ke</th>
                                        <th rowspan="2">Jenis kelamin</th>
                                        <th rowspan="2">TTL</th>
                                        <th rowspan="2">TB Lahir</th>
                                        <th rowspan="2">BB Lahir</th>
                                        <th rowspan="2">Umur</th>
                                        <th colspan="2">Penimbangan</th>
                                        <th rowspan="2">Imunisasi</th>
                                        <th rowspan="2">Nama Ayah</th>
                                        <th rowspan="2">Nama Ibu</th>
                                    </tr>

                                    <tr>

                                     <th>TB</th>
                                     <th>BB</th>

                                 </tr>
                                 <?php 
                                 include "../lib/config.php";
                                 include "../lib/koneksi.php";
                                 $kueribal = mysqli_query($koneksi, "select * from tbl_balita b INNER JOIN tbl_ibubalita i on b.kode_ibubalita = i.kode_ibubalita ");

                                 while ($bal=mysqli_fetch_array($kueribal)) {
                                    $tanggal1 = new DateTime($bal['TTL']);
                                    $tanggal2 = new DateTime();
                                    $perbedaan = $tanggal2->diff($tanggal1)->format("%a");
                                    $beda = floor($perbedaan/30);
                                    $kd_balita = $bal['kode_balita'];


                                    ?>
                                    <tr>
                                        <td><?php echo $bal['namaBalita']; ?></td>
                                        <td><?php echo $bal['anak_ke']; ?></td>
                                        <td><?php echo $bal['jenkel']; ?></td>
                                        <td><?php echo $bal['TTL']; ?></td>
                                        <td><?php echo $bal['Tb_lahir']; ?> cm</td>
                                        <td><?php echo $bal['Bb_lahir']; ?> kg</td>
                                        <td><?php echo $beda; ?> bulan </td>
                                        <?php 
                                        $kuerinew = mysqli_query($koneksi, "select * from tbl_penimbangan WHERE kode_balita = $kd_balita ORDER BY tanggal_penimbangan DESC LIMIT 1");
                                        $ketemu=mysqli_num_rows($kuerinew);
                                        $pen=mysqli_fetch_array($kuerinew); 
                                        if ($ketemu > 0 ) {
                                        ?>
                                        <td><?php echo $pen['tinggiBadan']; ?>cm</td>
                                        <td><?php echo $pen['beratBadan']; ?>kg</td>
                                    <?php } else {
                                         ?>
                                        <td></td>
                                        <td></td>
                                    <?php } ?>

                                    <?php 
                                        $kuerinew = mysqli_query($koneksi, "select * from tbl_imunisasi WHERE kode_balita = $kd_balita ORDER BY tanggal_imunisasi DESC LIMIT 1");
                                        $ketemu=mysqli_num_rows($kuerinew);
                                        $imn=mysqli_fetch_array($kuerinew);
                                        if ($ketemu > 0 ) {
                                        ?>
                                        <td><?php echo $imn['imunisasi']; ?></td>
                                    <?php } else {
                                         ?>
                                        <td></td>
                                    <?php } ?>
                                        <td><?php echo $bal['namaSuami']; ?></td>
                                        <td><?php echo $bal['namaIbu']; ?></td>
                                    </tr>
                                <?php  } ?>
                            </table>
                            
                      </div>
                  </div>
                  <div class="box-footer">
                            <button class="btn btn-primary" id="cetak">PRINT</button>
                          </div>
              </div>
          </div>
      </div>
      <!-- #/ container -->
  </div>
        <!--**********************************
            Content body end
        ***********************************-->
<script type="text/javascript">
$("#cetak").on("click", function() {
           cetak();
        }
        )

        function cetak(){
            var printContents = document.getElementById("printArea").innerHTML;
            var original = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = original;
        }

</script>