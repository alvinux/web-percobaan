<section id="detail-profile" class="container">
		<div class="row">
			
				<div class="col-sm-6"><!--Thumbail Profile-------->
					<div class="portfolio-item"><!------Thumnail Poto-------->
						<div class="item-inner margin20">
							<img class="img-responsive" src="<?php echo base_url(); ?>doc/themes/public/images/portfolio/recent/item2.png" alt="">
							<div class="overlay">
								<a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="<?php echo base_url(); ?>doc/themes/public/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
							</div>
						</div>
					</div><!---/thumbnail produk-->
					<button type="submit" class="btn btn-lg btn-block bold"><span class="icon-user"></span> Ubah Foto</button>
				</div><!--/Thumbnail produk &detail------->
				
				<div class="col-sm-6"><!----Detail Profile---------------->
					<form class="form-horizontal" action="#" method="post" accept-charset="utf-8">            
							
							<h3 class="">Ubah Biodata Diri</h3>
							<hr>
							<div class="form-group"><!----nama---->
								<label style="text-align: left; " class="col-sm-4 control-label" for="Nama">Nama</label>
								<div class="col-sm-8">
									<input class="form-control" id="formreg" value="Alvin Indra Cahya" type="text" >
								</div>
							</div><!--/nama------>
							<div class="form-group"><!---taggal lahir--->
								<label style="text-align: left;" class="col-sm-4 control-label text-left" for="username">Tanggal Lahir</label>
								<div class="col-sm-8">
									<div class='col-sm-8'>
										<div class="form-group">
											<div class='input-group date' id='datetimepicker5'>
												<input type='date' class="form-control" data-date-format="YYYY/MM/DD"/>
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
										</div>
									</div>
									<script type="text/javascript">
										$(function () {
											$('#datetimepicker5').datetimepicker({
												pickTime: false
											});
										});
									</script>
								</div>
							</div><!------/tanggal lahir-------->
							<div class="form-group"><!---email--->
								<label style="text-align: left;" class="col-sm-4 control-label text-left" for="username">Email</label>
								<div class="col-sm-8">
									<input class="form-control" id="formreg" value="alvin@email.com" type="text" >
								</div>
							</div><!------/email-------->
							<div class="form-group"><!---Tlp------>
								<label style="text-align: left;" class="col-sm-4 control-label text-left" for="username">HP</label>
								<div class="col-sm-8">
									<input class="form-control" id="formreg" value="0808080808080" type="text" >
								</div>
							</div><!------/Tlp-------------->
							<div class="form-group"><!---Alamat------------>
								<label style="text-align: left;" class="col-sm-4 control-label text-left" for="username">Alamat</label>
								<div class="col-sm-8">
									<input class="form-control" id="formreg" value="0808080808080" type="text" >
								</div>
							</div><!------/Alamat-------------------------->
							<div class="form-group"><!---Kodepos------------------------>
								<label style="text-align: left;" class="col-sm-4 control-label text-left" for="username">Kode Pos</label>
								<div class="col-sm-8">
									<input class="form-control" id="formreg" value="0808080808080" type="text" >
								</div>
							</div><!------/Kodepos------------>
							<div class="form-group"><!---Password utk ubahdata------------------------>
								<label style="text-align: left;" class="col-sm-4 control-label text-left" for="username">Password</label>
								<div class="col-sm-4">
									<input class="form-control" id="formreg" value="0808080808080" type="password" >
								</div>
								<div class="col-sm-4">
									<button name="changePass" data-toggle="modal" data-target="#myChgPass" type="button" class="btn btn-danger btn-md bold"><span class="glyphicon glyphicon-cog"></span>Ubah Password?</button>
								</div>
							</div><!------/Password------------>
							<button name="simpan" type="submit" class="btn btn-primary btn-lg bold"><span class="glyphicon glyphicon-ok"></span> Simpan</button>
							
							.
					</form>
				</div><!--detail produk--->
				
				
				<div class="blog col-sm-12">
				
				</div>
		
	
	</div>
</section>
