<?php

$con = mysqli_connect("localhost","root","","jweb");

if ($con) {
	echo "berhasil koneksi";
}else{
	echo "gagal koneksi";
}
?>
