<?php
include "koneksi.php";
$sql="INSERT INTO `t_sikap`(
`s2`,
`s3`,
`s6`
)
VALUES ('$_POST[s2]', '$_POST[s3]', '$_POST[s6]')";
mysql_query($sql) or die("Gagal Menyimpan");
header ("location:tampil_data_subkriteria_sk.php");
?>