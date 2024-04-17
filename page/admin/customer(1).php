<?php
$q = mysqli_query($con,"SELECT * FROM customer");
?>
<div class="row">
<div style="margin-top: -10px;width:100%,height:50px;text-align:center;background:#9A9483;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
<b>DATA CUSTOMER</b>
</div>
<table class="table table-bordered">
	<tr>
		<th style=" background: #E5DCC3; "><center>Nama Customer</center></th>
 		<th style=" background: #E5DCC3; "><center>Username</center></th>
 		<th style=" background: #E5DCC3; "><center>Password</center></th>
 		<th style=" background: #E5DCC3; "><center>Aksi</center></th>
 	</tr>
	<?php while($c=mysqli_fetch_array($q)){?>
	<tr>
		<td style="color: #ffffff"><center><?php echo $c['nama']; ?></center></td>
 		<td style="color: #ffffff"><center><?php echo $c['username']; ?></center></td>
 		<td style="color: #ffffff"><center><?php echo $c['password']; ?></center></td>
 		<td style="color: #ffffff"><center><a href="hapus_cus.php?id=<?php echo $c['id_pembeli']; ?> "><span class="glyphicon glyphicon-trash"></span></a></center></td>
	</tr>
	<?php } ?>
</table>
</div>