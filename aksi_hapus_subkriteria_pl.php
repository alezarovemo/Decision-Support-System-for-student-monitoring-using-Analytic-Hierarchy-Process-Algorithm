<?php
include "koneksi.php";
$sql="DELETE FROM `t_perilaku` WHERE `id_perilaku` =
'$_GET[id_perilaku]'";
mysql_query($sql) or die("Gagal Menghapus");
header ("location:tampil_data_subkriteria_pl.php");
?>