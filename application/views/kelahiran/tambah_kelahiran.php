<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">
                <h4 style="text-align:center"><b>TAMBAH DATA KELAHIRAN</b></h4>
                <hr>
            </div>

            <div class="box-body">
                <div class="card-body">

                    <?php
if ($this->session->flashdata('sukses')) {
	?>
                    <div class="callout callout-success">
                        <p style="font-size:14px">
                            <i class="fa fa-check"></i> <?php echo $this->session->flashdata('sukses'); ?>
                        </p>
                    </div>
                    <?php
}
?>

                    <form action="<?php echo base_url('kelahiran/proses_tambah'); ?>" method="post">
                        <!-- kolom ke-1 -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>ID Monitoring</label>
                                    <input type="hidden" name="" value="">
                                    <input type="text" name="id_monitoring" class="form-control" required />
                                     <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label>Hari</label>
                                        <select class="form-control selectlive" name="hari" required>
                                            <option value="" selected disabled>- pilih -</option>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <input type="text" name="tempat_lahir" class="form-control"
                                                    placeholder="Tempat">
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="date" name="tanggal_lahir"
                                                        class="form-control pull-right" id=""
                                                        placeholder="Tanggal Lahir">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label>Pukul</label>
                                        <div class="input-group">
                                            <input type="time" name="pukul" id="pukul" class="form-control timepicker"
                                                required>
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" required>
                                            <option value="" selected disabled>- pilih -</option>
                                            <option value="Laki Laki">Laki Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <input type="text" name="nama_ayah" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan Ayah</label>
                                        <input type="text" name="pekerjaan_ayah" class="form-control" required />
                                    </div><br>
                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <input type="text" name="nama_ibu" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan Ibu</label>
                                        <input type="text" name="pekerjaan_ibu" class="form-control" required />
                                    </div>
									<div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" rows="3" required></textarea>
                                    </div>
                                </div>
                            </div>


                            <!-- kolom ke-2 -->
                            <div class="row">
                                <div class="col-lg-6">

                                    

                                
                                </div>
                            </div>
                            <center>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="<?php echo base_url('kelahiran/tampil'); ?>"
                                        class="btn btn-danger">Batal</a>
                                </div>
                            </center>
                        </div>
                </div>
                </form>
            </div>
        </div>
</div>
</section>
</div>
