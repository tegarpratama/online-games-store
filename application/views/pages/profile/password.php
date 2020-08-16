<div class="container">
	<div class="row mt-4 mb-3">
		<div class="col">
			<h2>Change Password</h2>
		</div>
	</div>

	<?php $this->load->view('layouts/_alert') ?>

	<div class="row">
		<div class="col-12 bg-light p-5">
			<form action="<?= base_url('profile/password') ?>" method="post">
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">New Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password">
						<?= form_error('password', '<small class="form-text ml-2 mt-1 text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Password Confirmation</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password2">
						<?= form_error('password2', '<small class="form-text ml-2 mt-1 text-danger">', '</small>') ?>
					</div>
				</div>

				<button type="submit" class="btn btn-info btn-sm float-right">Update Password</button>
			</form>
		</div>
	</div>
</div>
