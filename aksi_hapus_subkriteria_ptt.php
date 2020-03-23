<?php
include "koneksi.php";
$sql="DELETE FROM `t_ptt` WHERE `id_ptt` =
'$_GET[id_ptt]'";
mysql_query($sql) or die("Gagal Menghapus");
header ("location:tampil_data_subkriteria_ptt.php");
?>