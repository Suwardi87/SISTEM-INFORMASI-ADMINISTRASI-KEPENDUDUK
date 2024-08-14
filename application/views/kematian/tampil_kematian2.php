<div class="content-wrapper">
    <section class="content">
        <div class=" box box-info">
            <div class="box-header">
                <h4 style="text-align:center; "><b>DATA KEMATIAN </b></h4>
                <hr>
            </div>

            <div class="box-body table-responsive">

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

            
                <br>
                <table id="data" class="table table-bordered" width="200%" cellspacing="0">
					<thead>
						<tr class="active">
							<th style="text-align:center">No</th>
							<th style="text-align:center">Nik</th>
							<th style="text-align:center">Nama Lengkap</th>
							<th style="text-align:center">Jenis Kelamin</th>
							<th style="text-align:center">Umur</th>
							<th style="text-align:center">Alamat Duka</th>
							<th style="text-align:center">Hari Wafat </th>

						</tr>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($kematian as $kematian) {
						?>
							<tr>

								<td style="text-align:center"><?php echo $no; ?></td>
								<td><?php echo $kematian->nik; ?></td>
								<td><?php echo $kematian->nama; ?></td>
								<td><?php echo $kematian->jenis_kelamin; ?></td>
								<td><?php echo $kematian->tanggal_lahir; ?></td>
								<td><?php echo $kematian->alamat; ?></td>
								<td><?php echo $kematian->hari_wafat; ?></td>


							<?php
							$no++;
						}
							?>
					</tbody>
				</table>
            </div>
    </section>
</div>
