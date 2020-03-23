<?php
include "koneksi.php";
$sql="INSERT INTO `t_absensi`(
`ab2`,
`ab3`,
`ab4`,
`ab7`,
`ab8`,
`ab12`
)
VALUES ('$_POST[ab2]', '$_POST[ab3]',
'$_POST[ab4]', '$_POST[ab7]', '$_POST[ab8]', '$_POST[ab12]')";
mysql_query($sql) or die("Gagal Menyimpan");
header ("location:tampil_data_subkriteria_ab.php");
?>