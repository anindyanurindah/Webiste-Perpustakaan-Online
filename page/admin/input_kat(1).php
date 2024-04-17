<form method="post" class="form-group">
	<div class="col-md-8" style="margin-bottom:20px;">
	<input type="text" name="kategori" placeholder="kategori baru" style="background: #191A19; width: 400px" class="form-control">
	</div>
	<div class="col-md-1" style="margin-top:4px; margin-left: -355px;">
	<input type="submit" name="simpan" value="simpan" class="btn btn-success">
	</div>
</form>
<?php
@$sim = $_POST['simpan'];
if($sim)
{
	$kat = $_POST['kategori'];
	mysqli_query($con,"INSERT into kategori set kategori='$kat'");
}
?>