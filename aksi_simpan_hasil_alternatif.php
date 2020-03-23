<?php
include "koneksi.php";
$sql="INSERT INTO `t_h_analisa`(
`nama`,
`ab`,
`sk`,
`pl`,
`ptt`,
`na`,
`hasil_a`,
`ketentuan`
)
VALUES ('$_POST[nama]', '$_POST[ab]',
'$_POST[sk]', '$_POST[ptt]', '$_POST[na]', '$_POST[hasil_a]',
'$_POST[ketentuan]')";
mysql_query($sql) or die("Gagal Menyimpan");
?>