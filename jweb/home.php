<?php
session_start();

if (!isset($_SESSION['nama'])){
	echo "<script>alert('anda harus login dulu!');window.document.location.href='index.php'</script>";

}

?>

selamat datang <?php echo $_SESSION['nama']?>
<br>
<a href="logout.php">logout.php</a>