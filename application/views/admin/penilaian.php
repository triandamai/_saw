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
										<div class="card-header">
											<h4>Laporan Penerima </h4>
										</div>
										<div class="card-body">
											<div class="custom-tab">
	
											
												<div class="tab-content pl-3 pt-2" id="nav-tabContent">

													
													
														<!-- START Nilai Data Penduduk -->
														<div class="row m-t-10">
															<div class="col-md-12">
																<h3 class="p-b-10">Nilai Data Dosen</h3>
																<div class="table-responsive m-b-40">
																	<table class="table table-hover">
																		<thead>
																			<tr class="bg-dark" style="color: #fff;">
																				<th>No</th>
																				<th>Nama</th>
																				<th>Alamat</th>
																				<th>Status</th>
																				<th>Aksi</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php $no = 1; 
																			foreach($penduduk as $pbd) { 
																				?>
																			<tr>
																			
																				<td><?= $no ?></td>
																				<td><?= $pbd->nama; ?></td>
																				<td><?= $pbd->alamat; ?></td>
																				<td>Belum Dinilai</td>
																				<td>
																				<form action="<?= base_url()?>index.php/Admin/form_penilaian" method="post" enctype="multipart/form-data" class="form-horizontal">
																					<button type="submit" class="btn btn-outline-secondary btn-sm">
																						Nilai Sekarang
																					</button>
																					<input type="hidden" name="nik" value="<?= $pbd->nik;?>">
																				</form>
																				</td>
																			</tr>
																			<?php $no++;} 
																		
																		?>
																		</tbody>
																	</table>
																</div>
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
