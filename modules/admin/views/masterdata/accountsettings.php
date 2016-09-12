<script type="text/javascript">
	$(document).ready(function(){
		$("#admin_master_data").addClass("active");
	 $("#admin_master_data_tree").addClass("open");
	 $("#admin_account_settings").addClass("active");
	 
			    $('#exampleAccountsettings').DataTable({

			    	"aoColumnDefs": [

										{

										"bSortable": false,

										"aTargets": [ -1 ]

										}

										],
										
											"bFilter" : false,               
			    	"bLengthChange": false
			    });
			});
</script>

<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Settings</h3>
            </div>
			
 <div class="col-xs-12 header-new-main width-98 hide"> 
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">The settings done here apply all over the
			application</p>
</div> 

            <!-- /.box-header -->
            <div class="box-body">
            
            <div>

<div>

	<div class="row m-5">
		<div class="col-xs-12 panel-0">
			<div class="box">

				<!-- /.box-header -->
				<div class="box-body table-responsive">
					<table id="exampleAccountsettings" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">
								<th>Sl. No.</th>
								<th>Title</th>
								<th>Details</th>
								<th style="width:20%;">Current Value</th>
								<th>Revised Value</th>
								<th>Update</th>
							</tr>
						</thead>
						<tbody>
							
							<tr>

								<td>1</td>
								<td><?php echo $name;?></td>
								<td>Please specify the mail id that you want it to be "from mail" in sent mails.</td>
							    <td><?php echo $value;?></td>
							    
							    <td><input type="text" class="form-control" id="changed_value" maxlength="60" value=""/>
									</td>
									
								<td><i class="fa fa-save" style="cursor: pointer;" onclick="Updateaccountsetting(<?php echo $setting_id;?>);"></i></td>
								 
							</tr>
																				
						</tbody>

					</table>
				</div>
				
			</div>
			<!-- /.box -->
		</div>
	</div>
</div>

		</div>
            
                        </div>
            <!-- /.box-body -->
          </div>