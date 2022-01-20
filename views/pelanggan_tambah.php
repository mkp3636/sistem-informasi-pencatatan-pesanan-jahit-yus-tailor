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
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pelanggan" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="nohp" class="col-sm-3 control-label">NO Hp</label>
                            <div class="col-sm-9">
                                <input type="text" name="nohp" class="form-control" id="inputEmail3" placeholder="Inputkan No Hp" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
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
                    <a href="?page=pelanggan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pelanggan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
	$nama      =$_POST['nama'];
    $nohp      =$_POST['nohp'];
	$almt      =$_POST['alamat'];
    //buat sql
    $sql="INSERT INTO tbpelanggan VALUES ('',
                                            '$nama',
                                            '$nohp',
                                            '$almt')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=pelanggan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
