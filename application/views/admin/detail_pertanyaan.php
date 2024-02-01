<div class="main-content">
    <section class="section">
		<div class="section-header">
			<h1>Detail Pertanyaan</h1>
		</div>
	</section>
	<?php foreach ($qnaa as $qa) : ?>
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-7">
						<table class="table">
							<tr>
								<td>Pertanyaan</td>
								<td><?php echo $qa->pertanyaan ?></td>
							</tr>
							
							<tr>
								<td>Jawaban</td>
								<td><?php echo $qa->jawaban ?></td>
							</tr>
						</table>
						
						<a class="btn btn-sm btn-danger ml-4" href="<?= base_url('admin/data_pertanyaan') ?>">Kembali</a>
						<a class="btn btn-sm btn-primary" href="<?= base_url('admin/data_pertanyaan/update_pertanyaan/' . $qa->id_qna) ?>">Update</a>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>