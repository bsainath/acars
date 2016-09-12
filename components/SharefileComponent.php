<?php

namespace app\components;

use Yii;
use yii\base\Component;
use app\models\TblAcaSharefileFolders;
use app\models\TblAcaSharefileEmployees;
use app\models\TblAcaCompanies;

class SharefileComponent extends Component {
	
	/**
	 * Authenticate via username/password. Returns json token object.
	 *
	 * @param string $hostname - hostname like "myaccount.sharefile.com"
	 * @param string $client_id - OAuth2 client_id key
	 * @param string $client_secret - OAuth2 client_secret key
	 * @param string $username - my@user.name
	 * @param string $password - my password
	 * @return json token
	 */
	
	function authenticate($hostname, $client_api_id, $client_secret, $username, $password) {
		$uri = "https://".$hostname."/oauth/token";
		//echo "POST ".$uri."\n";
	 
		$body_data = array("grant_type"=>"password", "client_id"=>$client_api_id, "client_secret"=>$client_secret,
					  "username"=>$username, "password"=>$password);
		$data = http_build_query($body_data);
		 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $uri);
		curl_setopt($ch, CURLOPT_TIMEOUT, 300);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_VERBOSE, FALSE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/x-www-form-urlencoded'));
	 
		$curl_response = curl_exec ($ch);
	 
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$curl_error_number = curl_errno($ch);
		$curl_error = curl_error($ch);
	 
		//echo $curl_response."\n"; // output entire response
		//echo $http_code."\n"; // output http status code
		 
