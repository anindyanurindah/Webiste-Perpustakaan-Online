<?php
include"../../config.php";
$id_pembeli = $_SESSION['id_pembeli'];
$qry = mysqli_query($con,"SELECT * from keranjang where id_pembeli='$id_pembeli' && status = 'new'");
$q_cek = mysqli_query($con,"SELECT * from keranjang JOIN chekout ON keranjang.id_chekout = chekout.id_chekout where keranjang.id_pembeli='$id_pembeli' && active='T'");
$cek_chkout = mysqli_num_rows($q_cek);
@$aksi = $_GET['aksi'];
if($aksi=="hapus"){
	$id_keranjang = $_GET['id'];
	$query_qty = mysqli_query($con,"SELECT * from keranjang where id_keranjang='$id_keranjang'");
	$data_qty = mysqli_fetch_array($query_qty);
	$qty = $data_qty['qty'];
	$id_buku = $data_qty['id_buku'];
	$query_buku = mysqli_query($con,"SELECT * from buku where id_buku='$id_buku'");
	$data_buku = mysqli_fetch_array($query_buku);
	$stok = $data_buku['stok'];
	$stok_ubah = $stok+$qty;
	mysqli_query($con,"UPDATE buku set stok='$stok_ubah' where id_buku='$id_buku'");
	mysqli_query($con,"DELETE from keranjang where id_keranjang='$id_keranjang'");
	header("location:detail.php?page=keranjang");
}
?>
<div class="jumbotron" style="background-color: #544179">
<table class="table table-bordered">
	<th>Judul buku</th><th>QTY</th><th>Aksi</th>
	<?php
	if($cek_chkout < 1){
		while($keranjang=mysqli_fetch_array($qry)){
	 ?>
		<tr>
		<td><?php
		$q = mysqli_query($con,"SELECT * from buku where id_buku='$keranjang[id_buku]'");
		$d = mysqli_fetch_array($q);
		$judul = $d['judul']; echo $judul;
		$qbyar = mysqli_fetch_array(mysqli_query($con,"SELECT SUM(total_harga) as total_bayar from keranjang where id_pembeli='$id_pembeli'"));
		$bayar = $qbyar['total_bayar'];
		?></td>
		<td><?php echo $keranjang['harga'] ?></td>
		<td><?php echo $keranjang['qty']?></td>
		<td><?php echo $keranjang['total_harga']?></td>
		<td><a href="keranjang.php?aksi=hapus&id=<?php echo $keranjang['id_keranjang']; ?>"><center><span class="glyphicon glyphicon-remove"></span></a>
		</tr>
<?php } } ?>
<tr>
	<td colspan="3"><b>Total Bayar</b></td><td><?php echo @$bayar;  ?></td>
	<td><center><a href="detail.php?aksi=checkout" class="btn btn-info" style="background: #BC8CF2;">Checkout</a></center></td>
</tr>
</table>
</div>