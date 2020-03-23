<?php
include "koneksi.php";
$sql="INSERT INTO `t_b_na`(
`bn1`,
`bn2`,
`bn3`,
`bn4`
)
VALUES ('$_POST[bn1]', '$_POST[bn2]', '$_POST[bn3]', '$_POST[bn4]')";
mysql_query($sql) or die("Gagal Menyimpan");
?>

<?php
include "koneksi.php";
$sql="INSERT INTO `t_pb_na`(
`n1`,
`n2`,
`n3`,
`n4`,
`n5`,
`n6`,
`n7`,
`n8`,
`n9`,
`n10`,
`n11`,
`n12`,
`n13`,
`n14`,
`n15`,
`n16`,
`n17`,
`n18`,
`n19`,
`n20`
)
VALUES ('$_POST[n1]', '$_POST[n2]', '$_POST[n3]', '$_POST[n4]','$_POST[n5]','$_POST[n6]','$_POST[n7]','$_POST[n8]','$_POST[n9]', 
'$_POST[n10]','$_POST[n11]','$_POST[n12]','$_POST[n13]','$_POST[n14]','$_POST[n15]','$_POST[n16]','$_POST[n17]','$_POST[n18]','$_POST[n19]','$_POST[n20]')";
mysql_query($sql) or die("Gagal Menyimpan");
header ("location:tampil_data_subkriteria_na.php");
?>