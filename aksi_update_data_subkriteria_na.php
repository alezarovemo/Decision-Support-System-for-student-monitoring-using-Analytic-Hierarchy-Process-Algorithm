<?php
include "koneksi.php";
$sql="UPDATE `t_nilai` SET
`n2` = '$_POST[n2]',
`n3` = '$_POST[n3]',
`n4` = '$_POST[n4]',
`n7` = '$_POST[n7]',
`n8` = '$_POST[n8]',
`n12` = '$_POST[n12]' WHERE `id_nilai` =
'$_POST[id_nilai2]';";
mysql_query($sql) or die("Gagal Memperbaharui");
header ("location:tampil_data_subkriteria_na.php");
?>
