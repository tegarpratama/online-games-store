<div class="container">
	<div class="row mt-4 mb-3">
		<div class="col-11">
			<h2>List Games</h2>
		</div>
		<div class="col float-right">
			<a href="<?= base_url('product/add') ?>" class="btn btn-primary btn-sm">
				<i class="fas fa-plus"></i>
				Game
			</a>
		</div>
	</div>

	<?php $this->load->view('layouts/_alert') ?>

	<div class="row mt-3">
		<div class="col">
			<table class="table table-light text-center">
				<thead class="thead-dark">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Price</th>
						<th>Edition</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; foreach($product as $p) : ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $p['name'] ?></td>
							<td>Rp. <?= number_format($p['price'], 2, ', ', '.'); ?></td>
							<td><?= ucfirst($p['edition']) ?></td>
							<td>
								<a href="<?= base_url('product/edit/' . $p['id']) ?>" class="btn btn-warning btn-sm">
									<i class="fas fa-edit text-light"></i>
								</a>
								<a href="<?= base_url('product/delete/' . $p['id']) ?>" class="btn btn-danger btn-sm">
									<i class="fas fa-trash"></i>
								</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
