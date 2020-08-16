<div class="container">
	<div class="row justify-content-center mt-3 mb-5">
		<div class="col-12">
		
			<div class="card">
				<div class="card-header text-center">
					<h4><strong>Your Cart</strong></h4>
				</div>
				<div class="card-body">
					
					<!-- Alert -->
					<?php $this->load->view('layouts/_alert') ?>
					<!-- Alert -->

					<!-- Jika cart kosong -->
					<?php if(empty($product)) : ?>
						<div class="alert alert-warning" role="alert">
							Oops, your cart is empty.
						</div>
					<?php else : ?>
						<table class="table table-bordered text-center">
							<thead class="thead-dark">
								<tr>
									<th>#</th>
									<th>Game</th>
									<th>Subtotal</th>
									<th>Menu</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; foreach($product as $p) : ?>
									<tr>
										<td><?= $no++ ?></td>
										<td>
											<img src="<?= base_url('/images/game/' . $p['image']) ?>" style="width:180px; height:250px">
										</td>
										<td>Rp. <?= number_format($p['subtotal'], 2, ', ', '.') ?></td>
										<td>
											<a class="btn btn-danger btn-sm" href="<?= base_url('cart/delete/' . $p['id']) ?>">
												<i class="fas fa-trash"></i>
											</a>
										</td>
									</tr>
								<?php endforeach; ?>
							<!-- Total -->
							<tr class="bg-success text-light">
								<td colspan="3" class="text-left"><strong>Total:</strong></td>
								<td><strong>Rp. <?= number_format(array_sum(array_column($product, 'subtotal')), 2, ', ', '.') ?></strong></td>
							</tr>
							</tbody>
						</table>
					<?php endif ?>

				</div>
				<div class="card-footer text-muted">
					<a href="<?= base_url('home') ?>" class="btn btn-secondary btn-sm">
						<i class="fas fa-arrow-left"></i>
						Back
					</a>
					<?php if($product) : ?>
						<a href="<?= base_url('checkout') ?>" class="btn btn-info btn-sm float-right">
							Pay Now
							<i class="fas fa-arrow-right ml-1"></i>
						</a>
					<?php endif ?>
				</div>
			</div>

		</div>
	</div>
</div>
