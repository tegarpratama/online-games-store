<div class="container">
	<div class="row mt-4 mb-5">
		<div class="col">
			<div class="card">

				<?php $this->load->view('layouts/_alert') ?>

				<h5 class="card-header text-center"><strong>Payment Confirm #<?= $order['invoice'] ?></strong></h5>
				<div class="card-body">
					<?= form_open_multipart(base_url('myorder/confirm/' . $order['invoice'])) ?>
						<input type="hidden" name="orders_id" value="<?= $order['id'] ?>">
						<div class="form-group">
							<label>Your Invoice</label>
							<input type="text" class="form-control" name="invoice" value="<?= $order['invoice'] ?>" readonly>
						</div>
						<div class="form-group">
							<label>Account Name</label>
							<input type="text" class="form-control" name="account_name">
							<?= form_error('account_name', '<small class="form-text text-danger">', '</small>') ?>
						</div>
						<div class="form-group">
							<label>Account Number</label>
							<input type="text" class="form-control" name="account_number">
							<?= form_error('account_number', '<small class="form-text text-danger">', '</small>') ?>
						</div>
						<div class="form-group">
							<label>Nominal</label>
							<input type="text" class="form-control" name="nominal">
							<?= form_error('nominal', '<small class="form-text text-danger">', '</small>') ?>
						</div>
						<div class="form-group">
							<label>Note</label>
							<textarea class="form-control" name="note" rows="3"></textarea>
						</div>

						<div class="form-group">
							<label>Bukti Transfer</label>
							<input name="image" type="file" class="form-control-file">
							<?php if($this->session->flashdata('image_error')) :  ?>
								<small class="form-text text-danger">
									<?= $this->session->flashdata('image_error') ?>
								</small>
							<?php endif ?>
						</div>

						<button class="btn btn-info float-right" type="submit">Send</button>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>
