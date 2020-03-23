<?php
include "koneksi.php";
$sql="UPDATE `t_ptt` SET
`t2` = '$_POST[t2]',
`t3` = '$_POST[t3]',
`t6` = '$_POST[t6]' WHERE `id_ptt` =
'$_POST[id_ptt2]';";
mysql_query($sql) or die("Gagal Memperbaharui");
header ("location:tampil_data_subkriteria_ptt.php");
?>
