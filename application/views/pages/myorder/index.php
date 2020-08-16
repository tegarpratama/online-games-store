<div class="container">
	<div class="row mt-4">
		<div class="col">

			<?php $this->load->view('layouts/_alert') ?>

			<div class="card">
				<h5 class="card-header text-center"><strong>My Orders</strong></h5>
				<div class="card-body">
					<table class="table table-bordered text-center">
						<thead>
							<tr>
								<th>Invoice</th>
								<th>Date</th>
								<th>Total</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($orders as $o) : ?>
								<tr>
									<td><strong><a href="<?= base_url('myorder/detail/' . $o['invoice']) ?>"><?= $o['invoice'] ?></a></strong></td>
									<td><?= $o['date'] ?></td>
									<td>Rp. <?= number_format($o['total'], 2, ',', '.') ?></td>
									<td>
										<?php if($o['status'] == 'waiting') : ?>
											<span class="badge badge-primary"><?= $o['status'] ?></span>
										<?php elseif($o['status'] == 'paid') : ?>
											<span class="badge badge-warning text-light"><?= $o['status'] ?></span>
										<?php elseif($o['status'] == 'delivered') : ?>
											<span class="badge badge-info"><?= $o['status'] ?></span>
										<?php elseif($o['status'] == 'cancel') : ?>
											<span class="badge badge-danger"><?= $o['status'] ?></span>
										<?php endif; ?>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
