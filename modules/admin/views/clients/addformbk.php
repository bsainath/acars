	<style>
	.header-new-main {
	margin-bottom:0px;
	}
	.form-height{
    height: 42px;
	}
	.imp_red{
	color:red;
	}
	</style>
	<div class=" box box-warning container-fluid">
	
	         <div class="box-header with-border">
              <h3 class="box-title">Add Client</h3>
               <span style="float:right;cursor:pointer;"><a href="<?php echo Yii::$app->homeUrl;?>admin/clients">Back to Manage Clients</a></span>
        
            </div>
						
			 <div class="col-xs-12 header-new-main width-98 hide"> 
				<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
				<p class="sub-header-new">You can add client from this screen.</p>
			</div> 
	<div class="col-md-12">
		<div class=" box-info">
          
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" style="margin-left: 33px;">
            
            
              <div class="box-body">
              <div class="col-md-6">
              
                  <div class="form-group">
                   <div class="col-sm-12">
                  <label for="inputEmail3" class="control-label"><h4>Brand<span class="imp_red">*</span></h4></label>
                 <select class="form-control form-height">
                     <option>Select</option>
                     <option>ACAReportingService.com</option>
                     <option>Pro-ACAReporting.com</option>
                     <option>AbyBenefits-ACAReporting.com</option>
                     <option>StaffACA.com</option>
                     <option>Sky-ACAReporting.com</option>
                     </select>
                
                 </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-12">
                  <label class="control-label"><h4>Client Number</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="" readonly disabled value="ACA-10000">
                  </div>
                </div>
                
                <div class="form-group">
                 <div class="col-sm-12">
                  <label class="control-label"><h4>Client Name<span class="imp_red">*</span></h4></label>
                     <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-12">
                  <label class="control-label"><h4>Order Number</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                   <div class="col-sm-12">
                  <label for="inputEmail3" class="control-label"><h4>Contact Person First Name<span class="imp_red">*</span></h4></label>
                     <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                
                <div class="form-group">
                   <div class="col-sm-12">
                  <label for="inputEmail3" class="control-label"><h4>Contact Person Last Name<span class="imp_red">*</span></h4></label>
                      <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                   <div class="col-sm-12">
                  <label for="inputEmail3" class="control-label"><h4>Contact Person Email<span class="imp_red">*</span></h4></label>
                     <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
               
               <div class="form-group">
                   <div class="col-sm-12">
                  <label for="inputEmail3" class="control-label"><h4>Account Manager</h4></label>
                     <select class="form-control form-height">
                     <option>Select</option>
                     <option>Manager 1</option>
                     <option>Manager 2</option>
                     <option>Manager 3</option>
                     </select>
                     </div>
                </div>
                
                </div>
                 <div class="col-md-6">
                 
                <div class="form-group">
                   <div class="col-sm-12">
                  <label for="inputEmail3" class="control-label"><h4>Contact Person Phone Number<span class="imp_red">*</span></h4></label>
                     <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                
                <div class="form-group">
                   <div class="col-sm-12">
                  <label for="inputEmail3" class="control-label"><h4>Product</h4></label>
                     <select class="form-control form-height">
                     <option>Select</option>
                     <option>ACA B Forms Only</option>
                     <option>ACA Penalty Letter Consulting</option>
                     <option>ACA General Consulting</option>
                    
                     
                     </select>
                     
                     </div>
                </div>
                
            
                
              
                   <div class="form-group">
                   <div class="col-sm-12">
                  <label for="inputEmail3" class="control-label"><h4>Package Type<span class="imp_red">*</span></h4></label>
                  <select class="form-control form-height">
                     <option>Select</option>
                     <option>Budget</option>
                     <option>Enhanced</option>
                     <option>True Full Service</option>
                     </select>
                  </div>
                </div>
                
                <div class="form-group">
                   <div class="col-sm-12">
                  <label for="inputEmail3" class="control-label"><h4>ACA Year<span class="imp_red">*</span></h4></label>
                   <select class="form-control form-height">
                     <option>Select</option>
                     <option>2015</option>
                     <option selected>2016</option>
                    
                     </select>
                    </div>
                </div>
                
                <div class="form-group">
                   <div class="col-sm-12">
                  <label for="inputEmail3" class="control-label"><h4>Reporting Structure<span class="imp_red">*</span></h4></label>
                   <select class="form-control form-height">
                     <option>Select</option>
                     <option>Single EIN</option>
                     <option >Union</option>
                      <option >Multiple Aggregated Companies</option>
                    
                     </select>
                    </div>
                </div>
                
                <div class="form-group">  
                <div class="col-sm-12">
                  <label for="inputEmail3" class="control-label"><h4>Number of Forms Bought</h4></label>
                   <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-12">
                  <label for="inputEmail3" class="control-label"><h4>Sub EIN Count</h4></label>
                  <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                            
                <div class="form-group">
                    <div class="col-sm-12">
                  <label for="inputEmail3" class="control-label"><h4>Price Paid</h4></label>
                   <div class="input-group " style="margin-bottom: 10px;">
																				<span class="input-group-addon">$ </span> <input type="text"  name=""  class="form-control form-height" >
																			</div>
                   </div>
                </div>
                
                 </div>
                
                <div class="col-sm-12">
             <div class="pull-right" >
                
                <button type="submit"  class="btn btn-success ">Save</button>
                <a  class="btn btn-default" href="<?php echo Yii::$app->homeUrl;?>admin/clients">Cancel</a>
                </div>
                 </div>
              </div>
              <!-- /.box-body -->
               
              <!-- /.box-footer -->
            </form>
          </div>
						</div>		
						</div>