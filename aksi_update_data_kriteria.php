<?php
include "koneksi.php";
$sql="UPDATE `t_kriteria` SET
`k2` = '$_POST[k2]',
`k3` = '$_POST[k3]',
`k4` = '$_POST[k4]',
`k5` = '$_POST[k5]',
`k8` = '$_POST[k8]',
`k9` = '$_POST[k9]',
`k10` = '$_POST[k10]',
`k14` = '$_POST[k14]',
`k15` = '$_POST[k15]',
`k20` = '$_POST[k20]' WHERE `id_kriteria` =
'$_POST[id_kriteria2]';";
mysql_query($sql) or die("Gagal Memperbaharui");
header ("location:tampil_data_kriteria.php");
?>
