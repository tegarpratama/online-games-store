<div class="container">
	<div class="row mt-4">
		<div class="col">
			<div class="card">
				<h5 class="card-header">Checkout Success</h5>	
				<div class="card-body">
					<h4><strong>Order Number : <?= $content['invoice'] ?></strong></h4>
					<p>Thank you for shopping.</p>
					<br>
					<p>Please pass payment with the following procedures:</p>
					<ol>
						<li>Make payment to the account <strong>BCA 0123456789</strong> An. Gaming Store</li>
						<li>Include information with the order number <strong><?= $content['invoice'] ?></strong></li>
						<li>Total payment <strong>Rp. <?= number_format($content['total'], 0, ',', '.') ?></strong></li>
					</ol>
					<p>If you have already made a payment, please send proof of transfer<a href="<?= base_url('myorder/detail/' . $content['invoice']) ?>"> to this link</a></p>
					<a href="<?= base_url('home') ?>" class="btn btn-primary btn-sm">Back</a>
				</div>
			</div>
		</div>
	</div>
</div>