		curl_close ($ch);
		$token = NULL;
		if ($http_code == 200) {
			$token = json_decode($curl_response);
			//print_r($token); // print entire token object
		}
		return $token;
	}

	function get_authorization_header($token) {
		return array("Authorization: Bearer ".$token->access_token);
	}

	function get_hostname($token) {
		return $token->subdomain.".sf-api.com";
	}
	
	/**
	 * Get the root level Item for the provided user. To retrieve Children the $expand=Children
	 * parameter can be added.
	 *
	 * @param string $token - json token acquired from authenticate function
	 * @param boolean $get_children - retrieve Children Items if True, default is FALSE
	 */
	function get_root($token, $get_children=FALSE) {
		$uri = "https://".$this->get_hostname($token)."/sf/v3/Items";
		if ($get_children == TRUE) {
			$uri .= "?\$expand=Children";
		}
		//echo "GET ".$uri."\n";
	 
		$headers = $this->get_authorization_header($token);
		 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $uri);
		curl_setopt($ch, CURLOPT_TIMEOUT, 300);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_VERBOSE, FALSE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	 
		$curl_response = curl_exec ($ch);
	 
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$curl_error_number = curl_errno($ch);
		$curl_error = curl_error($ch);
	 
		//echo $curl_response."\n"; // output entire response
		//echo $http_code."\n"; // output http status code
		 
		curl_close ($ch);
	 
		$root = json_decode($curl_response);
		//print_r($root); // print entire json response
		//echo $root->Id." ".$root->CreationDate." ".$root->Name."\n";
		if (property_exists($root, "Children")) {
			foreach($root->Children as $child) {
				//echo $child->Id." ".$child->CreationDate." ".$child->Name."\n";
			}
		}
	}
	
	/******************* function to create a new employee in SHAREFILE ***************/
	
	public function create_employee($hostname, $client_api_id, $client_secret, $username, $password, $client_id, $client_logged_id, $email, $firstname, $lastname) {
								
		$clientpassword = 'Password1!';
		
		$token = $this->authenticate($hostname, $client_api_id, $client_secret, $username, $password);
		
		if ($token) {
			$this->get_root($token, TRUE);
		}
		
	    $uri = "https://".$this->get_hostname($token)."/sf/v3/Users/AccountUser";
		//echo "POST ".$uri."\n";
	 
		$client = array("Email"=>$email, "FirstName"=>$firstname, "LastName"=>$lastname,
				"Password"=>$clientpassword,"IsEmployee"=>TRUE,"IsAdministrator"=>FALSE,"CanCreateFolders"=>TRUE,"CanUseFileBox"=>TRUE,
				"CanManageUsers"=>TRUE,
				"Preferences"=>array("CanResetPassword"=>FALSE, "CanViewMySettings"=>FALSE));
		$data = json_encode($client);
		
		$headers = $this->get_authorization_header($token);
		
		$headers[] = "Content-Type: application/json";
			 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $uri);
		curl_setopt($ch, CURLOPT_TIMEOUT, 300);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_VERBOSE, FALSE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	 
		$curl_response = curl_exec ($ch);
	 
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$curl_error_number = curl_errno($ch);
		$curl_error = curl_error($ch);
	 
		//echo $curl_response."\n"; // output entire response
		//echo "http_code = ".$http_code."\n"; // output http status code
	 
		curl_close ($ch);
	 
		if ($http_code == 200) {
			$client = json_decode($curl_response);
			//print_r($client); // print entire new item object
			
			$model_sharefile = new TblAcaSharefileEmployees();
			
			$model_sharefile->user_id = $client_logged_id;
			$model_sharefile->client_id = $client_id;
			$model_sharefile->username = $client->Username;
			$model_sharefile->password = $clientpassword;
			$model_sharefile->sharefile_employee_id = $client->Id;
			$model_sharefile->created_date = date ( 'Y-m-d H:i:s' );
			$model_sharefile->isNewRecord = true;
			$model_sharefile->sharefile_user_id = NULL;
	
			if($model_sharefile->save())
			{
				$result = $this->create_sharefile_folder($hostname, $client_api_id, $client_secret, $client_logged_id, $client_id, $client->Username, $clientpassword);
				if($result == 'success'){
					return 'success';
				}
				else{
					return 'error occured';
				}				
			}
			else{
				return 'error occured';
			}
		}
		else{
			return 'error occured';
		}
	}
	
	/******************* function to create a new folder for every company in SHAREFILE ***************/
	
	public function create_sharefile_folder($hostname, $client_api_id, $client_secret, $client_logged_id, $client_id, $new_username, $new_password){
		
		$token = $this->authenticate($hostname, $client_api_id, $client_secret, $new_username, $new_password);
	
		if ($token) {
			$this->get_root($token, TRUE);
		}
		
		$parent_id = $this->get_home_folder($hostname, $client_api_id, $client_secret,$new_username, $new_password);
		
		/// get the company names of the client //
		
		$company_details = TblAcaCompanies::find()->where(['client_id' => $client_id])->orderBy('company_id')->all();
		$company_count = count($company_details);
		$count=0;
		if(!empty($company_details)){
			foreach($company_details as $company){
				$name = $company->company_client_number;
				$company_id = $company->company_id;
				$result = $this->create_company_folder($token, $parent_id, $name, $client_logged_id, $client_id, $company_id);
				if($result = 'success'){
					$count++;
				}
			}
		}
		if($company_count == $count){
			return 'success';
		}
		else{
			return 'error occured';
		}
	}
	
	/******************* function to Get HomeFolder for Current User ***************/
	
	public function get_home_folder($hostname, $client_api_id, $client_secret,$new_username, $new_password){

		$token = $this->authenticate($hostname, $client_api_id, $client_secret, $new_username, $new_password);
	
		if ($token) {
			$this->get_root($token, TRUE);
		}
			
		$uri = "https://".$this->get_hostname($token)."/sf/v3/Items";	
		
		$headers = $this->get_authorization_header($token);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $uri);
		curl_setopt($ch, CURLOPT_TIMEOUT, 300);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_VERBOSE, FALSE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	 
		$curl_response = curl_exec ($ch);
	 
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$curl_error_number = curl_errno($ch);
		$curl_error = curl_error($ch);
	 
		//echo $curl_response."\n"; // output entire response
		//echo $http_code."\n"; // output http status code
		 
		curl_close ($ch);
	 
		$root = json_decode($curl_response);
		//print_r($root); // print entire json response
		return $root->Id;
	}
	
	/******************* function to create a new folder for every company in SHAREFILE ***************/
	
	public function create_company_folder($token, $parent_id, $name, $client_logged_id, $client_id, $company_id){
		$uri = "https://".$this->get_hostname($token)."/sf/v3/Items(".$parent_id.")/Folder";
		//echo "POST ".$uri."\n";
	 
		$folder = array("Name"=>$name);
		$data = json_encode($folder);
	 
		$headers = $this->get_authorization_header($token);
		$headers[] = "Content-Type: application/json";
		//print_r($headers);
		 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $uri);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_VERBOSE, FALSE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	 
		$curl_response = curl_exec ($ch);
	 
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$curl_error_number = curl_errno($ch);
		$curl_error = curl_error($ch);
	 
		//echo $curl_response."\n"; // output entire response
		//echo $http_code."\n"; // output http status code
		 
		curl_close ($ch);
	 
		if ($http_code == 200) {
			$item = json_decode($curl_response);
			//print_r($item); // print entire new item object
			//echo "Created Folder: ".$item->Id."\n";
			
			$model_sharefile = new TblAcaSharefileFolders();
			
			$model_sharefile->user_id = $client_logged_id;
			$model_sharefile->client_id = $client_id;
			$model_sharefile->company_id = $company_id;
			$model_sharefile->company_client_number = $name;
			$model_sharefile->folder_name = $item->Name;
			$model_sharefile->sharefile_folder_id = $item->Id;
			$model_sharefile->created_date = date ( 'Y-m-d H:i:s' );
			$model_sharefile->isNewRecord = true;
			$model_sharefile->folder_id = NULL;
	
			if($model_sharefile->save())
			{
				return 'success';
			}
			else{
				return 'error occured';
			}
			
		}
	}
	
	/******** function to create extra folder for existing emploee *********/
	
	public function create_extra_sharefile_folder($hostname, $client_api_id, $client_secret, $client_logged_id, $client_id, $new_username, $new_password, $name, $company_id){
	
		$token = $this->authenticate($hostname, $client_api_id, $client_secret, $new_username, $new_password);
	
		if ($token) {
			$this->get_root($token, TRUE);
		}
		
		$parent_id = $this->get_home_folder($hostname, $client_api_id, $client_secret,$new_username, $new_password);
		
		$result = $this->create_company_folder($token, $parent_id, $name, $client_logged_id, $client_id, $company_id);
		if($result = 'success'){
			return 'success';
		}
		else{
			return 'error occured';
		}					
	
	}
	
	function upload_file($token, $new_folder_id, $local_path) {
		$uri = "https://".get_hostname($token)."/sf/v3/Items(".$new_folder_id.")/Upload";
		echo "GET ".$uri."\n";
	 
		$headers = get_authorization_header($token);
	 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $uri);
		curl_setopt($ch, CURLOPT_TIMEOUT, 300);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_VERBOSE, FALSE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	 
		$curl_response = curl_exec ($ch);
	 
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$curl_error_number = curl_errno($ch);
		$curl_error = curl_error($ch);
			 
		$upload_config = json_decode($curl_response);
	 
		if ($http_code == 200) {
			$post["File1"] = new CurlFile($local_path);
			curl_setopt ($ch, CURLOPT_URL, $upload_config->ChunkUri);
			curl_setopt ($ch, CURLOPT_POST, true);
			curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt ($ch, CURLOPT_VERBOSE, FALSE);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt ($ch, CURLOPT_HEADER, true);
	 
			$upload_response = curl_exec ($ch);
	 
			echo $upload_response."\n";
		}
		curl_close ($ch);
	}
	
}