<?php
include "koneksi.php";
$sql="UPDATE `t_absensi` SET
`ab2` = '$_POST[ab2]',
`ab3` = '$_POST[ab3]',
`ab4` = '$_POST[ab4]',
`ab7` = '$_POST[ab7]',
`ab8` = '$_POST[ab8]',
`ab12` = '$_POST[ab12]' WHERE `id_absensi` =
'$_POST[id_absensi2]';";
mysql_query($sql) or die("Gagal Memperbaharui");
header ("location:tampil_data_subkriteria_ab.php");
?>
