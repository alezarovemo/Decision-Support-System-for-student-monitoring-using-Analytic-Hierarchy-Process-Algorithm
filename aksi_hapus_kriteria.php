<?php
include "koneksi.php";
$sql="DELETE FROM `t_kriteria` WHERE `id_kriteria` =
'$_GET[id_kriteria]'";
mysql_query($sql) or die("Gagal Menghapus");
header ("location:tampil_data_kriteria.php");
?>