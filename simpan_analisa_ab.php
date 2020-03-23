<?php
include "koneksi.php";
$sql="INSERT INTO `t_b_ab`(
`b_ab1`,
`b_ab2`,
`b_ab3`,
`b_ab4`
)
VALUES ('$_POST[b_ab1]', '$_POST[b_ab2]', '$_POST[b_ab3]', '$_POST[b_ab4]')";
mysql_query($sql) or die("Gagal Menyimpan");
?>

<?php
include "koneksi.php";
$sql="INSERT INTO `t_pb_ab`(
`ab1`,
`ab2`,
`ab3`,
`ab4`,
`ab5`,
`ab6`,
`ab7`,
`ab8`,
`ab9`,
`ab10`,
`ab11`,
`ab12`,
`ab13`,
`ab14`,
`ab15`,
`ab16`,
`ab17`,
`ab18`,
`ab19`,
`ab20`
)
VALUES ('$_POST[ab1]', '$_POST[ab2]', '$_POST[ab3]', '$_POST[ab4]','$_POST[ab5]','$_POST[ab6]','$_POST[ab7]','$_POST[ab8]','$_POST[ab9]', 
'$_POST[ab10]','$_POST[ab11]','$_POST[ab12]','$_POST[ab13]','$_POST[ab14]','$_POST[ab15]','$_POST[ab16]','$_POST[ab17]','$_POST[ab18]','$_POST[ab19]','$_POST[ab20]')";
mysql_query($sql) or die("Gagal Menyimpan");
header ("location:tampil_data_subkriteria_ab.php");
?>