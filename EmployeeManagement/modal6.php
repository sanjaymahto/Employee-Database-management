<!-- Modal -->
		<div class="modal fade" id="myModal6">
			<div class="modal-dialog" style="left:0px;">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" style="color:#000;">Employee search</h4>
					</div>
					<div class="modal-body">
						<p style="color:maroon;";>Enter the name of Employee:</p>
						<form role="form" action="search_script.php" method="POST">
							<div class="form-group">
								<input type="Text" class="form-control"  placeholder="Name" name="name" required = "true">
							</div>
								</br>
						    <button type="submit" name="submit" class="w3-btn w3-hover-green w3-border w3-border-green w3-round-xlarge">Search</button>
						</form><br/>
					</div>
				</div>
			</div>
		</div>
		<!-- End of myModal -->