
 <div id="content">
           
                <div class="inner">
                    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ADD Document</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo site_url();?>/admin/submit_doc" method="post" enctype="multipart/form-data">
									
									<div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" placeholder="Enter Suitable Title" name="title">
                                            
                                        </div>
										
										<div class="form-group">
										<input type="hidden" name="id" value="<?php echo $this->user['int_user_id'];?>">
                                            <label>Description</label>
											
                                            <input class="form-control" placeholder="Description About Document" name="descrip">
                                            
                                        </div>
                                       
										
										
										<div class="form-group">
                                            <label>File</label>
                                            <input type="file" class="form-control"
											name="file">
                                        </div>
										
										
										
                                        <button type="submit" class="btn btn-default">Upload Document</button>
                                        
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
