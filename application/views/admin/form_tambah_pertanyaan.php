<div class="main-content">
    <section class="section">
		<div class="section-header">
			<h1>Form Input Data Pertanyaan</h1>
		</div>
		
		<div class="card">
			<div class="card-body">
			
				<form method="POST" action="<?php echo base_url('admin/data_pertanyaan/tambah_pertanyaan_aksi') ?>" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Pertanyaan</label>
							<textarea class="form-control col-md-20" id="pertanyaan" name="pertanyaan" required rows="3"></textarea>
						</div>
						<div class="form-group">
							<label>Jawaban</label>
							<textarea class="form-control col-md-20" id="jawaban" name="jawaban" required rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-primary mt-4">Simpan</button>
						<button type="reset"  class="btn btn-danger mt-4">Reset</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</section>
</div>