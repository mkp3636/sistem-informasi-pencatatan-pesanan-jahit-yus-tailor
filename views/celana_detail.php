<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pesanan Celana</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip--->
                    <?php
                    $sql = "SELECT * FROM tbpesancelana LEFT JOIN tbpelanggan
                            ON tbpelanggan.id_pl = tbpesancelana.id_pl WHERE id_pesancelana ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nama</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis</td> <td><?= $data['jenis'] ?></td>
                        </tr>
                        <tr>
                            <td>Panjang Kaki (cm) </td> <td><?= $data['panjang_kaki'] ?></td>
                        </tr>
						<tr>
                            <td>Lingkar Pinggang (cm)</td> <td><?= $data['lingkar_pinggang'] ?></td>
                        </tr>
                        <tr>
                            <td>Lingkar Pinggul (cm)</td> <td><?= $data['lingkar_pinggul'] ?></td>
                        </tr>
                        <tr>
                            <td>Lingkar Paha (cm)</td> <td><?= $data['lingkar_paha'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Selesai/td> <td><?= $data['tgl_siap'] ?></td>
                        </tr>
						<tr>
                            <td>Jumlah</td> <td><?= $data['jumlah'] ?></td>
                        </tr>
						<tr>
                            <td>Harga</td> <td><?= $data['harga'] ?></td>
                        </tr>
						<tr>
                            <td>Total</td> <td><?= $data['total'] ?></td>
                        </tr>
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=celana&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Celana </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

