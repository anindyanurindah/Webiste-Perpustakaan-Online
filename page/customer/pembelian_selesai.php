<div style="margin-top: -5px; width:100%,height:50px;text-align:center;background:#544179;color:#fff;line-height:60px;font-size:25px;">
<b>Pembelian Selesai</b>
</div>
<?php
$id_pembeli = $_SESSION['id_pembeli'];
$query_checkout = mysqli_query($con,"SELECT * from  chekout where id_pembeli='$id_pembeli' && active='T'");
$data_chekout = mysqli_fetch_array($query_checkout);
?>
<h3><b>Data Penerima :</b></h3>
<table>
	<tr>
		<td><p><b>Nama</b></p></td>  	<td>: <?php echo $data_chekout['nama']; ?></td>
	</tr>

	<tr>
		<td><p><b>Alamat</b></p></td>	<td>: <?php echo $data_chekout['alamat']; ?></td>
	</tr>

	<tr>
		<td><p><b>Nomor Telepon</b></p></td>	<td>: <?php echo $data_chekout['nomor_tlp']; ?></td>
	</tr>
</table>
<h3><b>Data Order</b></h3>
<?php
$qry = mysqli_query($con,"SELECT * from keranjang where id_pembeli='$id_pembeli'");
?>
<div class="jumbotron" style="background-color: #6166B3;">
<table class="table table-bordered">
	<th>judul buku</th><th>qty</th>
	<?php while($keranjang=mysqli_fetch_array($qry)){?>
		<tr>
		<td><?php
		$q = mysqli_query($con,"SELECT * from buku where id_buku='$keranjang[id_buku]'");
		$d = mysqli_fetch_array($q);
		$judul = $d['judul']; echo $judul;
		$qbyar = mysqli_fetch_array(mysqli_query($con,"SELECT SUM(total_harga) as total_bayar from keranjang where id_pembeli='$id_pembeli'"));
		$bayar = $qbyar['total_bayar'];
		?>
			
		</td>
		<td><?php echo $keranjang['qty']?></td>
		</tr>
<?php } ?>
<tr>
	<td colspan="3">Ongkos Kirim (Paten)</td><td>Rp.20,000,00</td>
</tr>
<tr>	
	<td colspan="3">Total Bayar</td><td>Rp.<?php $t_bayar=$bayar+20000; echo number_format($t_bayar); ?>,00</td>
</tr>
</table>
<p>Selanjutnya anda harus megirimkan uang yang tertera pada total bayar ke <b>No Rek 00112233</b> atas nama <b>Minceu Cantip</b>. Setelah melakukan pembayaran anda bisa mengonfirmasi melalulu <b>No.Tlp. 088237478997</b>. <a href="index.php" class="btn btn-danger" style="background: #BC8CF2;"> Selesai</a> </p>
</div>