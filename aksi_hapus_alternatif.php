<?php
include "koneksi.php";
$sql="DELETE FROM `t_alternatif2` WHERE `nis` =
'$_GET[nis]'";
mysql_query($sql) or die("Gagal Menghapus");
header ("location:tampil_data_alternatif.php");
?>