 <!--model -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" align="center">Add invoice</h3>
        </div>
        <div class="modal-body">
			
			<form  action="#" method="post" class="form-horizontal form-label-left">
            
               
				<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="date" name="date" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                </div>					
			    <div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-3">Comment<span class="required">*</span></label>
					<div class="col-md-7 col-sm-7 col-xs-12">
					<textarea name="comment" id="comment"class="form-control col-md-7 col-xs-12" required="required"> 
					</textarea>                    
					</div>
                </div> 
                <div class="form-group">
                        <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-3"><br/>
						    <button type="submit" class="btn btn-success">Submit</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
						    <button type="button" class="btn btn-danger " data-dismiss="modal" class="cancelbtn">Cancel</button>
						  <br>
                        </div>
                </div>					  
           </form>
        </div>
      </div>
    </div>
  </div> 