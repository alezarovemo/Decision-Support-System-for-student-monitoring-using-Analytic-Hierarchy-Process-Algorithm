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
`keterangan`
)
VALUES ('$_POST[nama]', '$_POST[ab]',
'$_POST[sk]', '$_POST[pl]', '$_POST[ptt]', '$_POST[na]',
'$_POST[hasil_a]', '$_POST[keterangan]')";
mysql_query($sql) or die("Gagal Menyimpan");
header ("location:tampil_hasil_analisa_alternatif.php");
?>