<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-md-12">
							<?=$this->session->flashdata('pesan')?>

							<div class="col-lg-12">
								<div class="card">
										
										<div class="card-body">
											<div class="custom-tab">

												<div class="tab-content pl-3 pt-2" id="nav-tabContent">
													<!-- START Nilai Data Penduduk -->
														<div class="row m-t-10">
															<div class="col-md-12">
																<h3 class="p-b-10">Form Penilaian Penduduk</h3>
																<form action="<?= base_url()?>index.php/Admin/simpan_penilaian" method="post" enctype="multipart/form-data" class="form-horizontal">
																<div class="card">
                                    								<div class="card-header">
																		<?php
																		$nik = '';
																		foreach($penduduk as $data)
																		{
																		$nik = $data->nik;
																		?>
																		<strong>Form Penilaian </strong> [<?= $data->nama?>]
																		<?php }?>
                                    								</div>
                                    								<div class="card-body card-block">
																		
																		<input type="hidden" name="realnik" value="<?= $nik;?>">
																		<?php 
																			$index =0;
																			$i ;
																				for( $i =1; $i <= sizeof($subKriteria) ; $i++){
																		?>
                                            							<div class="row form-group">
                                                							<div class="col col-md-3">
                                                    							<label for="selectSm" class=" form-control-label"><?= $subKriteria[$i][0]["subDari"] ?></label>
                                                							</div>
                                                							<div class="col-12 col-md-9">
																				<input type="hidden" name="nik[]" value="<?= $nik;?>">
																				<input type="hidden" name="kriteria[]" value="<?= $subKriteria[$i][$index]["id_kriteria"] ?>">
																				<select name="subkriteria[]" id="SelectLm" class="form-control-sm form-control">
																						<option value="0">Pilih </option>
																						<?php $no = 1;
																							foreach ($subKriteria[$i] as $data) 
																						{ ?>
                                                        								<option value="<?= $data["id_sub"]?>"><?= $data["nama"]; ?></option>
                                                        								
																						<?php $no++; } ?>
                                                    								</select>
                                                								</div>
                                            								</div>
																		<?php 
																		$index++;
																		}
																		
																		?>
                                    								</div>
                                    								<div class="card-footer">
                                        								<button type="submit" class="btn btn-primary btn-sm">
                                            								<i class="fa fa-dot-circle-o"></i> Submit
                                        								</button>
                                        								<!-- <button type="reset" class="btn btn-danger btn-sm">
                                            								<i class="fa fa-ban"></i> Reset
                                        								</button> -->
                                    								</div>
                                								</div>
																</form>
															</div>
														</div>
														<!-- END Nilai Data Penduduk -->

												</div>
	
											</div>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="copyright">
						<p>
							Copyright © 2018 Colorlib. All rights reserved. Template by
							<a href="https://colorlib.com">Colorlib</a>.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
