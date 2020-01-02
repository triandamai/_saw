<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12">
                            <?=$this->session->flashdata('pesan')?>
                            <!-- DATA TABLE -->
                            <h3 class="title-5 m-b-35">Data Dosen</h3>
                            <div class="table-data__tool">
          
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal"
                                        data-target="#tambah">
                                        <i class="zmdi zmdi-plus"></i>Tambahkan Dosen</button>


                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>Nidn</th>
                                            <th>Nama</th>
                                            <th>Tanggungan</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($dosen as $data) { ?>


                                        <tr class="tr-shadow">

                                            <td>
                                                <span class="status--process"><?= $data->nidn; ?></span>
                                            </td>
                                            <td><?= $data->nama; ?></td>
                                            <td><?= $data->tanggungan; ?></td>
                                            <td>
                                                <span class="block-email"><?= $data->alamat; ?></span>
                                            </td>
                                            <td>
                                                <div class="table-data-feature">

                                                    <button class="item" data-toggle="modal" data-placement="top"
                                                        title="Ubah" data-target="#ubah<?= $data->nidn;?>">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>

                                                    <button class="item " data-toggle="modal" data-placement="center"
                                                        title="Hapus" data-target="#hapus<?= $data->nidn;?>">
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
    <form action="<?= base_url()?>index.php/Admin/tambah_dosen" method="post" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Tambahkan Data Dosen</h5>
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
                            <input type="text" id="text-input" name="nik" placeholder="misal : 331xxxx"
                                class="form-control">
                            <small class="form-text text-muted">Masukkan NIDN Dosen</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nama</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="nama" placeholder="misal : yatno"
                                class="form-control">
                            <small class="form-text text-muted">Masukkan Nama Dosen</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Tanggungan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="text-input" name="tanggungan" placeholder="misal : 3"
                                class="form-control">
                            <small class="form-text text-muted">Masukkan Jumlah tanggungan</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Alamat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="alamat" id="textarea-input" rows="4" placeholder="Alamat Dosen"
                                class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <strong>Form Penilaian </strong>
                    </div>
                    <div class="card-body card-block">
                        <?php 
							$index =0;			
							for( $i =1; $i <= sizeof($subKriteria) ; $i++){
						?>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="selectSm"
                                    class=" form-control-label"><?= $subKriteria[$i][0]["subDari"] ?></label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="hidden" name="kriteria[]"
                                    value="<?= $subKriteria[$i][$index]["id_kriteria"] ?>">
                                <select name="subkriteria[]" id="SelectLm" class="form-control-sm form-control">
                                    <option value="0">Pilih </option>
                                    <?php $no = 1; foreach ($subKriteria[$i] as $data) 	{ ?>
                                    <option value="<?= $data["id_sub"]?>"><?= $data["nama"]; ?></option>
                                    <?php $no++; } ?>
                                </select>
                            </div>
                        </div>
                        <?php }?>
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
<?php foreach ($dosen as $data) { 
    $nidn = $data->nidn;
    ?>
<div class="modal fade" id="ubah<?= $data->nidn;?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
    aria-hidden="true">
    <form action="<?= base_url()?>index.php/Admin/ubah_dosen" method="post" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Ubah Data Dosen</h5>
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
                            <input type="text" id="text-input" value="<?= $data->nidn;?>" disabled name="nik"
                                placeholder="misal : 331xxxx" class="form-control">
                            <input type="hidden" name="nik" value="<?= $data->nidn;?>">
                            <small class="form-text text-muted">Masukkan NIDN Dosen</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nama</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" value="<?= $data->nama;?>" name="nama"
                                placeholder="misal : yatno" class="form-control">
                            <small class="form-text text-muted">Masukkan Nama Dosen</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Tanggungan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" value="<?= $data->tanggungan;?>" name="tanggungan"
                                placeholder="misal : 3" class="form-control">
                            <small class="form-text text-muted">Masukkan Jumlah tanggungan</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Alamat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="alamat" id="textarea-input" rows="4" placeholder="Alamat Dosen"
                                class="form-control"><?= $data->alamat;?></textarea>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <strong>Form Penilaian </strong>
                        </div>
                        <div class="card-body card-block">
                            <?php 
                                $index =0;	
                                $a = 0;		
                                for( $i =1; $i <= sizeof($subKriteria) ; $i++){
                            ?>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="selectSm"
                                        class=" form-control-label"><?= $subKriteria[$i][0]["subDari"] ?></label>
                                </div>
                                <div class="col-12 col-md-9">
                                <!-- <input type="text" name="id[]" value=""> -->
                                <input type="hidden" name="kriteria[]"
                                    value="<?= $subKriteria[$i][$index]["id_kriteria"] ?>">
                                    <select name="subkriteria[]" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Pilih </option>
                                        <?php $no = 1; $n = 0; foreach ($subKriteria[$i] as $data) 	{ ?>
                                        <option value="<?= $data["id_sub"]?>" <?php if($dataNilaiPendudukXXX["nik-".$nidn][$a]["id"] == $data['id_sub']){echo "selected";} ?>><?= $data["nama"]; ?></option>
                                        <?php $no++; $n++; } ?>
                                    </select>
                                </div>
                            </div>
                            <?php $a++;}?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- end modal medium -->
<?php }?>
<?php foreach ($dosen as $data) { ?>
<div class="modal fade" id="hapus<?= $data->nidn;?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
    aria-hidden="true">
    <form action="<?= base_url()?>index.php/Admin/hapus_penduduk" method="post" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Peringatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title" id="mediumModalLabel">Yakin Mau menghapus dosen <?= $data->nama;?> ?</h5>
                    <input type="hidden" name="nik" value="<?= $data->nidn;?>">
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