<div class="box box-warning">


            <div class="box-header with-border">
              <h3 class="box-title">Company	Users - ABC Corp <small>(ACA-10000-1)</h3>
            </div>
			
 <div class="col-xs-12 header-new-main width-98"> 
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">Admin can maintain the list of Photographers here and all these photographers get a login account on the system after email verification.</p>
</div> 

            <!-- /.box-header -->
            <div class="box-body">
            
            <div>
<div class="table-responsive grid-filter m-5" style="float: left">
	<table class="table filter-table middle-align mb-0">
		<tbody>
			<tr class="filter-div-back">


				
				
				<td title="Add User">
				<button type="reset" class="btn btn-success btn-sm filter-btn-search" style="">
				<i class="fa fa-plus" aria-hidden="true" style="margin-right:5px;"></i>Add User</button></td>

				


			</tr>
		</tbody>
	</table>
</div>
<div>

	<div class="row m-5">
		<div class="col-xs-12 panel-0">
			<div class="box">

				<!-- /.box-header -->
				<div class="box-body table-responsive">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>First Name</th>
								<th>Last Name</th>
								<th>Company	Name</th>
								
								<th>Email</th>
								<th>Phone</th>
								<th>Role</th>
								<th>Access</th>
								

							</tr>
						</thead>
						<tbody>
							
							<tr>

								<td>Bob</td>
								<td>Baily</td>
								<td>ABC.corp</td>
								
								<td>bob@abc.com</td>
								<td>878-458-8878</td>
								<td>New	Role</td>
								
								<td>sign,read,edit</td>
								
							</tr>
							
							<tr>

								<td>Brian</td>
								<td>Richard</td>
								<td>xyz.corp</td>
								
								<td>brain@aa.com</td>
								<td>878-458-8878</td>
								<td>New	Role</td>
								
								<td>sign,read</td>
								
							</tr>
							
							<tr>

								<td>Kelly</td>
								<td>Fox</td>
								<td>Fox.corp</td>
								
								<td>kelly@fox.com</td>
								<td>878-458-8878</td>
								<td>Accounts</td>
								
								<td>sign</td>
								
							</tr>
							
							<tr>

								<td>James</td>
								<td>Key</td>
								<td>James.corp</td>
								
								<td>James@abc.com</td>
								<td>878-458-8878</td>
								<td>Payrole</td>
								
								<td>sign,read,edit</td>
								
							</tr>
							
																				
						</tbody>

					</table>
				</div>
				<ul class="pagination">
					<li><a> << </a></li>
					<li class="active"><a>1 <span class="sr-only">(current)</span>
					</a></li>
					<li><a>2</a></li>
					<li><a>3</a></li>
					<li><a>4</a></li>
					<li><a>5</a></li>
					<li><a>>></a></li>
				</ul>
				<!-- /.box-body -->
				<div class="hide pagination pull-right">
							<div class="results">Showing 1 to 1 of 1 (1 Page)</div>							<select id="filter_pages" onchange="agencySearch();" name="lookup_value">
<option value="3">5</option>
<option value="4">10</option>
<option value="5">15</option>
<option value="6">20</option>
<option value="7">25</option>
</select>							</div>
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