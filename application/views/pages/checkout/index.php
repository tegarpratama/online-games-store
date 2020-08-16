<div class="container">
	<div class="row mt-4">
		<!-- Form -->
		<div class="col-8">
			<div class="card">
				<h5 class="card-header">Delivery Address Form</h5>
				<div class="card-body">
					<form action="<?= base_url('checkout/create') ?>" method="POST">
						<div class="form-group">
							<label>Recipient's name</label>
							<input type="text" class="form-control" name="name">
							<?= form_error('name', '<small class="text-danger mt-1">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label>Complete Address</label>
							<textarea class="form-control" name="address" rows="5"></textarea>
							<?= form_error('address', '<small class="text-danger mt-1">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label>Mobile Phone Number</label>
							<input type="number" class="form-control" name="phone">
							<?= form_error('phone', '<small class="text-danger mt-1">', '</small>'); ?>
						</div>
						<button type="submit" class="btn btn-info">Save</button>
					</form>
				</div>
			</div>
		</div>
		<!-- End of Form -->

		<!-- Cart -->	
		<div class="col">
			<div class="row">
				<div class="card mb-3">
					<h5 class="card-header">Your Cart</h5>
					<div class="card-body">
						<table class="table">
							<thead>
								<tr>
									<th>Produk</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($cart as $c) : ?>
									<tr>
										<td><?= $c['name'] ?></td>
										<td>Rp. <?= number_format($c['price'], 2, ',', '.') ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Total</th>
									<th>Rp. <?= number_format(array_sum(array_column($cart, 'subtotal')), 2, ',', '.') ?>,-</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- End of cart -->
	</div>
</div>
