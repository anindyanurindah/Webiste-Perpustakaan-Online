<?php
include"../../config.php";
include"delete_keranjang.php";
$id = $_GET['id'];
mysqli_query($con,"UPDATE chekout set status_terima='sudah diterima' where id_pembeli='$id' && active = 'T'");
header("location:index.php?pesan=suwon");
?>