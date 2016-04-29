<?php include "templates/document-header.php"; ?>
	<div class="container">
		<div class="row">
			<div class="login col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="text-center">UNIss</div>
					</div>
					
					<div class="panel-body">
						<form name="form" id="frmLogin" class="form-horizontal">
							
							<div class="input-group">
								
							<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</span>
								<input id="email" type="text" class="form-control" name="email" placeholder="Email">
							</div>
							
							
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
								</span>
								<input id="password" type="password" class="form-control" name="password" placeholder="Password">
							</div>
							
							<div class="checkbox">
								<label>
									<input type="checkbox">Remember me
								</label>
							</div>
							
							<div class="loginButton">
							<button type="submit" class="btn btn-primary">Login</button>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myRegister">Register</button>
                            <p id="loginResponse"></p>
								</div>
                        </form>
				</div>
			</div>
		</div>
	</div>
</div>

    <!-- Register Modal-->
<div class="modal fade bs-exmaple-modal-md registerM" id="myRegister" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md registerM-dialog" role="document">      
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registration</h4>
            </div>
            <div class="modal-body">
                <form id="frmRegister">
				        
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
                            </div>
                            <span id="emailError"></span>
                            <br>
						
						
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" placeholder="Password" class="form-control" name="password" required>
						</div>
                            <span id="password"></span>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password"  placeholder="Confirm Password" name="passwordRepeat" class="form-control" required>
						</div>
                            <span id="passwordRepeat"></span>
						<br>
                            <button type="submit" class="btn btn-primary" id="btnRegister">Register</button>
                        </form>
					</div>
					<div class="modal-footer">
						<p id="registerResponse"></p>
					</div>
                </div>
			</div>
		</div>
<?php include "templates/document-footer.php";?>