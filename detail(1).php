<?php
include"config.php";
$id = $_GET['id'];
$qry = mysqli_query($con,"SELECT * from buku where id_buku='$id'");
$data = mysqli_fetch_array($qry);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cheap Book</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top" style="background:#6166B3;">
      <div class="container-fluid">
        <div class="navbar-header">
          
        <a class="navbar-brand" href="#"><img src="images/logo cheap book.jpg" style="width:170px; margin-top: -5px;"></a>
        </div>
        <div class="collapse navbar-collapse">


        <div class="nav navbar-nav navbar-right">
         <ul id="nav">
          <li ><a href="index.php" style="color:#fff; background: #3F3351;"><span class="glyphicon glyphicon-home"> Home | </span></a></li>
          <li class="a"><a href="" style="color:#fff; background: #3F3351;"><span class="glyphicon glyphicon-shopping-cart"> Daftar Bacaan| </span></a></li>
          <li><a href="" style="color:#fff; background: #3F3351;" ><span class="glyphicon glyphicon-list"> Kategori | </span></a>
<ul>
<li><?php include("kat.php");?></li>

</ul>
</li>
          <li class="a"><a href="login.php" style="color:#fff; background: #3F3351;"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
          </ul>
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
    <div class="jumbotron" style="background: #544179;">
      <div class="row">
      <div class="col-md-3" style="margin:30px;">
     <img src="gambar/<?php echo $data['gambar']; ?>" style="width:250px; height:250px;">   
    </div>
      <div class="col-md-6" style="margin-left:10px ; margin-top:10px; color:#000;">
        <table>
        	<tr>
        		<h3><td><b>Judul</b></td>		<td>: <?php echo $data['judul']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Penerbit</b></td>		<td>: <?php echo $data['penerbit']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Pengarang</b></td>		<td>: <?php echo $data['pengarang']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Halaman</b></td>		<td>: <?php echo $data['halaman']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Stok</b></td>		<td>: <?php echo $data['stok']; ?></td></h3>
        	</tr>
        </table><br><br>
         <input type="number" name='qty' value="0" min="0" max="<?php echo $data['stok']; ?>">
         <a href="login.php?pesan=a" class="btn btn-success" style="background: #BC8CF2;">Pinjam</a>
        </div>
    </div>
    </div>

    <div style="margin-top: -30px; width:100%,height:50px;text-align:center;background:#6166B3;color:darkred;line-height:60px;font-size:25px;">
<b>Daftar Buku</b>
</div>
<div class="container">
      <div class="row">
      <?php
      $qrybuku= mysqli_query($con,"SELECT * from buku");
      while($buku = mysqli_fetch_array($qrybuku)) {
      ?>

      <div class="col-md-3" style="margin-top:20px;">
        <div class="buku">
        <center><img src="gambar/<?php echo $buku['gambar'] ?>" style="margin-top:20px; width:210px;height:190px;"></center>
         <h3 style="text-align:center; color:#ffffff;"><?php echo $buku['judul'] ?></h3>
          <center><b>Stok</b> (<?php echo $buku['stok']; ?>)</center>
          <center><a class="btn btn-danger" href="detail.php?id=<?php echo $buku['id_buku'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>

        <?php } ?>
      </div>

      <hr>

      
    </div> 
   <div class="footer" style="width:100%;height:270px;color:#fff;background:#929292;">
      <div class="row" style="background:#000000;">
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#ffffff"><h3><b>Tentang Cheap Book</b></h3></li>
        </ul></center>
          <hr>
        <ul>
          <li><b>Cheap Book</b> adalah</li>
          <li>Sebuah toko buku online</li>
          <li>yang menyediakan semua</li>
          <li>jenis buku dengan pemilihan</li>
          <li>berdasarkan kategori.</li>
        </ul>
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#ffffff"><h3><b>Alamat</b></h3></li>
        </ul></center>
          <hr>
    
          <ul>
          <li>Jl. Kenangan Raya</li>
          <li>No. 37</li>
          <li>Sleman </li>
          <li>Yogyakarta</li>
          <li></li>
        </ul>
      
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
         <ul>
          <li style="color:#ffffff"><h3><b>Contact Us</b></h3></li>
          <hr>
         <div class="row">
          <div class="col-md-4">
          <a href="www.fecebook.com"><img src="images/fb.png" style="width:70px;height:75px;  "></a>
          </div>
          <div class="col-md-4">
          <a href="www.googleplus.com"><img src="images/gp.png" style="width:70px;height:75px;"></a>
          </div>
          <div class="col-md-4">
          <a href=""><img src="images/Twitter.png" style="width:70px;height:75px;"></a>
          </div>
         </div>
        </ul>
        </center>
      </div>
      </div>
      </div>
        <div class="copyright" style="line-height:50px; background: #864879;">
        <center>Kelompok 5 © 2021 All Rights Reserved | <a href="#">Cheap Book</a></center>
        </div>
      </div>
  </body>
</html>