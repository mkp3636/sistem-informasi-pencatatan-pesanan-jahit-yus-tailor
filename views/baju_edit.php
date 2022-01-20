<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbpesananbaju WHERE id_pesanbaju ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pesanan Baju</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="pelanggan" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="pelanggan" class="form-control">
                                    <?php
                                        $pelanggan = mysqli_query($koneksi,"SELECT * FROM 
                                                            tbpelanggan ");

                            while ($data2 = mysqli_fetch_array($pelanggan)) { ?>
                                <option value="<?= $data2['id_pl'] ?>">
                                               <?= $data2['nama'] ?>
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
                                <input type="text" name="jenis" value="<?=$data['jenis']?>"class="form-control" id="inputEmail3" placeholder="Jenis Baju">
                            </div>
                        </div>
						<div class="form-group">
                        <label for="lile" class="col-sm-3 control-label">Lingkar Leher (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lile" value="<?=$data['lingkar_leher']?>"class="form-control" id="inputEmail3" placeholder="Lingkar Leher">
                            </div>
                        </div>
						<div class="form-group">
                        <label for="lida" class="col-sm-3 control-label">Lingkar Dada (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lida" value="<?=$data['lingkar_dada']?>"class="form-control" id="inputEmail3" placeholder="Lingkar Dada">
                            </div>
                        </div>
						<div class="form-group">
                        <label for="lipi" class="col-sm-3 control-label">Lingkar Pinggul (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lipi" value="<?=$data['lingkar_pinggul']?>"class="form-control" id="inputEmail3" placeholder="Lingkar Pinggul">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="papi" class="col-sm-3 control-label">Panjang Pinggul (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="papi" value="<?=$data['panjang_pinggul']?>"class="form-control" id="inputEmail3" placeholder="Panjang Pinggul" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lepi" class="col-sm-3 control-label">Lebar Pinggul (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lepi" value="<?=$data['lebar_pinggul']?>"class="form-control" id="inputEmail3" placeholder="Lebar Pinggul" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lebah" class="col-sm-3 control-label">Lebar Bahu (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lebah" value="<?=$data['lebar_bahu']?>"class="form-control" id="inputEmail3" placeholder="Lebar Bahu" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pale" class="col-sm-3 control-label">Panjang Lengan (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="pale" value="<?=$data['panjang_lengan']?>"class="form-control" id="inputEmail3" placeholder="Panjang Lengan" >
                            </div>
                        </div>

                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Pesan</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2017;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->           

                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Selesai</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahuns" class="form-control">
                                    <?php for($i=2050;$i>2010;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulans" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggals" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>

                        <div class="form-group">
                        <label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" value="<?=$data['jumlah']?>" class="form-control" id="inputPassword3" placeholder="Jumlah">
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" value="<?=$data['harga']?>" class="form-control" id="inputPassword3" placeholder="Harga">
                            </div>
                        </div>
                        <!--Status-->
                        <div class="form-group">
                            <label for="total" class="col-sm-3 control-label">Total</label>
                            <div class="col-sm-9">
                                <input type="text" name="total" value="<?=$data['total']?>" class="form-control" id="inputPassword3" placeholder="Total">
                            </div>
                        </div>
                        
                        <!--Akhir Status-->
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Arsip</button>
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
    $tglmasuk=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $tglselesai=$_POST['tahuns']."_".$_POST['bulans']."_".$_POST['tanggals'];
	$jlh            =$_POST['jumlah'];
    $harga          =$_POST['harga'];
	$total          =$_POST['total'];

    
   
    //buat sql
    $sql="UPDATE tbpesananbaju SET id_pl='$pelanggan',
                                   jenis='$jenis',
                                   lingkar_leher='$lingkarleher',
                                   lingkar_dada='$lingkardada',
                                   lingkar_pinggul='$lingkarpinggul',
	                               panjang_pinggul='$panjangpinggul',
                                   lebar_pinggul='$lebarpinggul',
                                   lebar_bahu='$lebarbahu',
                                   lingkar_lengan='$lingkarlengan',
                                   panjang_lengan='$panjanglengan',
                                   tgl_masuk='$tglmasuk',
                                   tgl_siap='$tglselesai',
                                   jumlah='$jlh',
                                   harga='$harga',
                                   total='$total' WHERE id_pesanbaju ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=baju&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



