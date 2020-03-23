<?php
include "koneksi.php";
$sql="INSERT INTO `t_b_kriteria`(
`b_na`,
`b_ab`,
`b_ptt`,
`b_sk`,
`b_pl`
)
VALUES ('$_POST[b_na]', '$_POST[b_ab]', '$_POST[b_ptt]', '$_POST[b_sk]','$_POST[b_pl]')";
mysql_query($sql) or die("Gagal Menyimpan");
?>

<?php
include "koneksi.php";
$sql="INSERT INTO `t_per_kriteria`(
`k1`,
`k2`,
`k3`,
`k4`,
`k5`,
`k6`,
`k7`,
`k8`,
`k9`,
`k10`,
`k11`,
`k12`,
`k13`,
`k14`,
`k15`,
`k16`,
`k17`,
`k18`,
`k19`,
`k20`,
`k21`,
`k22`,
`k23`,
`k24`,
`k25`,
`k26`,
`k27`,
`k28`,
`k29`,
`k30`
)
VALUES ('$_POST[k1]', '$_POST[k2]', '$_POST[k3]', '$_POST[k4]','$_POST[k5]','$_POST[k6]','$_POST[k7]','$_POST[k8]','$_POST[k9]', 
'$_POST[k10]','$_POST[k11]','$_POST[k12]','$_POST[k13]','$_POST[k14]','$_POST[k15]','$_POST[k16]','$_POST[k17]','$_POST[k18]','$_POST[k19]','$_POST[k20]','$_POST[k21]','$_POST[k22]','$_POST[k23]','$_POST[k24]','$_POST[k25]','$_POST[k26]','$_POST[k27]','$_POST[k28]','$_POST[k29]','$_POST[k30]')";
mysql_query($sql) or die("Gagal Menyimpan");
header ("location:tampil_data_kriteria.php");
?>