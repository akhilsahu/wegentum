 <div id="content">
           
                <div class="inner">
                    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ADD Employee</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo site_url(); ?>/admin/submit_employee" method="post">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Enter Name" name="name">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input class="form-control" placeholder="Enter Email Id" name="email">
                                        </div>
										 <div class="form-group">
                                            <label>Phone No</label>
                                            <input class="form-control" placeholder="Enter Phone No." name="phone">
                                        </div>
										 <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Enter Password"
											name="password">
                                        </div>
										<div class="form-group">
                                            <label>Designation</label>
                                            <input class="form-control" placeholder="Enter Designation" name="designation">
                                     </div>
									 <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" placeholder="Enter Address" name="address">
                                     </div>
									 <div class="form-group">
                                            <label>Last Company Package</label>
                                            <input class="form-control" placeholder="Enter Last Company Package" type="text" name="lcpackage">
                                     </div>
									 <div class="form-group">
                                            <label>Last Company</label>
                                            <input class="form-control" placeholder="Enter Last Company" name="lcname">
                                     </div>
									 <div class="form-group">
                                            <label>Gender</label>
                                            <input type="radio" id="gender_male" name="gender" value="male"><label for="gender_male">Male</label>
											 <input type="radio" id="gender_female" name="gender" value="female"><label for="gender_female">Female</label>
                                     </div>
										 <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" class="form-control" placeholder="Enter Date" name="date">
                                     </div>
									  
									 
                                      <div>
                                       
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
										</div>
                                    </form>
                                </div>
                               
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
                    </div>
                    
                    
                    
 </div>
                </div>