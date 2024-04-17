<?php
include"../../config.php";
session_start();
if(!isset($_SESSION['username']))
{
  header("location:../../login.php");
}
$nama = $_SESSION['nama'];
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
          <li class="a"><a href="" style="color:#fff; background: #3F3351;"><span class="glyphicon glyphicon-shopping-cart"> Keranjang Buku| </span></a></li>
          <li><a href="" style="color:#fff; background: #3F3351;" ><span class="glyphicon glyphicon-list"> Kategori | </span></a>
<ul>
<li><?php include("kat.php");?></li>

</ul>
</li>
         <li class="a"><a href="cara_pesan.php" style="color:#fff; background: #3F3351;"><span class="glyphicon glyphicon-question-sign"> Cara Belanja | </span></a></li>

         <?php
         $q_cek_cekout = mysqli_query($con,"SELECT * from chekout where id_pembeli='$_SESSION[id_pembeli]' && active='T'");
          $cek_cekout = mysqli_num_rows($q_cek_cekout);
          if($cek_cekout>=1){
          $queri_cek = mysqli_query($con,"SELECT * from chekout where id_pembeli='$_SESSION[id_pembeli]' && status_terima='sudah diterima' && active='T'");
          $cek = mysqli_num_rows($queri_cek);
          if($cek>=1)
          {?>
          <li><a href="index.php?pesan=sudah konfirmasi"><span class="glyphicon glyphicon-check" style="color:#fff; background: #3F3351;"> Konfirmasi | </span></a></li><?php
          }else{
          ?>
          <li><a href="cara_pesan.php?page=konfirmasi"><span class="glyphicon glyphicon-check" style="color:#fff; background: #3F3351;"> Konfirmasi | </span></a></li>
          <?php }} ?>

         
           <li><a href="#"><span class="glyphicon glyphicon-user" style="color:#fff; background: #3F3351;"> <?php echo $nama; ?></span></a>
                <ul>
                  <li><a href="../admin/outpage.php"><span class="glyphicon glyphicon-log-out" style="background: #3F3351;">Keluar</span></a></li>
                </ul>
          </li>
          
          </ul>
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
    <?php
    @$page= $_GET['page'];
    if($page=="pembelian_selesai")
    {
      include("pembelian_selesai.php");
    }
    else if($page=="konfirmasi")
    {
      include("konfirmasi.php");
    }
    else{
    ?>
     <div class="jumbotron" style="background-color: #544179">
      <div class="row">
      <div class="col-md-6" style="margin-left:70px; margin-top: 80px;">
        <h2><b>Selamat datang di Perpustakaan Online<h1 style="color:darkblue;">Cheap Book</h1></h2>
        <p>Disini anda dapat meminjam buku dengan lebih mudah, tanpa harus jauh-jauh datang ke perpustakaan.</p>
      </div>
    </div>
    </div>
    <div style="margin-top:-40px;width:100%,height:50px;text-align:center;background:#6166B3;color:darkred;line-height:70px;font-size:25px;margin-bottom:20px;">
Cara Pinjam
</div>
      <div class="jumbotron" style="margin-top:-30px; background-color: #544179;">
      <div class="row" style="margin:20px;">

		  <p><h3><b>1. Pembayaran dilakukan dalam jangka waktu 1x24 jam setelah melakukan pemesanan.<br>
          2. Pembayaran dapat dilakukan melalui transfer ke Rekening kami. Melalui  Konfirmasi Pembayaran.<br>
          3. Setelah melakukan pembayaran, konfirmasi pembayaran dikirim ke-<br>
          <br>
    <p style="color:yellow; font-size: 25px;">Minceu Cantip,
    Bank Central Asia(BCA),
    No Rek 00112233</p>
    <br>
          4. Selanjutnya buku yang telah dipesan akan dikirimkan dalam waktu maksimal 7 Hari.<br>
          5. Kami mengirimkan barang dengan menggunakan jasa pengiriman barang via POST<br><br></b></p>
    <p style="color:darkred; font-size:25px;">Note: Harga buku belum termasuk ongkos kirim, dan ongkos kirim akan disesuaikan dengan tujuan pengiriman.</p></h3>
    </div>
    </div>

    
      <?php } ?>
 

        <div class="copyright" style="line-height:50px;background: #864879;">
        <center>Kelompok 5 © 2021 All Rights Reserved | <a href="#">Cheap Book</a></center>
        </div>
      </div>
  </body>
</html>
