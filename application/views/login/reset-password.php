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
									<h1 class="h4 text-gray-900 mb-4">Reset Sandi</h1>
								</div>
									<?php if( $this->session->flashdata('pesan') ) : ?>
										<div class="row">
											<div class="col-12">
												<?=$this->session->flashdata('pesan')?>
											</div>
										</div>
									<?php endif; ?>
									<form action="<?=base_url()?>login/reset_password_by_id" method="POST">
										<input type="hidden" name="id_user" value="<?= $id?>">
										<div class="form-group">
											<input type="password" class="form-control form-control-user" placeholder="Password" name="password" id="password" required>
										</div>
										<div class="form-group">
											<input type="password" class="form-control form-control-user" placeholder="Konfirm Password" name="password1" id="password1" required>
										</div>
										<button type="submit" class="btn btn-primary btn-user btn-block" id="btnSubmit">Reset Sandi</button>
									</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$("#btnSubmit").click(function(){
		if($("#password").val() == $("#password1").val()){
			var c = confirm("yakin akan merubah password?");
			return c;
		} else {
			alert("Kolom password dan konfirm password harus sama")
			return false;
		}
	})
</script>