<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbpesancelana WHERE id_pesancelana ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pesanan Celana</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="pelanggan" class="col-sm-3 control-label">Nama </label>
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
                        <label for="paka" class="col-sm-3 control-label">Panjang Kaki (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="paka" value="<?=$data['panjang_kaki']?>"class="form-control" id="inputEmail3" placeholder="Panjang Kaki">
                            </div>
                        </div>
						<div class="form-group">
                        <label for="liping" class="col-sm-3 control-label">Lingkar Pinggang (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="liping" value="<?=$data['lingkar_pinggang']?>"class="form-control" id="inputEmail3" placeholder="Lingkar Pinggang">
                            </div>
                        </div>
						<div class="form-group">
                        <label for="lipi" class="col-sm-3 control-label">Lingkar Pinggul (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lipi" value="<?=$data['lingkar_pinggul']?>"class="form-control" id="inputEmail3" placeholder="Lingkar Pinggul">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="lipah" class="col-sm-3 control-label">Lingkar Paha (cm)</label>
                            <div class="col-sm-9">
                                <input type="text" name="lipah" value="<?=$data['lingkar_paha']?>"class="form-control" id="inputEmail3" placeholder="Lingkar Paha" >
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
                                    <span class="fa fa-edit"></span> Update Data Celana</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=celana&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pesanan Celana
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $pelanggan        =$_POST['pelanggan'];
	$jenis            =$_POST['jenis'];
	$panjangkaki      =$_POST['paka'];
	$lingkarpinggang  =$_POST['liping'];
    $lingkarpinggul   =$_POST['lipi'];
	$lingkarpaha      =$_POST['lipah'];
    $tglmasuk         =$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $tglselesai       =$_POST['tahuns']."_".$_POST['bulans']."_".$_POST['tanggals'];
	$jlh              =$_POST['jumlah'];
    $harga            =$_POST['harga'];
	$total            =$_POST['total'];

    
   
    //buat sql
    $sql="UPDATE tbpesancelana SET id_pl='$pelanggan',
                                   jenis='$jenis',
                                   panjang_kaki='$panjangkaki',
                                   lingkar_pinggang='$lingkarpinggang',
                                   lingkar_pinggul='$lingkarpinggul',
                                   lingkar_paha='$lingkarpaha',
                                   tgl_masuk='$tglmasuk',
                                   tgl_siap='$tglselesai',
                                   jumlah='$jlh',
                                   harga='$harga',
                                   total='$total' WHERE id_pesancelana ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=celana&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



