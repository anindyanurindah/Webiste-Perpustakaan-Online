<?php
include"../../config.php";
$no = 1;
$qry_buku = mysqli_query($con,"SELECT * from buku");
?>
<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #6B4F4F;">
                        <div class="product-status-wrap" style="background: #6B4F4F;">
<a href="index.php?page=input_buku" class="btn btn-success" style="margin-top:20px; background: #C7BEA2; color: darkblue;"><span class="glyphicon glyphicon-plus"> TAMBAH BUKU</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("input_buku.php");
}
?>
							
							<table style="margin-top:20px; border: none;">
								<tr>
							 
								<th style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center>No</center></th>
								<th style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center>Judul</center></th>
								<th style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center>Penerbit</center></th>
								<th style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center>Pengarang</center></th>
								<th style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center>Gambar</center></th>
								<th style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center>Halaman</center></th>
								<th style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center>Stok</center></th>
								<th style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center>Aksi</center></th>
							</tr>
								<?php while($data = mysqli_fetch_array($qry_buku)) { ?>
								<tr>
								 <td style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center><?php echo $no++ ?></center></td>
								 <td style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center><?php echo $data['judul'] ?></center></td>
								 <td style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center><?php echo $data['penerbit'] ?></center></td>
								 <td style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center><?php echo $data['pengarang'] ?></center></td>
								 <td style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center><img src="../../gambar/<?php echo $data['gambar'] ?>" style="width:100px;"></center></td>
								 <td style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center><?php echo $data['halaman'] ?></center></td>
								 <td style="margin-top:  -10px; margin-bottom: -10px; border: none;"><center><?php echo $data['stok'] ?></center></td>
								 <td style="margin-top:  -10px; margin-bottom: -10px; border: none;"><a href="index.php?page=editbuku&id=<?php echo $data['id_buku']; ?>"><center><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;<a href="hapus_book.php?id=<?php echo $data['id_buku']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></center></a></td>
								</tr>
								<?php } ?>
							</table>
 						</div>
                    </div>
</div>