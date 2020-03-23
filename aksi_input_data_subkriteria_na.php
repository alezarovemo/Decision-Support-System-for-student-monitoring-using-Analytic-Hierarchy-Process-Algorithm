<?php
include "koneksi.php";
$sql="INSERT INTO `t_nilai`(
`n2`,
`n3`,
`n4`,
`n7`,
`n8`,
`n12`
)
VALUES ('$_POST[n2]', '$_POST[n3]',
'$_POST[n4]', '$_POST[n7]', '$_POST[n8]', '$_POST[n12]')";
mysql_query($sql) or die("Gagal Menyimpan");
header ("location:tampil_data_subkriteria_na.php");
?>