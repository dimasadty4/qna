<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Pertanyaan</h1>
		</div>
		
		<a href="<?= base_url('admin/data_pertanyaan/tambah_pertanyaan'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
		
		<?= $this->session->flashdata('pesan'); ?>
		
		<table class="table table-striped table-bordered">
			 <thead>
				<tr>
				  <th scope="col">No.</th>
				  <th scope="col">Pertanyaan</th>
				  <th scope="col">Jawaban</th>
				  <th scope="col">Action</th>
				</tr>
			 </thead>
			<tbody>
				<?php
					$no = 1;
					foreach($qnaa as $qa) : ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $qa->pertanyaan ?></td>
							<td><?php echo $qa->jawaban ?></td>
							<td>
								<a href="<?= base_url('admin/data_pertanyaan/detail_pertanyaan/') . $qa->id_qna ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
								<a href="<?= base_url('admin/data_pertanyaan/delete_pertanyaan/') . $qa->id_qna ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
								<a href="<?= base_url('admin/data_pertanyaan/update_pertanyaan/') . $qa->id_qna ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
							</td>
						</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</section>
</div>