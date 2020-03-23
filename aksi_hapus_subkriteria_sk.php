<?php
include "koneksi.php";
$sql="DELETE FROM `t_sikap` WHERE `id_sikap` =
'$_GET[id_sikap]'";
mysql_query($sql) or die("Gagal Menghapus");
header ("location:tampil_data_subkriteria_sk.php");
?>