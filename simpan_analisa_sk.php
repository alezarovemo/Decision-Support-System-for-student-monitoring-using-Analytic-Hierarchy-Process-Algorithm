<?php
include "koneksi.php";
$sql="INSERT INTO `t_b_sk`(
`b_sk1`,
`b_sk2`,
`b_sk3`
)
VALUES ('$_POST[b_sk1]', '$_POST[b_sk2]', '$_POST[b_sk3]')";
mysql_query($sql) or die("Gagal Menyimpan");
?>

<?php
include "koneksi.php";
$sql="INSERT INTO `t_pb_sk`(
`sk1`,
`sk2`,
`sk3`,
`sk4`,
`sk5`,
`sk6`,
`sk7`,
`sk8`,
`sk9`,
`sk10`,
`sk11`,
`sk12`
)
VALUES ('$_POST[sk1]', '$_POST[sk2]', '$_POST[sk3]', '$_POST[sk4]','$_POST[sk5]','$_POST[sk6]','$_POST[sk7]','$_POST[sk8]','$_POST[sk9]', 
'$_POST[sk10]','$_POST[sk11]','$_POST[sk12]')";
mysql_query($sql) or die("Gagal Menyimpan");
header ("location:tampil_data_subkriteria_sk.php");
?>