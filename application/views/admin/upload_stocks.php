<!DOCTYPE html>
<html lang="en">
 <body>    
    <br><br>
        <div class="container">
            <div class="row">
             <div class="col-md-6" id="form-login">
                    <form class="well" action="<?php echo site_url(); ?>/ExcelDataInsert/ExcelDataAdd" method="post" name="upload_excel" enctype="multipart/form-data">
                        <fieldset>
                            <legend>Import CSV/Excel file</legend>
                            <div class="control-group">
                                <div class="control-label">
                                    <label>Please Select Only Excel File:</label>
                                </div>
                                <div class="controls form-group">
                                    <input type="file" name="userfile" id="userfile" class="input-large form-control" placeholder="Plse Select Only Excel File">
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <div class="controls">
                                <button type="submit" id="submit" name="upload" class="btn btn-success btn-flat btn-lg pull-right button-loading" data-loading-text="Loading...">Upload</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-md-3 hidden-phone"></div>
            </div>
        </div>
 </body>
</html>