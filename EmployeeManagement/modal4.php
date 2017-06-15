

<!-- Modal -->
		<div class="modal fade" id="myModal4">
			<div class="modal-dialog" style="left:0px;">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" style="color:#000;">Password Restore:</h4>
					</div>
					<div class="modal-body">
						<form role="form" action="password_script.php" method="POST">
							<div class="form-group">
								<input type="email" class="form-control"  placeholder="Please Enter Your Email" name="e-mail" required = "true">
								</br>
								<?php echo $_GET['m2'];?>		
							</div>
							</br>
						    <button type="submit" name="submit" class="w3-btn w3-hover-green w3-border w3-border-green w3-round-xlarge">Submit</button>
						</form><br/>
					</div>
				</div>
			</div>
		</div>
		<!-- End of myModal -->