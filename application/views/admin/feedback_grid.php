<?php

$complete_structure='';

foreach($users as $user)
{
	
  $complete_structure.='<tr role="row" class="odd">

                        <td>'.$user['txt_name'].'</td>
						<td>'.$user['txt_title'].'</td>
						<td>'.$user['time_stamp'].'</td>
						

                        <td>

						
						
                       <a onclick="submit_feedback('.$user['int_feedback_id'].')" id='.$user['int_feedback_id'].' class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">View Feedback</a>
                            
                        </td>
						
                      </tr>';

}


?>

        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">


                        <h2> Feedback List</h2>



                    </div>
                </div>

                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
											<th>Title</th>
                                           
											<th>Time Stamp</th>
                                            
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

	
	
	
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Details Feedback</h4>
        </div>
        <div class="modal-body">
         <div class="form-group">
                                            <label>Name</label>
											
                                            <input class="form-control" readonly id="name" name="name">
                                            
                                        </div>
										<div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" readonly id="title" name="title">
                                            
                                        </div>
										<div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" readonly id="email" name="email">
                                            
                                        </div>
										
										<div class="form-group">
                                            <label>Description</label>
											<input class="form-control" readonly id="description" name="description">
											
                                        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <script>
 function submit_feedback(id)
 {
	var id=id;
		$.ajax({
			url:"<?php echo site_url().'/admin/get_feedback/'?>"+id,
			success:function(data)
			{
				if(data)
				{
				var obj=JSON.parse(data);
				//alert(obj);
				$("#name").val(obj.txt_name);
				$("#title").val(obj.txt_title);
				$("#email").val(obj.txt_email);
				$("#description").val(obj.txt_description);
				}
				else
				{
					alert("Data not Recieved");
				}
			},
			error:function(response)
			{
				alert("failure");
			},
		});
 }
  </script>
  
</div>