<div class="container">
	<div class="row mt-4 mb-3">
		<div class="col">
			<h2>My Profile</h2>
		</div>
	</div>

	<?php $this->load->view('layouts/_alert') ?>

	<div class="row">
		<div class="col-12 bg-light p-5">
			<form action="<?= base_url('profile/update') ?>" method="post">
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" value="<?= $profile['name'] ?>">
						<?= form_error('name', '<small class="form-text ml-2 mt-1 text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="email" value="<?= $profile['email'] ?>">
						<?= form_error('email', '<small class="form-text ml-2 mt-1 text-danger">', '</small>') ?>
					</div>
				</div>

				<button type="submit" class="btn btn-info btn-sm float-right">Update Profile</button>
			</form>
		</div>
	</div>
</div>
