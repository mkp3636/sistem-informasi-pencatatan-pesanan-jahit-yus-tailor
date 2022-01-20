<?php
$sql = "SELECT * FROM tbpelanggan";
$queryp = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");

?>


<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Pesanan Celana</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="pelanggan" class="col-sm-3 control-label">Nama Pelanggan</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="pelanggan" class="form-control">
                                <?php
                                    while ($data = mysqli_fetch_array($queryp)) { ?>
                                       <option value="<?= $data['id_pl'] ?>">
                                               <?= $data['nama'] ?>
                                        </option>
                                    <?php
                                    }

                                    ?>
                                </select>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="jenis" class="col-sm-3 control-label">Jenis</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Baju" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="paka" class="col-sm-3 control-label">Panjang Kaki (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="paka" class="form-control" id="inputEmail3" placeholder="Inputkan Panjang Kaki" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="liping" class="col-sm-3 control-label">Lingkar Pinggang (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="liping" class="form-control" id="inputEmail3" placeholder="Inputkan Lingkar Pinggang" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="lipi" class="col-sm-3 control-label">Lingkar Pinggul (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lipi" class="form-control" id="inputEmail3" placeholder="Inputkan Lingkar Pinggul" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lipah" class="col-sm-3 control-label">Lingkar Paha (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lipah"class="form-control" id="inputEmail3" placeholder="Inputkan Lingkar Paha" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_pesan" class="col-sm-3 control-label">Tanggal Pesan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pesan" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Pesan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_selesai" class="col-sm-3 control-label">Tanggal Selesai</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_selesai" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Selesai" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" class="form-control" id="inputPassword3" placeholder="Inputkan Jumlah Pesanan" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" id="inputPassword3" placeholder="Inputkan Harga" required>
                            </div>
                        </div>

                       


                        <!--Status-->

                        

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=celana&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Celana
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $pelanggan          =$_POST['pelanggan'];
	$jenis              =$_POST['jenis'];
	$panjangkaki        =$_POST['paka'];
	$lingkarpinggang    =$_POST['liping'];
    $lingkarpinggul     =$_POST['lipi'];
	$lingkarpaha        =$_POST['lipah'];
    $tglpesan           =$_POST['tgl_pesan'];
    $tglselesai         =$_POST['tgl_selesai'];
	$jlh                =$_POST['jumlah'];
    $harga              =$_POST['harga'];
	$total              =$jlh*$harga;
    //buat sql
    $sql="INSERT INTO tbpesancelana VALUES ('$pelanggan',
                                            '$jenis',
                                            '$panjangkaki',
                                            '$lingkarpinggang',
                                            '$lingkarpinggul',
                                            '$lingkarpaha',
                                            '',
                                            '$tglpesan',
                                            '$tglselesai',
                                            '$jlh',
                                            '$harga',
                                            '$total')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=celana&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
