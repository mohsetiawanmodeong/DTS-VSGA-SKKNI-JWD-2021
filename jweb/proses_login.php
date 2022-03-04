<?php

include ("koneksi.php");

$username= $_POST['username'];
$password= $_POST['password'];

$sql = mysqli_query($con,"SELECT * FROM pengguna WHERE username='$username' AND pass='$password'");
$selek = mysqli_fetch_array($sql);
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
	session_start();
	$_SESSION['nama'] = $selek['nama'];
	echo "<script>alert('berhasil login');window.document.location.href='home.php'</script>";
} else {
	echo "<script>alert('gagal login');window.document.location.href='index.php'</script>";
}




?>
