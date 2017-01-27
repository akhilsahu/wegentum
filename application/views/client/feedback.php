
 <div id="content">
           
                <div class="inner">
                    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Feedback</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo site_url();?>/client/submit_feedback" method="post" enctype="multipart/form-data">
									
									<div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Enter Name" name="name">
                                            
                                        </div>
										<div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" placeholder="Enter Title" name="title">
                                            
                                        </div>
										<div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Enter E-mail" name="email">
                                            
                                        </div>
										
										<div class="form-group">
                                            <label>Description</label>
											<textarea class="form-control" name=" description"rows="10" cols="10"></textarea>
                                            
                                            
                                        </div>
                                       
										
								
                                        <button type="submit" class="btn btn-default">Add Feedback</button>
                                        
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
