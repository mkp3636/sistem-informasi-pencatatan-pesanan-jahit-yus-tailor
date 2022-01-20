<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pesanan Baju</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip--->
                    <?php
                    $sql = "SELECT * FROM tbpesananbaju LEFT JOIN tbpelanggan
                            ON tbpelanggan.id_pl = tbpesananbaju.id_pl WHERE id_pesanbaju ='" . $_GET ['id'] . "'";
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
                            <td>Lingkar Leher (cm) </td> <td><?= $data['lingkar_leher'] ?></td>
                        </tr>
						<tr>
                            <td>Lingkar Dada (cm)</td> <td><?= $data['lingkar_dada'] ?></td>
                        </tr>
                        <tr>
                            <td>Lingkar Pinggul (cm)</td> <td><?= $data['lingkar_pinggul'] ?></td>
                        </tr>
                        <tr>
                            <td>Panjang Pinggul (cm)</td> <td><?= $data['panjang_pinggul'] ?></td>
                        </tr>
                        <tr>
                            <td>Lebar Pinggul (cm)</td> <td><?= $data['lebar_pinggul'] ?></td>
                        </tr>
                        <tr>
                            <td>Lebar Bahu (cm)</td> <td><?= $data['lebar_bahu'] ?></td>
                        </tr>
                        <tr>
                            <td>Lingkar Lengan (cm)</td> <td><?= $data['lingkar_lengan'] ?></td>
                        </tr>
                        <tr>
                            <td>Panjang Lengan (cm)</td> <td><?= $data['panjang_lengan'] ?></td>
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
                    <a href="?page=baju&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Baju </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

