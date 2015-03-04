<?php echo form_open('cart_control/add_cart_from_home');?>
<?php print_r($hotlist) ?>
<?php foreach ($datalist as $row) { ?>

<div class="col-sm-4">
	<div class="thumbnail" style="padding: 0;">
		<!--Gambar Thumbnail Produk-->
		<img class="img-rounded" style="padding: 6px;" src="<?php echo base_url('doc/themes/public/img/produk/' . $row['img_produk']); ?>">
		<?php if ($row['stok_produk'][0]) {//start if stok=0 ?>
		<span class="stock">Stok <?php echo $row['stok_produk']; ?> Unit</span>
		<?php } else { ?>
		<span class="stock red">Stok Kosong</span>
		<?php }//end if stok=0 ?>
		<!--/Gambar Thumbnail Produk-->

		<!--Deskripsi---->
		<div class="caption text-center" style="background-color: rgb(241, 241, 241); margin-left: 0; padding-left: 0;">
			<h3><b><?php echo $row['nama_produk']; ?></b></h3><!--Judul/nama barang-->
			<p style="color:red;"><span>Rp </span><span><?php echo number_format($row['harga_produk']) . '.00'; ?></span></p><!--Harga-->


			<p><a href="<?php echo site_url('home/detailproduk/' . $row['id_produk']); ?>" class="btn btn-default"  role="button">Detail</a> 
				<button type="submit" class="btn btn-warning" role="button">Beli</button>
			</p>
	
		</div>
		<!--/Deskripsi---->

		<div class="row">
			<small class="col-xs-6 col-xs-offset-3 ellipsis center" style="">
				Penjual : <a href="#"><?php echo $row['nama_penjual']; ?></a>
			</small>
		</div>
	</div>
</div><!--close thumbnail group-->
<?php } ?>
</form>