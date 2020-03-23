<?php
include "koneksi.php";
$sql="INSERT INTO `t_kriteria`(
`k2`,
`k3`,
`k4`,
`k5`,
`k8`,
`k9`,
`k10`,
`k14`,
`k15`,
`k20`
)
VALUES ('$_POST[k2]', '$_POST[k3]',
'$_POST[k4]', '$_POST[k5]', '$_POST[k8]', '$_POST[k9]',
'$_POST[k10]', '$_POST[k14]', '$_POST[k15]', '$_POST[k20]')";
mysql_query($sql) or die("Gagal Menyimpan");
header ("location:tampil_data_kriteria.php");
?>