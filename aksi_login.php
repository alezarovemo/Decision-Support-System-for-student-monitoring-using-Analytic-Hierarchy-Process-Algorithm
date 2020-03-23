<?php
include "koneksi.php";
// Fungsi SQL Injection
function antiinjection($data){
 $filter_sql =
mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars
($data,ENT_QUOTES))));
 return $filter_sql;
}
// Inisialisasi data pada variabel username dan password yangsudah di Filter
$username = antiinjection($_POST['username']);
$password = antiinjection(md5($_POST['password']));
// Mencari record dengan username dan password yang dikirim
$sql="SELECT * FROM t_pengguna WHERE username='$username' AND
password='$password' ";
$tampil=mysql_query($sql);
$jumlah=mysql_num_rows($tampil);
$data=mysql_fetch_array($tampil);
// Apabila username dan password ditemukan
if ($jumlah > 0){
 session_start();
// Inisialisasi data pada session
 $_SESSION[username] = $data['username'];
 $_SESSION[password] = $data['password'];
 $_SESSION[level] = $data['level'];
 $_SESSION[nama_lengkap] = $data['nama_lengkap'];
 header('location:halaman_utama.php');
}
// Apabila login gagal
else{
 echo "<script>alert('Login Gagal, username atau password tidak
cocok'); window.location = 'form_login.php'</script>";
}
?>