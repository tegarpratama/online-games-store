<?php 
	$success = $this->session->userdata('success');
	$error = $this->session->userdata('error');
	$warning = $this->session->userdata('warning');

	if($success){
		$alert_status = 'alert-success';
		$message = $success;
	}else if($error){
		$alert_status = 'alert-danger';
		$message = $error;
	}else if($warning){
		$alert_status = 'alert-warning';
		$message = $warning;
	}
?>

<?php if($success || $error || $warning) : ?>
	<div class="alert <?= $alert_status ?> alert-dismissible fade show text-center font-weight-bold" role="alert">
	<?= $message ?>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	</div>
<?php endif; ?>
