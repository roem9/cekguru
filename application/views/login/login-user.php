<div class="container">
	<!-- Outer Row -->
	<div class="row justify-content-center">
		<div class="col-xl-5 col-lg-5 col-md-5">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg-12">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">أَهْلًا وَ سَهْلًا</h1>
								</div>
								<?php if( $this->session->flashdata('pesan') ) : ?>
									<div class="row">
										<div class="col-12">
											<?=$this->session->flashdata('pesan')?>
										</div>
									</div>
								<?php endif; ?>
								<form action="" method="POST">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" value="<?= set_value('username', '')?>" placeholder="Username" name="username" required>
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user" value="<?= set_value('password', '')?>" placeholder="Password" name="password" required>
									</div>
									<button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>