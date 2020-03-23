<?php
include "koneksi.php";
$sql="DELETE FROM `t_absensi` WHERE `id_absensi` =
'$_GET[id_absensi]'";
mysql_query($sql) or die("Gagal Menghapus");
header ("location:tampil_data_subkriteria_ab.php");
?>