<?php
include "koneksi.php";
$sql="INSERT INTO `t_b_ptt`(
`b_p1`,
`b_p2`,
`b_p3`
)
VALUES ('$_POST[b_p1]', '$_POST[b_p2]', '$_POST[b_p3]')";
mysql_query($sql) or die("Gagal Menyimpan");
?>

<?php
include "koneksi.php";
$sql="INSERT INTO `t_pb_ptt`(
`p1`,
`p2`,
`p3`,
`p4`,
`p5`,
`p6`,
`p7`,
`p8`,
`p9`,
`p10`,
`p11`,
`p12`
)
VALUES ('$_POST[p1]', '$_POST[p2]', '$_POST[p3]', '$_POST[p4]','$_POST[p5]','$_POST[p6]','$_POST[p7]','$_POST[p8]','$_POST[p9]', 
'$_POST[p10]','$_POST[p11]','$_POST[p12]')";
mysql_query($sql) or die("Gagal Menyimpan");
header ("location:tampil_data_subkriteria_ptt.php");
?>