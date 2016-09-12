<style>
.red {
	color: red;
}

.center {
	text-align: center;
}
</style>

<script>
$(document).ready(function(){
			    $('#exampleAddusers').DataTable({

			    	"aoColumnDefs": [

										{

										"bSortable": false,

										"aTargets": [ -1,-2,-3,-4,-5,-6 ]

										}

										],
										
											"bFilter" : false,               
			    	"bLengthChange": false
			    });
			});
</script>

<div class="box box-warning">


	<div class="box-header with-border">
	<div class="col-md-12">
            <h3 class="box-title col-sm-6">Update User - <?php echo $company_details->company_name; ?> <small> (<?php echo $company_details->company_client_number; ?>) </small></h3>
               <div class="col-xs-6 pull-right">
			<a class=" btn bg-orange btn-flat btn-social pull-right"> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		</div>
            </div>
			</div>

	<div class="col-xs-12 header-new-main width-98 hide">
		<span class="header-icon-band"><i class="fa fa-file-text-o icon-band"
			style="font-weight: lighter;"></i></span>
		<p class="sub-header-new">User can be updated from below screen.</p>
	</div>

	<!-- /.box-header -->
	<div class="box-body">

		 <?=$this->render ( '_form', [ 'model_company_users' => $model_company_users,'company_details' => $company_details,'all_companies'=>$all_companies,'client_rights'=>$client_rights,'model_users'=>$model_users,'company_user_permissions'=>$company_user_permissions] )?>
			
	</div>
	<!-- /.box-body -->
</div>