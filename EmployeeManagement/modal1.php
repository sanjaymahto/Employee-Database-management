<!-- Modal -->
		<div class="modal fade" id="myModal1">
			<div class="modal-dialog" style="left:0px;">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" style="color:maroon; text-align:center; font-style:bold;">Administrator Login:</h4>
					</div>
					<div class="modal-body">
						<form role="form" action="adminlog_script.php" method="POST">
							<div class="form-group">
								<input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="password" required = "true">
							</div>
						    <button type="submit" name="submit" class="w3-btn w3-hover-green w3-border w3-border-green w3-round-xlarge">Login</button>
						</form><br/>
						<a href="#myModal4" data-toggle="modal" style="color:maroon; font-family:Tahoma;"><b>Forgot Password?</b></a>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!-- End of myModal -->