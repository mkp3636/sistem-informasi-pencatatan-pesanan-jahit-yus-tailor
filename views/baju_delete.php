<?php
//membuat query untuk hapus data
$sql="DELETE FROM tbpesananbaju WHERE id_pesanbaju ='".$_GET['id']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=baju&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=baju&actions=tampil');</scripr>";
}

