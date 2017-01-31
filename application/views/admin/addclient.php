 <div id="content">
           
                <div class="inner">
                    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ADD Client</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo site_url();?>/admin/submit_cli" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control" placeholder="Enter First Name" name="fname">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input class="form-control" placeholder="Enter Middle Name" name="mname">
                                        </div>
										 <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" placeholder="Enter Last Name" name="lname">
                                        </div>
										 <div class="form-group">
                                            <label>Current Address 1</label>
                                            <input class="form-control" placeholder="Enter Current Address1"
											name="current_address1">
                                        </div>
										<div class="form-group">
                                            <label>Current Address2</label>
                                            <input class="form-control" placeholder="Enter Current Address2"
											name="current_address2">
                                        </div>
										<div class="form-group">
                                            <label>Date Of Birth</label>
                                            <input type="date" class="form-control" placeholder="Enter Date Of Birth" name="dob">
										</div>
										<div class="form-group">
                                            <label>Country</label>
                                            <input class="form-control" placeholder="Enter Country"
											name="country">
                                        </div>
										
										<div class="form-group">
                                            <label>State</label>
                                            <input class="form-control" placeholder="Enter State"
											name="state">
                                        </div>
										<div class="form-group">
                                            <label>City</label>
                                            <input class="form-control" placeholder="Enter City"
											name="city">
                                        </div>
										<div class="form-group">
                                            <label>Pincode</label>
                                            <input class="form-control" placeholder="Enter Pincode"
											name="pincode">
                                        </div>
										<div class="form-group">
                                            <label>Landline</label>
                                            <input class="form-control" placeholder="Enter Landline No."
											name="landline">
                                        </div>
										<div class="form-group">
                                            <label>Phone NO</label>
                                            <input class="form-control" placeholder="Enter Phone NO"
											name="phone_no">
                                        </div>
										<div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Enter Email"
											name="email">
                                        </div>
										
										<div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Enter Email"
											name="password">
                                        </div>
										<div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" class="form-control"
											name="photo">
                                        </div>
										<div class="form-group">
                                            <label>Signature Photo</label>
                                            <input type="file" class="form-control" placeholder="Enter Photo"
											name="image[]">
                                        </div>
										<div class="form-group">
                                            <label>Pan Photo</label>
                                            <input type="file" class="form-control" placeholder="Enter Photo"
											name="image[]">
                                        </div>
										<div class="form-group">
                                            <label>ID Photo</label>
                                            <input type="file" class="form-control" placeholder="Enter Photo"
											name="image[]">
                                        </div>
										<div class="form-group">
                                            <label>ID Back Photo</label>
                                            <input type="file" class="form-control" placeholder="Enter Photo"
											name="image[]">
                                        </div>
										<div class="form-group">
                                            <label>Cheque Photo</label>
                                            <input type="file" class="form-control" placeholder="Enter Photo"
											name="image[]">
                                        </div>
									
										<div class="form-group">
                                            <label>Father's Name</label>
                                            <input class="form-control" placeholder="Enter Father's Name"
											name="father_name">
                                        </div>
										<div class="form-group">
                                            <label>Mother's Name</label>
                                            <input class="form-control" placeholder="Enter Mother's Name"
											name="mother_name">
                                        </div>
										<div class="form-group">
                                            <label>Gender :</label>
                                            <input type="radio" id="gender_male" name="gender" value="male" placeholder="Enter Gender"/><label for="gender_male">Male</label>
											<input type="radio" id="gender_female" name="gender" value="female"><label for="gender_male">Female</label>
                                        </div>
										<div class="form-group">
                                            <label>Maritial Status</label>
                                            <input class="form-control" placeholder="Enter Maritial Status"
											name="status">
                                        </div>
										<div class="form-group">
                                            <label>Nationality :</label>
                                            <input type="radio" id="nationality_indian" name="nationality" value="indian"/><label for="nationality_indian">Indian</label>
											<input type="radio" id="nationality_other" name="nationality" value="other"><label for="nationality_other">Other</label>
                                        </div>
										<div class="form-group">
                                            <label>PAN NO:</label>
                                            <input class="form-control" placeholder="Enter PAN NO"
											name="pan_no">
                                        </div>
										<div class="form-group">
                                            <label>Annual Income</label>
                                            <input class="form-control" placeholder="Enter Annual Income"
											name="annual_income">
                                        </div>
										<div class="form-group">
                                            <label>Nominee Name</label>
                                            <input class="form-control" placeholder="Enter Nominee Name"
											name="nominee_name">
                                        </div>
										<div class="form-group">
                                            <label>Nominee Relation</label>
                                            <input class="form-control" placeholder="Enter Nominee Relation"
											name="nominee_relation">
                                        </div>
										<div class="form-group">
                                            <label>Nominee Allocation</label>
                                            <input class="form-control" placeholder="Enter Nominee Allocation"
											name="nominee_allocation">
                                        </div>
										<div class="form-group">
                                            <label>Bank Name</label>
                                            <input class="form-control" placeholder="Enter Bank Name"
											name="bank_name">
                                        </div>
										<div class="form-group">
                                            <label>Bank Type</label>
                                            <input class="form-control" placeholder="Enter Bank Type"
											name="bank_type">
                                        </div>
										<div class="form-group">
                                            <label>Bank Account No:</label>
                                            <input class="form-control" placeholder="Enter Bank Account No"
											name="bank_acc_no">
                                        </div>
										<div class="form-group">
                                            <label>Bank IFSC Code:</label>
                                            <input class="form-control" placeholder="Enter Bank IFSC Code"
											name="bank_ifsc_code">
                                        </div>
										<div class="form-group">
                                            <label>Bank Address</label>
                                            <input class="form-control" placeholder="Enter Bank Address"
											name="bank_address">
                                        </div>
										<div class="form-group">
                                            <label>Permanet address</label>
                                            <input class="form-control" placeholder="Enter Permanet address"
											name="permanent_address">
                                        </div>
										<div class="form-group">
                                            <label>Alternate Address</label>
                                            <input class="form-control" placeholder="Enter Alternate Address"
											name="alternate_address">
                                        </div>
										<div class="form-group">
                                            <label>Permanent Country</label>
                                            <input class="form-control" placeholder="Enter Permanent Country"
											name="permanent_country">
                                        </div>
										<div class="form-group">
                                            <label>Permanent State</label>
                                            <input class="form-control" placeholder="Enter Permanent State"
											name="permanent_state">
                                        </div>
										<div class="form-group">
                                            <label>Permanent City</label>
                                            <input class="form-control" placeholder="Enter Permanent City"
											name="permanent_city">
                                        </div>
										<div class="form-group">
                                            <label>Permanent Zip Code</label>
                                            <input type="number" class="form-control" placeholder="Enter Permanent Zip Code"
											name="permanent_zip_code">
                                        </div>
										
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