<?php

session_start();
session_destroy();
echo "<script>alert('berhasil logout');window.document.location.href='index.php'</script>";

?>
