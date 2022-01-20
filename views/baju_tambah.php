<?php
$sql = "SELECT * FROM tbpelanggan";
$queryp = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");

?>


<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Pesanan Baju</h3>
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
                            <label for="lile" class="col-sm-3 control-label">Lingkar Leher (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lile" class="form-control" id="inputEmail3" placeholder="Inputkan Lingkar Leher" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="lida" class="col-sm-3 control-label">Lingkar Dada (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lida" class="form-control" id="inputEmail3" placeholder="Inputkan Lingkar Dada" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="lipi" class="col-sm-3 control-label">Lingkar Pinggul (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lipi" class="form-control" id="inputEmail3" placeholder="Inputkan Lingkar Pinggul" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="papi" class="col-sm-3 control-label">Panjang Pinggul (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="papi"class="form-control" id="inputEmail3" placeholder="Inputkan Panjang Pinggul" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lepi" class="col-sm-3 control-label">Lebar Pinggul (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lepi"class="form-control" id="inputEmail3" placeholder="Inputkan Lebar Pinggul" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lebah" class="col-sm-3 control-label">Lebar Bahu (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lebah"class="form-control" id="inputEmail3" placeholder="Inputkan Lebar Bahu" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lileng" class="col-sm-3 control-label">Lingkar Lengan (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lileng"class="form-control" id="inputEmail3" placeholder="Inputkan Lingkar Lengan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pale" class="col-sm-3 control-label">Panjang Lengan (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="pale"class="form-control" id="inputEmail3" placeholder="Inputkan Panjang Lengan" required>
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
                    <a href="?page=baju&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Baju
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $pelanggan      =$_POST['pelanggan'];
	$jenis          =$_POST['jenis'];
	$lingkarleher   =$_POST['lile'];
	$lingkardada    =$_POST['lida'];
    $lingkarpinggul =$_POST['lipi'];
	$panjangpinggul =$_POST['papi'];
    $lebarpinggul   =$_POST['lepi'];
    $lebarbahu      =$_POST['lebah'];
    $lingkarlengan  =$_POST['lileng'];
    $panjanglengan  =$_POST['pale'];
    $tglpesan       =$_POST['tgl_pesan'];
    $tglselesai     =$_POST['tgl_selesai'];
	$jlh            =$_POST['jumlah'];
    $harga          =$_POST['harga'];
	$total          =$jlh*$harga;

    //buat sql
    $sql="INSERT INTO tbpesananbaju VALUES ('',
                                            '$pelanggan',
                                            '$jenis',
                                            '$lingkarleher',
                                            '$lingkardada',
                                            '$lingkarpinggul',
                                            '$panjangpinggul',
                                            '$lebarpinggul',
                                            '$lebarbahu',
                                            '$lingkarlengan',
                                            '$panjanglengan',
                                            '$tglpesan',
                                            '$tglselesai',
                                            '$jlh',
                                            '$harga',
                                            '$total')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=baju&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>

<!-- 
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js">
    $(".perhitungan").keyup(function(){
        var jlh = parseInt($("jlh").val())
        var harga = parseInt($("harga").val())

        var total = jlh * harga;
        $("#total").attr("value",hasil)
    });
 -->