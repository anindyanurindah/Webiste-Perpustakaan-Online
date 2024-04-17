<?php
$qry_kategori = mysqli_query($con,"SELECT * from kategori");

	?>
	<div style="margin-top:-10px;width:100%,height:50px;text-align:center;background:#9A9483;color:#fff;line-height:60px;font-size:20px;">
Tambah Buku
</div>


<div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner" style="background: #6B4F4F;">
                                <ul id="myTab3" class="tab-review-design" style="background: #6B4F4F;">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Tambah Buku</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit" style="background: #6B4F4F;">
                                	<form method="post" class="form-group" action="tambah_buku.php" enctype="multipart/form-data" style="background: #6B4F4F;">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon" style="background: #191A19;"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" name="judul" placeholder="Judul Buku" class="form-control" style="background: #191A19;">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon" style="background: #191A19;"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                        <input type="text" name="stok" placeholder="Stok Buku" class="form-control" style="background: #191A19;">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon" style="background: #191A19;"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                                        <input type="text" name="halaman" placeholder="Jumlah Halaman" class="form-control" style="background: #191A19;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon" style="background: #191A19;"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" name="penerbit" placeholder="Penerbit Buku" class="form-control" style="background: #191A19;">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon" style="background: #191A19;"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" name="pengarang" placeholder="Pengarang Buku" class="form-control"style="background: #191A19;">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"style="background: #191A19;"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                                        <input type="file" name="gambar" placeholder="Gambar Buku" class="form-control" style="background: #191A19;">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon" style="background: #191A19;"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                                       <select name="kat" class="form-control" style="background: #191A19;">
                                                       	<option selected>Kategori Buku</option>
														<?php 
														while($kategori=mysqli_fetch_array($qry_kategori)){
														?>
																<option><?php echo $kategori['kategori']; ?></option>
																<?php } ?>
														</select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10" name="simpan" style="background: #191A19;">Add
														</button>
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light" style="background: #191A19;"><a href="product-edit.html" style="color: red;">Reset</a>
														</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>