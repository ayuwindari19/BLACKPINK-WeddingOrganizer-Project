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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/pemesanan/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>KODE</th>
										<th>NAMA</th>
										<th>ALAMAT</th>
										<th>NOMER HP</th>
										<th>PAKET</th>
										<th>ADAT</th>
										<th>TANGGAL ACARA</th>
										<th>STATUS</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($pemesanan as $pemesanan): ?>
									<tr>
										<td>
											<?php echo $pemesanan->kode ?>
										</td>
										<td width="150">
											<?php echo $pemesanan->nama ?>
										</td>
										<td class="small">
											<?php echo substr($pemesanan->alamat, 0, 120) ?>...</td>
										<td>
											<?php echo $pemesanan->nohp ?>
										</td>
										<td>
											<?php echo $pemesanan->paket ?>
										</td>
										<td>
											<?php echo $pemesanan->adat ?>
										</td>
										<td>
											<?php echo $pemesanan->tglacara ?>
										</td>
										<td>
											<?php echo $pemesanan->status ?>
										</td>
									
										
										<td width="250">
											<a href="<?php echo site_url('admin/pemesanan/edit/'.$pemesanan->kode) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											 <a onclick="deleteConfirm('<?php echo site_url('admin/pemesanan/delete/'.$pemesanan->kode) ?>')"
										    href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>

										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>
<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

</body>

</html>
