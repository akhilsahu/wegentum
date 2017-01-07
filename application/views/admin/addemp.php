<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title"> Employee Registration Form</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo site_url(); ?>/home/submit" method="post">
                  <div class="box-body">
				  
				  <div class="form-group">
                      <label for="exampleInputPassword1">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="Email" name="email" placeholder="Enter email">
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Phone NO:</label>
                      <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone No:">
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Package</label>
                      <input type="text" class="form-control" id="package" name="lpackage" placeholder="Package">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Last Company Name</label>
                      <input type="text" class="form-control" id="company" name="lcname"placeholder="Company Name">
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Gender</label>
                      <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender">
                    </div>
					
                                       
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
			  </div>

            