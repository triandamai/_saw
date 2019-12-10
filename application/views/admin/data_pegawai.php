<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12">
                        <?=$this->session->flashdata('pesan')?>
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Data Admin</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#tambah">
                                    <i class="zmdi zmdi-plus"></i>Tambah Admin</button>    

                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>NIDN</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($pegawai as $data) { ?>
                                            <tr class="tr-shadow">           
                                            <td>
                                                    <span class="status--process"><?= $data->nip; ?></span>
                                                </td>
                                                <td><?= $data->nama; ?></td>
                                                <td>
                                                    <span class="block-email"><?= $data->jabatan; ?></span>
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                       
                                                        <button class="item" data-toggle="modal" data-placement="top" title="Ubah" data-target="#ubah<?= $data->nip;?>">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                       
                                                        <button class="item " data-toggle="modal" data-placement="center" title="Hapus" data-target="#hapus<?= $data->nip;?>">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                       
                                                      
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by
                            <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- modal medium -->
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <form action="<?= base_url()?>index.php/Admin/tambah_pegawai" method="post" enctype="multipart/form-data" class="form-horizontal">
				    <div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Tambahkan Data Admin</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">NIDN</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="nip" placeholder="misal : 033333" class="form-control">
                                    <small class="form-text text-muted">Masukkan NIDN Admin</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Nama</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="nama" placeholder="misal : yanto" class="form-control">
                                    <small class="form-text text-muted">Masukkan Nama Admin</small>
                                </div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Jabatan</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="jabatan" id="select" class="form-control">
                                    <option value="0">Please select</option>
                                    <option value="DOSEN">DOSEN</option>
                                    <option value="KAPRODI">KAPRODI</option>
                                
                                </select>
                            </div>
                        </div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-primary">Tambahkan</button>
						</div>
					</div>
                    </div>
                </form>
		    </div>
        
            <!-- end modal medium -->
            <!-- modal medium -->
            <?php foreach ($pegawai as $data) {?>
            <div class="modal fade" id="ubah<?= $data->nip;?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <form action="<?= base_url()?>index.php/Admin/ubah_pegawai" method="post" enctype="multipart/form-data" class="form-horizontal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Ubah Data Admin</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">             
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">NIDN</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" disabled id="text-input" value="<?= $data->nip;?>" placeholder="misal : 033333" class="form-control">
                                    <input type="hidden"  name="nip" value="<?= $data->nip;?>">
                                                    
                                    <small class="form-text text-muted">Masukkan NIP Admin</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Nama</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" value="<?= $data->nama;?>" name="nama" placeholder="misal : trian" class="form-control">
                                    <small class="form-text text-muted">Masukkan Nama Admin</small>
                                </div>
                            </div>                                         
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Jabatan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="jabatan" id="select" class="form-control">
                                        <option selected="selected" value="<?= $data->jabatan; ?>"><?= $data->jabatan; ?></option>
                                        <option value="KADES">Kades</option>
                                        <option value="SEKDES">Sekdes</option>
                                        <option value="KASI PEMERINTAHAN">Kasi pemerintahan</option>
                                        <option value="KASI PELAYANAN">Kasi Pelayanan</option>
                                        <option value="KASI KESEJAHTERAAN">Kasi Kesejahteraan</option>
                                        <option value="KAUR KEUANGAN">Kaur Keuangan</option>
                                        <option value="KAUR PERENCANAAN">Kaur Perencanaan</option>
                                        <option value="KAUR UMUM">Kaur Umum</option>
                                        <option value="KADUS">Kadus</option>
                                    </select>
                                </div>
                            </div>  
						    </div>
						    <div class="modal-footer">
							    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
						    </div>
					    </div>
                    </div>
                </div>    
            </form>
			</div>
            <!-- end modal medium -->
            <?php }?>
            <?php foreach ($pegawai as $data) { ?>
                <div class="modal fade" id="hapus<?= $data->nip;?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <form action="<?= base_url()?>index.php/Admin/hapus_pegawai" method="post" enctype="multipart/form-data" class="form-horizontal">
				    <div class="modal-dialog modal-md" role="document">
					    <div class="modal-content">
						    <div class="modal-header">
							    <h5 class="modal-title" id="mediumModalLabel">Peringatan</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">     
                            <h5 class="modal-title" id="mediumModalLabel">Yakin Mau menghapus admin <?= $data->nama;?> ?</h5>
                            <input type="hidden" name="nip" value="<?= $data->nip;?>">
                        </div>  
                            
					    
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
							<button type="submit" class="btn btn-primary">Ya</button>
						</div>
					    </div>
                     </div>
                     </div>
                </form>
			    </div>
            <?php }?>