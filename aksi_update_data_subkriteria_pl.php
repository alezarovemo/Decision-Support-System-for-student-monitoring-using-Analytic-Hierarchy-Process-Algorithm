<?php
include "koneksi.php";
$sql="UPDATE `t_perilaku` SET
`p2` = '$_POST[p2]',
`p3` = '$_POST[p3]',
`p6` = '$_POST[p6]' WHERE `id_perilaku` =
'$_POST[id_perilaku2]';";
mysql_query($sql) or die("Gagal Memperbaharui");
header ("location:tampil_data_subkriteria_pl.php");
?>
