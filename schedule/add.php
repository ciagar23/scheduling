<?php
$success = (isset($_GET['success']) && $_GET['success'] != '') ? $_GET['success'] : '';
?>


<div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Create an exam schedule request</h1>
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
                            Fill in the forms completely
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="process.php?action=create" method="POST">
									
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Subject Code</span>
                                            <input type="text" name="idnumber" class="form-control" placeholder="Type Subject Code" required>
                                        </div>
										
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Subject Name</span>
                                            <input type="text" name="idnumber" class="form-control" placeholder="Type Subject Name" required>
                                        </div>
										
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Date</span>
                                            <input type="date" name="idnumber" class="form-control" placeholder="Type User's ID number" required>
                                        </div>
										
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Time</span>
                                            <input type="Time" name="idnumber" class="form-control" placeholder="Type User's ID number" required>
                                        </div>
										
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Room</span>
                                            <input type="text" name="idnumber" class="form-control" placeholder="" required>
                                        </div>
                                       
										<div class="form-group">
											<label>Proctor</label>
											<select  name="auth" class="form-control" required>
													<?=buildProctorOptions();?>
											</select>
											
											<input type="hidden" name="password" value="temppassword">
										</div>
                                       
										<div class="form-group">
											<label>Mentor</label>
											<select  name="auth" class="form-control" required>
													<?=buildMentorOptions();?>
											</select>
											
											<input type="hidden" name="password" value="temppassword">
										</div>
                                       
										<div class="form-group">
										
											<div class="col-xs-3">
											
												<label>Course</label>
												<select  name="auth" class="form-control" required>
														<option>BSBA</option>
														<option>BSIT</option>
														<option>BSHM</option>
														<option>BSTM</option>
												</select>
											</div>
											
										
											<div class="col-xs-3">
											
												<label>Year</label>
												<select  name="auth" class="form-control" required>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
												</select>
											</div>
											
										
											<div class="col-xs-3">
											
												<label>Section</label>
												<select  name="auth" class="form-control" required>
														<option>A</option>
														<option>B</option>
														<option>C</option>
														<option>D</option>
												</select>
											</div>
											
											<input type="hidden" name="password" value="temppassword">
										</div>
										
										<br>
										<br>
										<br>
										<br>
										
										
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">School Year</span>
                                            <input type="text" name="idnumber" class="form-control" placeholder="" required>
											
                                        </div>
										
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Semester</span>
                                            <input type="text" name="idnumber" class="form-control" placeholder="" required>
											
                                        </div>
										
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Term</span>
                                            <input type="text" name="idnumber" class="form-control" placeholder="" required>
											
                                        </div>
										
										<div class="form-group col-xs-12">
											<button type="submit" class="btn btn-primary">Submit Request</button>
										</div>
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