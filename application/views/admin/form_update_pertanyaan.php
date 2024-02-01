<div class="main-content">
    <section class="section">
		<div class="section-header">
			<h1>Form Update Data Pertanyaan</h1>
		</div>
		
		<div class="card">
			<div class="card-body">
			
				<?php foreach($qnaa as $qa) : ?>
				<form method="POST" action="<?php echo base_url('admin/data_pertanyaan/update_pertanyaan_aksi') ?>" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Pertanyaan</label>
							<input type="hidden" name="id_qna" value="<?php echo $qa->id_qna ?>">
							<textarea class="form-control col-md-20" id="pertanyaan" name="pertanyaan" required rows="3"><?= $qa->pertanyaan; ?></textarea>
						</div>
						
						<div class="form-group">
							<label>Jawaban</label>
							<textarea class="form-control col-md-20" id="jawaban" name="jawaban" required rows="3"><?= $qa->jawaban; ?></textarea>
						</div>
						
						<button type="submit" class="btn btn-primary mt-4">Simpan</button>
						<button type="reset" class="btn btn-danger mt-4">Reset</button>
					</div>
				</div>
				</form>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</div>