<?php
include"../../config.php";
session_start();
if(!isset($_SESSION['username']))
{
  header("location:../../login.php");
}
$nama = $_SESSION['nama'];
@$pesan = $_GET['pesan'];
if($pesan=="blok")
{
  echo"<script type='text/javascript'>alert('anda tidak dapat membeli dikarenakan anda belum membayar / belum di konfirmasi oleh admin');</script>";
}
else if($pesan=="suwon")
{
  echo"<script type='text/javascript'>alert('terima kasih telah melakukan konfirmasi :-) , anda dapat melakukan pembelian lagi setelah permintaan konfirmasi anda di konfirmasi oleh admin');</script>";
}
else if($pesan=="sudah konfirmasi")
{
  echo"<script type='text/javascript'>alert('anda sudah konfirmasi , anda dapat melakukan pembelian lagi setelah permintaan konfirmasi anda di konfirmasi oleh admin');</script>";
}
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
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top" style="background:#6166B3;">
      <div class="container-fluid">
        <div class="navbar-header">
          
         <a class="navbar-brand" href="#"><img src="../../images/logo cheap book.jpg" style="width:170px; margin-top: -4px;"></a>

        </div>
        <div class="collapse navbar-collapse">

        <div class="nav navbar-nav navbar-right">
         <ul id="nav">
          <li ><a href="index.php" style="color:#fff; background: #3F3351;"><span class="glyphicon glyphicon-home"> Home | </span></a></li>
          <li class="a"><a href="detail.php?page=keranjang" style="color:#fff; background: #3F3351;"><span class="glyphicon glyphicon-shopping-cart"> Keranjang[<?php 
          $qcek=mysqli_query($con,"SELECT * from keranjang where id_pembeli='$_SESSION[id_pembeli]' && status = 'new'");$cek=mysqli_num_rows($qcek); 
          $q_cekout= mysqli_query($con,"SELECT * from chekout JOIN keranjang ON keranjang.id_chekout = chekout.id_chekout where keranjang.id_pembeli='$_SESSION[id_pembeli]' && active ='T'");
          $cekout = mysqli_num_rows($q_cekout);
          if($cekout>=1)
          {
          echo "0";
          }
          else{
          echo $cek;
          }  ?>]</span></a></li>
          <li><a href="" style="color:#fff; background: #3F3351;" ><span class="glyphicon glyphicon-list"> Kategori | </span></a>
<ul>
<li><?php include("../../kat.php");?></li>

</ul>
</li>
          <li class="a"><a href="cara_pesan.php" style="color:#fff; background: #3F3351;"><span class="glyphicon glyphicon-question-sign"> Cara Pinjam | </span></a></li>
         


          <?php
          $q_cek_cekout = mysqli_query($con,"SELECT * from chekout where id_pembeli='$_SESSION[id_pembeli]' && active='T'");
          $cek_cekout = mysqli_num_rows($q_cek_cekout);
          if($cek_cekout>=1){
          $queri_cek = mysqli_query($con,"SELECT * from chekout where id_pembeli='$_SESSION[id_pembeli]' && status_terima='sudah diterima' && active ='T'");
          $cek = mysqli_num_rows($queri_cek);
          if($cek>=1)
          {?>
          <li><a href="index.php?pesan=sudah konfirmasi"><span class="glyphicon glyphicon-check" style="color:#fff; background: #3F3351;"> Konfirmasi | </span></a></li><?php
          }else{
          ?>
          <li><a href="cara_pesan.php?page=konfirmasi"><span class="glyphicon glyphicon-check" style="color:#fff; background: #3F3351;"> Konfirmasi | </span></a></li>
          <?php } }?>




          <li><a href="#"><span class="glyphicon glyphicon-user" style="color:#fff; background: #3F3351;"> <?php echo $nama; ?></span></a>
<ul>
  <!--<li><a href="detail.php?page=orderhistory"><span class="glyphicon glyphicon-refresh">Order History</span></a></li>-->
<li><a href="../admin/outpage.php"><span class="glyphicon glyphicon-log-out" style="background: #3F3351;">Keluar</span></a></li>
</ul>
          </li>
          
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
    
    
      
  
      
          <?php if(!$_GET){
      ?>
      <div class="jumbotron" style="background-color: #544179;">
  <?php } else {?>
      <br />
      <br />
    <?php } ?>
    
    

<div style="margin-top: -50px; width:100%,height:50px;text-align:center;background:#6166B3;color:darkred;line-height:60px;font-size:25px;">
<b>Perpustakan Online</b>
</div>
    <div class="container">
      <br>
      <div class="row">
        <div class="col col-md-10">
          <input type="search" class="form-control rounded" placeholder="Ketikkan Judul Buku..." aria-label="Search"
            aria-describedby="search-addon" />
        </div>
        <div class="col col-md-2">
          <button type="button" class="btn btn-info" style="background: #BC8CF2;">Cari Buku</button>
        </div>
      </div>
      <div class="row">
     <?php
      @$idkat = $_GET['id'] ;
      $qrybukukat = mysqli_query($con,"SELECT * from buku where id_ketegori='$idkat'");
      $qrybuku= mysqli_query($con,"SELECT * from buku");
      if($idkat==0){
      while($buku = mysqli_fetch_array($qrybuku)) {
      ?>
      
        <div class="col-md-3" style="margin-top:20px;">
        <div class="buku">
          <center><img src="../../gambar/<?php echo $buku['gambar'] ?>" style="width:180px;height:190px; margin-top:20px;"></center>
          <h3 style="text-align:center; color:#ffffff;"><?php echo $buku['judul'] ?></h3>
          <center><b>Stok</b> (<?php echo $buku['stok']; ?>)</center>
          <center><a class="btn btn-danger" href="detail.php?id=<?php echo $buku['id_buku'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>
        <?php } }
        else{ while($buku1 = mysqli_fetch_array($qrybukukat)){?>
            <div class="col-md-3" style="margin-top:20px;">
        <div class="buku">
          <center><img src="../../gambar/<?php echo $buku1['gambar'] ?>" style="margin-top:20px;width:210px;height:190px;"></center>
        <h3 style="text-align:center; color:#ffffff; "><?php echo $buku1['judul'] ?></h3>
          <center><b>Stok</b> (<?php echo $buku1['stok']; ?>)</center>
          <center><a class="btn btn-danger" href="detail.php?id=<?php echo $buku1['id_buku'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>
          <?php }} ?>
      </div>

      <hr>

      
    </div> 
  
        <div class="copyright" style="line-height:50px; background: #864879; margin-top: 50px;">
        <center>Kelompok 5 © 2021 All Rights Reserved | <a href="#">Cheap Book</a></center>
        </div>
      </div>
  </body>
</html>