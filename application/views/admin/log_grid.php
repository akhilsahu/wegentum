<?php

$complete_structure='';

foreach($users as $user)
{
	
  $complete_structure.='<tr role="row" class="odd">

                        <td>'.$user['txt_msg'].'</td>
						<td>'.$user['dt_timestamp'].'</td>
                      </tr>';

}


?>

        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">


                        <h2> Log Grid </h2>



                    </div>
                </div>

                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables of Log Grid
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Message</th>
                                            <th>TimeStamp</th>
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