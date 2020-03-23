<?php
include "koneksi.php";
$sql="INSERT INTO `t_perilaku`(
`p2`,
`p3`,
`p6`
)
VALUES ('$_POST[p2]', '$_POST[p3]', '$_POST[p6]')";
mysql_query($sql) or die("Gagal Menyimpan");
header ("location:tampil_data_subkriteria_pl.php");
?>