<?php
include "koneksi.php";
$sql="DELETE FROM `t_nilai` WHERE `id_nilai` =
'$_GET[id_nilai]'";
mysql_query($sql) or die("Gagal Menghapus");
header ("location:tampil_data_subkriteria_na.php");
?>