<?php
$success = (isset($_GET['success']) && $_GET['success'] != '') ? $_GET['success'] : '';
?>


<div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Register a New User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
					<?php if ($success !=""){?>
					<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<?=$success;?>
					</div>
					<?php }?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="process.php?action=register" method="POST">
									
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">ID number</span>
                                            <input type="text" name="idnumber" class="form-control" placeholder="Type User's ID number" required>
                                        </div>
									
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">First Name</span>
                                            <input type="text" name="firstname" class="form-control" placeholder="Type User's First Name" required>
                                        </div>
									
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Last Name</span>
                                            <input type="text" name="lastname" class="form-control" placeholder="Type User' Last Name" required>
                                        </div>
                                       
										<div class="form-group">
											<label>User Authorization</label>
											<select  name="auth" class="form-control" required>
												<option value="">--Select Auth--</option>
												<option>Admin</option>
												<option>VPAA</option>
												<option>Area Head</option>
												<option>Faculty</option>
												<option>Student</option>
											</select>
											
                                            <p class="help-block">User's temporary password is <b>temppassword</b></p>
											
											<input type="hidden" name="password" value="temppassword">
										</div>
										
										<button type="submit" class="btn btn-primary">Register</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>