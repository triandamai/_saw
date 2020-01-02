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

											<nav>
												<div class="nav nav-tabs" id="nav-tab" role="tablist">

													<a class="nav-item nav-link active" id="custom-nav-perangkingan-tab"
														data-toggle="tab" href="#custom-nav-perangkingan" role="tab"
														aria-controls="custom-nav-perangkingan"
														aria-selected="true">Perangkingan</a>

													<a class="nav-item nav-link" id="custom-nav-kriteria-tab"
														data-toggle="tab" href="#custom-nav-kriteria" role="tab"
														aria-controls="custom-nav-kriteria"
														aria-selected="false">Kriteria dan Sub Kriteria</a>

													<a class="nav-item nav-link" id="custom-nav-detail-tab"
														data-toggle="tab" href="#custom-nav-detail" role="tab"
														aria-controls="custom-nav-detail" aria-selected="false">Detail
														Perhitungan</a>

												</div>
											</nav>

											<div class="tab-content pl-3 pt-2" id="nav-tabContent">

												<div class="tab-pane fade show active" id="custom-nav-perangkingan"
													role="tabpanel" aria-labelledby="custom-nav-perangkingan-tab">
													<!-- STAR HASIL AKHIR -->
													<div class="row m-t-10">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-6">
																	<h3 class="p-b-10">Hasil Akhir</h3>
																</div>
																<div class="col-md-6">
																	<!-- <div class="rs-select2--dark rs-select2--sm rs-select2--dark2 p-b-10" style="float :right">
																		<select class="js-select2" name="type">
																			<option selected="selected">Export</option>
																			<option value="">PDF</option>
																		</select>
																		<div class="dropDownSelect2"></div>
																	</div> -->
																	<!-- <div class="p-b-10"> -->
																	<!-- <form action="<?=base_url();?>index.php/admin/laporan_penerima" method="POST">
																		<input type="submit" name="export" value="EXPORT PDF" class="btn btn-secondary m-b-10" style="float :right">
																	</form> -->
																		<!-- <a href="<?=base_url();?>index.php/admin/laporan" class="btn btn-secondary m-b-10" style="float :right">Export PDF</a> -->
																	<!-- </div> -->
																</div>
															</div>
															<div class="table-responsive m-b-40">
																<table class="table table-hover">
																	<thead>
																		<tr class="bg-dark" style="color: #fff;">
																			<th>No</th>
																			<th>Nama</th>
																			<th>Nilai</th>
																			<th>Ranking</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php $no = 1; if($hasilAkhir != null){foreach($hasilAkhir as $HAkey => $HAvalue) { ?>
																		<tr>
																			<td><?= $no ?></td>
																			<td><?= $namaSamaNik[$HAkey]; ?></td>
																			<td><?= $HAvalue; ?></td>
																			<td><?= $no; ?></td>
																		</tr>
																		<?php $no++; }}	 ?>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
													<!-- END HASIL AKHIR -->
												</div>

												<div class="tab-pane fade" id="custom-nav-kriteria" role="tabpanel"
													aria-labelledby="custom-nav-kriteria-tab">
													<!-- START KRITERIA -->
													<div class="row m-t-10">
														<div class="col-md-12">
															<h3 class="p-b-10">Daftar Kriteria</h3>
															<!-- DATA TABLE KRITERIA-->
															<div class="table-responsive m-b-40">
																<table class="table table-hover">
																	<thead>
																		<tr class="bg-dark" style="color: #fff;">
																			<th>ID</th>
																			<th>NAMA KRITERIA</th>
																			<th>SIFAT</th>
																			<th>KETERANGAN</th>
																			<th>BOBOT</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php foreach ($kriteria as $data) { ?>
																		<tr>
																			<td><?= $data->id; ?></td>
																			<td><?= $data->nama; ?></td>
																			<td><?= $data->sifat; ?></td>
																			<td><?= $data->keterangan; ?></td>
																			<td><?= $data->bobot; ?></td>
																		</tr>
																		<?php } ?>
																	</tbody>
																</table>
															</div>
															<!-- END DATA TABLE KRITERIA-->
														</div>
													</div>
													<!-- END KRITERIA -->

													<!-- START SUB KRITERIA -->
													<?php 
																for($i = 1; $i <= sizeof($subKriteria) ; $i++){
															?>
													<div class="row m-t-10">
														<div class="col-md-12">
															<h3 class="p-b-10">Sub Kriteria :
																<?= $subKriteria[$i][0]["subDari"] ?></h3>
															<!-- DATA TABLE KRITERIA-->
															<div class="table-responsive m-b-40">
																<table class="table table-hover">
																	<thead>
																		<tr class="bg-info" style="color: #fff;">
																			<th>NO</th>
																			<th>NAMA SUB KRITERIA</th>
																			<th>VALUE</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php 
																									$no = 1;
																									foreach ($subKriteria[$i] as $data) { ?>
																		<tr>
																			<td><?= $no; ?></td>
																			<td><?= $data["nama"]; ?></td>
																			<td><?= $data["value"]; ?></td>
																		</tr>
																		<?php $no++; } ?>
																	</tbody>
																</table>
															</div>
															<!-- END DATA TABLE KRITERIA-->
														</div>
													</div>
													<?php 
																}
															?>
													<!-- END SUB KRITERIA -->
												</div>

												<div class="tab-pane fade" id="custom-nav-detail" role="tabpanel"
													aria-labelledby="custom-nav-detail-tab">

													<!-- START Nilai Data Penduduk -->
													<div class="row m-t-10">
														<div class="col-md-12">
															<h3 class="p-b-10">Nilai Data Penduduk</h3>
															<div class="table-responsive m-b-40">
																<table class="table table-hover">
																	<thead>
																		<tr class="bg-dark" style="color: #fff;">
																			<th>No</th>
																			<th>Nama</th>
																			<?php foreach($kriteria as $k){ ?>
																			<th><?= $k->nama; ?></th>
																			<?php } ?>
																		</tr>
																	</thead>
																	<tbody>
																		<?php $no = 1; foreach($dataNamaPenduduk as $dnp) { ?>
																		<tr>
																			<td><?= $no ?></td>
																			<td><?= $dnp->nama; ?></td>
																			<?php $index = 0; foreach($kriteria as $k){ ?>
																			<td><?= $dataNilaiPendudukXXX["nik-".$dnp->nidn][$index]["namaSubkategori"]; ?>
																			</td>
																			<?php $index++; } ?>
																		</tr>
																		<?php $no++; } ?>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
													<!-- END Nilai Data Penduduk -->

													<!-- START Konversi Nilai Data Penduduk -->
													<div class="row m-t-10">
														<div class="col-md-12">
															<h3 class="p-b-10">Konversi Nilai Data Penduduk</h3>
															<div class="table-responsive m-b-40">
																<table class="table table-hover">
																	<thead>
																		<tr class="bg-dark" style="color: #fff;">
																			<th>No</th>
																			<th>Nama</th>
																			<?php foreach($kriteria as $k){ ?>
																			<th><?= $k->nama; ?></th>
																			<?php } ?>
																		</tr>
																	</thead>
																	<tbody>
																		<?php $no = 1; foreach($dataNamaPenduduk as $dnp) { ?>
																		<tr>
																			<td><?= $no ?></td>
																			<td><?= $dnp->nama; ?></td>
																			<?php $index = 0; foreach($kriteria as $k){ ?>
																			<td><?= $dataNilaiPendudukXXX["nik-".$dnp->nidn][$index]["value"]; ?>
																			</td>
																			<?php $index++; } ?>
																		</tr>
																		<?php $no++; } ?>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
													<!-- END Konversi Nilai Data Penduduk -->

													<!-- START NORMALISASI -->
													<div class="row m-t-10">
														<div class="col-md-12">
															<h3 class="p-b-10">Normalisasi Nilai Data Penduduk</h3>
															<div class="table-responsive m-b-40">
																<table class="table table-hover">
																	<thead>
																		<tr class="bg-dark" style="color: #fff;">
																			<th>No</th>
																			<th>Nama</th>
																			<?php foreach($kriteria as $k){ ?>
																			<th><?= $k->nama; ?></th>
																			<?php } ?>
																		</tr>
																	</thead>
																	<tbody>
																		<?php $no = 1; foreach($dataNamaPenduduk as $dnp) { ?>
																		<tr>
																			<td><?= $no ?></td>
																			<td><?= $dnp->nama; ?></td>
																			<?php $index = 0; foreach($kriteria as $k){ ?>
																			<td><?= $normalisasiNilaiX["nik-".$dnp->nidn][$index]["value_normalisasi"]; ?>
																			</td>
																			<?php $index++; } ?>
																		</tr>
																		<?php $no++; } ?>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
													<!-- END NORMALISASI -->

													<!-- STAR HASIL AKHIR -->
													<div class="row m-t-10">
														<div class="col-md-12">
															<h3 class="p-b-10">Hasil Akhir</h3>
															<div class="table-responsive m-b-40">
																<table class="table table-hover">
																	<thead>
																		<tr class="bg-dark" style="color: #fff;">
																			<th>No</th>
																			<th>Nama</th>
																			<th>Nilai</th>
																			<th>Ranking</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php $no = 1; foreach($hasilAkhir as $HAkey => $HAvalue) { ?>
																		<tr>
																			<td><?= $no ?></td>
																			<td><?= $namaSamaNik[$HAkey]; ?></td>
																			<td><?= $HAvalue; ?></td>
																			<td><?= $no; ?></td>
																		</tr>
																		<?php $no++; } ?>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
													<!-- END HASIL AKHIR -->
												</div>

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