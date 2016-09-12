
<?php $get_id = Yii::$app->request->get();
	  $company_id = $get_id['c_id'];
	 
		?>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use app\components\EncryptDecryptComponent;
$usStates = array(
    "1" => "AL",
    "2" => "AK",
    "3" => "AZ",
    "4" => "AR",
    "5" => "CA",
    "6" => "CO",
    "7" => "CT",
    "8" => "DE",
    "9" => "FL",
    "10" => "GA",
    "11" => "HI",
    "12" => "ID",
    "13" => "IL",
    "14" => "IN",
    "15" => "IA",
    "16" => "KS",
    "17" => "KY",
    "18" => "LA",
    "19" => "ME",
    "20" => "MD",
    "21" => "MA",
    "22" => "MI",
    "23" => "MN",
    "24" => "MS",
    "25" => "MO",
    "26" => "MT",
    "27" => "NE",
    "28" => "NV",
    "29" => "NH",
    "30" => "NJ",
    "31" => "NM",
    "32" => "NY",
    "33" => "NC",
    "34" => "ND",
    "35" => "OH",
    "36" => "OK",
    "37" => "OR",
    "38" => "PA",
    "39" => "RI",
    "40" => "SC",
    "41" => "SD",
    "42" => "TN",
    "43" => "TX",
    "44" => "UT",
    "45" => "VT",
    "46" => "VA",
    "47" => "WA",
    "48" => "WV",
    "49" => "WI",
    "50" => "WY"
    );

$suffix = array (
		"Capt" => "Capt",
		"Dr" => "Dr",
		"Mayor" => "Mayor",
		"Miss" => "Miss",
		"Mr" => "Mr",
		"Mrs" => "Mrs",
		"Ms" => "Ms",
		"|" => "|",
		"||" => "||",
		"|||" => "|||",
		"Jr" => "Jr",
		"Sr" => "Sr" 
);

?>

<?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data','class'=>'']]); ?>

<div class="col-md-12">

			<div class="col-sm-6">
				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>
								First Name<span class="red">*</span>
							</h4> </label>
					</div>
					<div class="col-sm-6">
						<?= $form->field($model_company_users, 'first_name')->textInput(['maxlength' => '100','class'=>'form-control form-height'])->label(false)?>
				

					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>
								Last Name<span class="red">*</span>
							</h4> </label>
					</div>
					<div class="col-sm-6">
						<?= $form->field($model_company_users, 'last_name')->textInput(['maxlength' => '100','class'=>'form-control form-height'])->label(false)?>
				

					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>
								Email<span class="red">*</span>
							</h4> </label>
					</div>
					<div class="col-sm-6">
						<?= $form->field($model_users, 'useremail')->textInput(['maxlength' => '100','class'=>'form-control form-height','readonly'=> $model_users->isNewRecord ? false : true])->label(false)?>
				

					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>Phone</h4> </label>
					</div>
					<div class="col-sm-6">
						<?= $form->field($model_company_users, 'phone')->widget(\yii\widgets\MaskedInput::className(), [  'mask' => '(999) 999-9999',])->textInput(['maxlength' => '100','class'=>'form-control form-height'])->label(false)?>
				

					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>
								What describes your role with this company?<span class="red">*</span>
							</h4> </label>
					</div>
					<div class="col-sm-6">
						<?= $form->field($model_company_users, 'role_notes')->textArea(['maxlength' => '250','class'=>'form-control form-height'])->label(false)?>
				

					</div>
				</div>

			</div>
			<div class="col-sm-6">

				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>Address 1</h4> </label>
					</div>
					<div class="col-sm-6">
						<?= $form->field($model_company_users, 'address_1')->textInput(['maxlength' => '200','class'=>'form-control form-height'])->label(false)?>
				

					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>Address 2 (Apt#, Suite)</h4> </label>
					</div>
					<div class="col-sm-6">
						<?= $form->field($model_company_users, 'address_2')->textInput(['maxlength' => '200','class'=>'form-control form-height'])->label(false)?>
				

					</div>
				</div>

				
					<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>State</h4> </label>
					</div>
					<div class="col-sm-6">
					<?php 
					echo $form->field($model_company_users, 'state')->dropDownList($usStates, ['prompt'=>'Select','class'=>'form-control form-height'])->label(false);;
					  ?>
						

					</div>
				</div>
				
				
				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>City</h4> </label>
					</div>
					<div class="col-sm-6">
						<?= $form->field($model_company_users, 'city')->textInput(['maxlength' => '200','class'=>'form-control form-height'])->label(false)?>
				

					</div>
				</div>

			
				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>Zip code</h4> </label>
					</div>
					<div class="col-sm-6">
						<?= $form->field($model_company_users, 'zip')->textInput(['maxlength' => '200','class'=>'form-control form-height'])->label(false)?>
				

					</div>
				</div>

			</div>


			<div class="">

				<div class="col-xs-12 panel-0">
					<div class="box">
						<div class="box-header with-border padding-left-0">
							<h3 class="box-title col-sm-10 padding-left-0">Company Access</h3>



						</div>

						<!-- /.box-header -->
						<div class="box-body table-responsive padding-left-0 padding-right-0">
							<table id="exampleAddusers" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>Name</th>
								<?php if(!empty($client_rights)) {
								foreach ($client_rights as $rights)
								{
									?>
								<th><?php echo $rights->permission_name; ?></th>
								<?php } } ?>
								
								
								

							</tr>
						</thead>
						<tbody>
							<?php if(!empty($company_details)) {
							
								$encrypt_component = new EncryptDecryptComponent();
								$encrypt_id = $encrypt_component->encrytedUser($company_details->company_id);
								?>
							<tr>
								<td><?php echo $company_details->company_name; ?></td>
								
								<?php if(!empty($client_rights)) {
								foreach ($client_rights as $rights)
								{
									?>
								<td><input type="checkbox" name="userpermission[]" <?php if(in_array ( $rights->client_permission_id, $company_user_permissions, TRUE )) {?>checked <?php }?> value="<?php echo $rights->client_permission_id; ?>"/></td>
								<?php } } ?>
								
							</tr>
							<?php } ?>
						
							
																			
						</tbody>

					</table>
						</div>

						<!-- /.box-body -->

					</div>
					<!-- /.box -->
				</div>

			</div>
			
			
			<div class="col-sm-12">
			 <div class="box-footer pull-right" >
			 	<?= Html::submitButton($model_company_users->isNewRecord ? 'Save' : 'Update', ['class' => $model_company_users->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    
              
										
              <a  class="btn btn-default " href="<?php echo Yii::$app->homeUrl;?>client/companyuser?c_id=<?php echo $company_id; ?>">Cancel</a>
											
                 </div>
			</div>
		</div>
		<?php ActiveForm::end(); ?>