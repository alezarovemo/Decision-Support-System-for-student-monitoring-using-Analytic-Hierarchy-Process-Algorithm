<?php
include "koneksi.php";
$sql="INSERT INTO `t_b_pl`(
`b_pl1`,
`b_pl2`,
`b_pl3`
)
VALUES ('$_POST[b_pl1]', '$_POST[b_pl2]', '$_POST[b_pl3]')";
mysql_query($sql) or die("Gagal Menyimpan");
?>

<?php
include "koneksi.php";
$sql="INSERT INTO `t_pb_pl`(
`pl1`,
`pl2`,
`pl3`,
`pl4`,
`pl5`,
`pl6`,
`pl7`,
`pl8`,
`pl9`,
`pl10`,
`pl11`,
`pl12`
)
VALUES ('$_POST[pl1]', '$_POST[pl2]', '$_POST[pl3]', '$_POST[pl4]','$_POST[pl5]','$_POST[pl6]','$_POST[pl7]','$_POST[pl8]','$_POST[pl9]', 
'$_POST[pl10]','$_POST[pl11]','$_POST[pl12]')";
mysql_query($sql) or die("Gagal Menyimpan");
header ("location:tampil_data_subkriteria_pl.php");
?>