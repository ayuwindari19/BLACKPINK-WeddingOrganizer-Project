<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/pemesanan/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/pemesanan/edit') ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $pemesanan->kode?>" />

							<div class="form-group">
								<label for="nama">NAMA*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama" value="<?php echo $pemesanan->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat">ALAMAT*</label>
								<textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 name="alamat" placeholder="Alamat lengkap"><?php echo $pemesanan->alamat ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nohp">NOMER HP</label>
								<input class="form-control <?php echo form_error('nohp') ? 'is-invalid':'' ?>"
								 type="text" name="nohp" min="0" placeholder="Nohp" value="<?php echo $pemesanan->nohp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nohp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="paket">PAKET</label>
								<input class="form-control <?php echo form_error('paket') ? 'is-invalid':'' ?>"
								 type="text" name="paket" min="0" placeholder="Paket pilihan" value="<?php echo $pemesanan->paket ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('paket') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="adat">ADAT</label>
								<input class="form-control <?php echo form_error('adat') ? 'is-invalid':'' ?>"
								 type="text" name="adat" min="0" placeholder="Adat" value="<?php echo $pemesanan->adat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('adat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tglacara">TANGGAL ACARA</label>
								<input class="form-control <?php echo form_error('tglacara') ? 'is-invalid':'' ?>"
								 type="text" name="tglacara" min="0" placeholder="tglacara" value="<?php echo $pemesanan->tglacara ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tglacara') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="status">STATUS</label>
								<input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>"
								 type="text" name="status" min="0" placeholder="status" value="<?php echo $pemesanan->status ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('status') ?>
								</div>
							</div>

						
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
