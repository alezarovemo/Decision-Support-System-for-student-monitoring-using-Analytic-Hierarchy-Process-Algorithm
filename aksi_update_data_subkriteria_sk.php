<?php
include "koneksi.php";
$sql="UPDATE `t_sikap` SET
`s2` = '$_POST[s2]',
`s3` = '$_POST[s3]',
`s6` = '$_POST[s6]' WHERE `id_sikap` =
'$_POST[id_sikap2]';";
mysql_query($sql) or die("Gagal Memperbaharui");
header ("location:tampil_data_subkriteria_sk.php");
?>
