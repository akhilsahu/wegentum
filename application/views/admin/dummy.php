 <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">


                        <h2> Document's Table </h2>
                        
                    </div>
                </div>

                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						
						<form action="<?php echo site_url();?>/admin/search" method="post" enctype="multipart/form-data">	
                         <input type="search" id="search" name="search" placeholder="What are you looking for?">		    	
							<button>Search</button>
							</form>	
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
											<th>Description</th>
											<th>File</th>
											 <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
									<?php echo $complete_structure;?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            

            </div>




        </div>
       <!--END PAGE CONTENT -->
    </div>