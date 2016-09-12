

<div class="box box-warning">
            
			
			<div class="box-header with-border">
              <h3 class="box-title col-xs-6">Permissions - ABC Corp <small>(ACA-10000-1)</h3>
             <div class="col-xs-6 pull-right">
			<a class=" btn bg-orange btn-flat btn-social pull-right"> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		</div>
            </div>
			
 <div class="col-xs-12 header-new-main width-98 hide"> 
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">Managing all the Permissions of the Companies is done from the list below.</p>
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
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>Name</th>
								<th>Abc Corp</th>
							
								
								<th>Raymond Corp</th>
								<th>Obsorn Corp</th>
								<th>Rest Corp</th>
								
								

							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td>Company Admin</td>
								<td><input type="checkbox" checked/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
							</tr>
							
							<tr>
									<td>View Company</td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox" checked/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
							</tr>
							<tr>
								<td>Sign Document</td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox" checked/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
							</tr>
							<tr>
								<td>View HIPPA data</td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
							</tr>
							<tr>
								<td>Edit HIPPA data</td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
							</tr>
							<tr>
								<td>Approve E-File</td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
							</tr>
							
																			
						</tbody>

					</table>
					
				<div class="box-footer pull-right" >
               <a class="btn btn-success " href="<?php echo Yii::$app->homeUrl;?>client/dashboard/users">Save</a>
										
              <a  class="btn btn-default " href="<?php echo Yii::$app->homeUrl;?>client/dashboard/users">Cancel</a>
				
				 </div>
				</div>
			
			</div>
			<!-- /.box -->
		</div>
	</div>
</div>


<script type="text/javascript">
function agencySearch(){


	url='/admin/agency?filter=on';

	var filter_keyword =document.getElementById('filter_keyword').value;
	
	if (filter_keyword) {
		url += '&keyword='+ encodeURIComponent(filter_keyword);
	}

	var filter_status =document.getElementById('filter_status').value;
	
	if (filter_status !=0) {
		url += '&status=' + encodeURIComponent(filter_status);
	}

	var filter_package =document.getElementById('package').value;
	
	if (filter_package !=0) {
		url += '&package=' + encodeURIComponent(filter_package);
	}
	

	 var selects = document.getElementById("filter_pages");
	 var selected = document.getElementById("filter_pages").value;
	 
//	 var Value = selects.options[selects.selectedIndex].value;// will gives u
	 // value

	 var selectedText = selects.options[selects.selectedIndex].text;
//	 var selectedValue = selects.options[selected.selectedValue].value;
	 var filter_count = selectedText;
	 var filter_value = selected;
		
	 if (filter_count) {
			url += '&filter_pages=' + encodeURIComponent(filter_count);
	}
	 if (filter_value) {
			url += '&filter_value=' + encodeURIComponent(filter_value);
	}	
	
	location=url;

}

function clearGrid()
{
	url='/admin/agency';
	location=url;
	
}




</script>
		</div>
            
                        </div>
            <!-- /.box-body -->
          </div>