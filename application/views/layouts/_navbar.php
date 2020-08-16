<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url('home') ?>">
			<img src="<?= base_url() ?>/images/logo/logo.png" width="170" height="57" class="d-inline-block align-top" alt="logo" loading="lazy">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav ml-auto">
				<?php if($this->session->login == TRUE) : ?>
					<!-- Jika yg login user -->
					<?php if($this->session->userdata('role') == 2) : ?>
						

						<a class="nav-item nav-link mr-4 active" href="<?= base_url('cart') ?>">
							<i class="fas fa-shopping-cart"></i>
						</a>

						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-user"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?= base_url('profile') ?>">
									<i class="fas fa-user-cog"></i>
									Profile
								</a>
								<a class="dropdown-item" href="<?= base_url('myorder') ?>">
									<i class="fas fa-shopping-bag"></i>
									My Orders
								</a>
								<a class="dropdown-item" href="<?= base_url('profile/password') ?>">
									<i class="fas fa-key"></i>
									Change Password 
								</a>
							<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('logout') ?>">
									<i class="fas fa-sign-out-alt"></i>
									Logout
								</a>
							</div>
						</li>
					<!-- Jika admin -->
					<?php else : ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Manage
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?= base_url('banner') ?>">Banner</a>
								<a class="dropdown-item" href="<?= base_url('product') ?>">Product</a>
								<a class="dropdown-item" href="<?= base_url('order') ?>">Order</a>
								<a class="dropdown-item" href="<?= base_url('user') ?>">Users</a>
							</div>
						</li>


						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-user"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?= base_url('profile') ?>">
									<i class="fas fa-key"></i>
									Profile
								</a>
								<a class="dropdown-item" href="<?= base_url('profile/password') ?>">
									<i class="fas fa-key"></i>
									Change Password 
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('logout') ?>">
									<i class="fas fa-sign-out-alt"></i>
									Logout
								</a>
							</div>
						</li>

						
					<?php endif ?>
				<?php else: ?>
					<a class="nav-item nav-link mr-3 active" href="<?= base_url('login') ?>">LOGIN</a>
					<a class="nav-item nav-link mr-3 active" href="<?= base_url('register') ?>">REGISTER</a>
				<?php endif ?>
			</div>
		</div>
	</div>
</nav>
