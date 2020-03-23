<?php
include "koneksi.php";
$sql="UPDATE `t_alternatif2` SET
`nis` = '$_POST[nis]',
`nama` = '$_POST[nama]',
`tempat` = '$_POST[tempat]',
`tanggal` = '$_POST[tanggal]',
`jurusan` = '$_POST[jurusan]',
`tlp` = '$_POST[tlp]' WHERE `nis` =
'$_POST[nis2]';";
mysql_query($sql) or die("Gagal Memperbaharui");
header ("location:tampil_data_alternatif.php");
?>
