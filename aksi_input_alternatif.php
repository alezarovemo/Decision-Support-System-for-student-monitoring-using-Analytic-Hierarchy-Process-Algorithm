<?php
include "koneksi.php"; //ini untuk masuk ke database
$cekdulu= "select * from t_alternatif2 where nis='$_POST[nis]'"; //username dan $_POST[un] diganti sesuai dengan yang kalian gunakan
$prosescek= mysql_query($cekdulu);
if (mysql_num_rows($prosescek)>0) { //proses mengingatkan data sudah ada
    echo "<script>alert('NIS sudah ada');history.go(-1) </script>";
}
else { //proses menambahkan data, tambahkan sesuai dengan yang kalian gunakan
 $sql="INSERT INTO `t_alternatif2`(
`nis`,
`nama`,
`tempat`,
`tanggal`,
`jurusan`,
`tlp`
)
VALUES ('$_POST[nis]', '$_POST[nama]',
'$_POST[tempat]', '$_POST[tanggal]', '$_POST[jurusan]', '$_POST[tlp]')";
mysql_query($sql) or die("Gagal Menyimpan");
header ("location:tampil_data_alternatif.php");
}
?>