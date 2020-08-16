<div class="container">
	<div class="row mt-4">
		<div class="col">
			<h2 class="text-center">Update Banner</h2>
		</div>
	</div>

	<div class="row bg-light p-3 mt-4">
		<div class="col">

			<?= form_open_multipart(base_url('banner/edit/' . $banner['id'])) ?>
				<input type="hidden" name="id" value="<?= $banner['id'] ?>">
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Head Banner</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="head" value="<?= $banner['head'] ?>">
						<?= form_error('head', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Content Banner</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="content" value="<?= $banner['content'] ?>">
						<?= form_error('content', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Text Color</label>
					<div class="col-sm-10">
						<select class="form-control" name="text_color">
							<option value="text-dark">Black</option>
							<option value="text-light">White</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Link Button</label>
					<div class="col-sm-10">
						<select class="form-control" name="product_id">
							<?php foreach($games as $g) : ?>
								<option value="<?= $g['id'] ?>"><?= $g['name'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Banner Image</label>
					<br>
					<div class="col-sm-10">
						<?php if(!empty($banner['image'])) : ?>
							<img src="<?= base_url('images/banner/'. $banner['image']) ?>" width="300">
						<?php else: ?>
							No Image
						<?php endif; ?>
						<br> <br>
						<input name="image" type="file" class="form-control-file">
						<?php if($this->session->flashdata('image_error')) :  ?>
							<small class="form-text text-danger">
								<?= $this->session->flashdata('image_error') ?>
							</small>
						<?php endif ?>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<a href="<?= base_url('banner') ?>" class="btn btn-secondary btn-sm">
							<i class="fa fa-arrow-left mr-1"></i>
							Back
						</a>
						<button type="submit" class="btn btn-info btn-sm float-right">
							<i class="fa fa-save mr-2"></i>
							Update
						</button>
					</div>
				</div>
			<?= form_close() ?>			
		</div>
	</div>
</div>

