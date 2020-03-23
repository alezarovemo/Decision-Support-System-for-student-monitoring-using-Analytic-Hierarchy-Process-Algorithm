<?php
include "koneksi.php";
$sql="INSERT INTO `t_ptt`(
`t2`,
`t3`,
`t6`
)
VALUES ('$_POST[t2]', '$_POST[t3]', '$_POST[t6]')";
mysql_query($sql) or die("Gagal Menyimpan");
header ("location:tampil_data_subkriteria_ptt.php");
?>