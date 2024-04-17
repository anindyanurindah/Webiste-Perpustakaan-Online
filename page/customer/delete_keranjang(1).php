<?php
include('../../config.php');
$bk=$_GET['id'];
mysqli_query($con,"DELETE FROM keranjang WHERE id_pembeli='$bk'");
header("location:index.php?pesan=suwon");
 ?>