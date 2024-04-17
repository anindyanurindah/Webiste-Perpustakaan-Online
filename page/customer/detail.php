<?php
include"../../config.php";
@$kd = $_GET['id'];
$qry = mysqli_query($con,"SELECT * from buku where id_buku='$kd'");
$data = mysqli_fetch_array($qry);
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
          <li class="a"><a href="detail.php?page=keranjang" style="color:#fff; background: #3F3351;"><span class="glyphicon glyphicon-shopping-cart"> Keranjang buku[<?php 
          $qcek=mysqli_query($con,"SELECT * from keranjang where id_pembeli='$_SESSION[id_pembeli]' && status = 'new'");$cek=mysqli_num_rows($qcek); 
          $q_cekout= mysqli_query($con,"SELECT * from chekout JOIN keranjang ON keranjang.id_chekout = chekout.id_chekout where keranjang.id_pembeli='$_SESSION[id_pembeli]' && active = 'T'");
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
<li><?php include("kat.php");?></li>

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
              <li><a href="detail.php?page=orderhistory"><span class="glyphicon glyphicon-refresh" style="background: #3F3351;">Order History</span></a></li>
            <li><a href="../admin/outpage.php"><span class="glyphicon glyphicon-log-out" style="background: #3F3351;">Keluar</span></a></li>
            </ul>
          </li>
          </ul>
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
     <?php
@$aksi = $_GET['aksi'];
$tanggal = date("d-m-Y");
if($aksi=="checkout")
{?>
   <div class="jumbotron" style="background-color: #544179">
      <div class="row">
      <div class="col-md-6" style="margin-left:70px; margin-top: 80px;">
        <h2><b>Selamat datang di Perpustakaan Online.<h1 style="color:darkblue;">Cheap Book</h1></h2>
        <p>Disini anda bisa membeli dan meminjam buku dengan mudah, tidak perlu lagi jauh jauh datang ke perpustakaan.</p>
      </div>
    </div>
    </div>
  <div style="margin-top: -50px; width:100%,height:50px;text-align:center;background:#6166B3;color: darkred;line-height:60px;font-size:25px;">
<b>Checkout</b>
</div><br>
<form action="proses_chekout.php" method="post">
<label>Nama Penerima</label>
<input type="text" name="nama" placeholder="Nama Anda" class="form-control">
<label>Alamat Lengkap</label>
<input type="text" name="alamat" placeholder="jalan/Dusun/Desa/Kecamatan/Kabupaten/Provinsi/kode pos" class="form-control"><br>
<label>Nomor Telepon</label>
<input type="text" name="nomor_tlp" placeholder="Nomor Telepon Anda" class="form-control"><br>
<label>Tanggal</label>
<input type="text" name="tanggal"  class="form-control" value="<?php echo $tanggal; ?>" readonly>
<input type="submit" class="btn btn-info" value="selesai">
</form> 
 <?php }else{
    @$page = $_GET['page'];
    if($page=="keranjang"){
      include("keranjang.php");
    }
    else if($page=="orderhistory"){
      include("orderhistory.php");
    }
    else if($page==""){
    ?>
    <div class="jumbotron" style="background-color: #544179">
      <div class="row">
      <div class="col-md-3" style="margin:30px;">
     <img src="../../gambar/<?php echo $data['gambar']; ?>" style="width:250px; height:250px;">   
    </div>
      <div class="col-md-6" style="margin-left:10px ; margin-top:10px;">
        <table>
          <tr>
            <h3><td><b>Judul</b></td>   <td>: <?php echo $data['judul']; ?></td></h3>
          </tr>

          <tr>
            <h3><td><b>Penerbit</b></td>    <td>: <?php echo $data['penerbit']; ?></td></h3>
          </tr>

          <tr>
            <h3><td><b>Pengarang</b></td>   <td>: <?php echo $data['pengarang']; ?></td></h3>
          </tr>

          <tr>
            <h3><td><b>Halaman</b></td>   <td>: <?php echo $data['halaman']; ?></td></h3>
          </tr>

          <tr>
            <h3><td><b>Stok</b></td>    <td>: <?php echo $data['stok']; ?></td></h3>
          </tr>
        </table><br><br>
        <form action="tambah_keranjang.php" method="post">

              <input type="number" name='qty' value="0" min="0" max="<?php echo $data['stok']; ?>" style="color: #000000">
              <input type="hidden" name='id_buku' value="<?php echo $data['id_buku'];?>">
              <?php if($data['stok']==0){ ?>
                 <a href="#" class="btn btn-danger">Tidak dapat membeli</a>
                <?php }
                else{?>
         <button type="submit" class="btn btn-success" style="background: #BC8CF2;">Pinjam</button>
         <?php } ?>
         </form>
        </div>
    </div>
    </div>
<?php } ?>
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
        <center><img src="../../gambar/<?php echo $buku['gambar'] ?>" style="margin-top:20px; width:200px;height:190px;"></center>
         <h3 style="text-align:center; color:#ffffff;"><?php echo $buku['judul'] ?></h3>
          <center><b>Stok</b> (<?php echo $buku['stok']; ?>)</center>
          <center><a class="btn btn-danger" href="detail.php?id=<?php echo $buku['id_buku'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>

        <?php } }?>
      </div>

      <hr>

      
    </div> 
  
        <div class="copyright" style="line-height:50px; background: #864879;">
        <center>Kelompok 5 © 2021 All Rights Reserved | <a href="#">Cheap Book</a></center>
        </div>
      </div>
  </body>
</html>
