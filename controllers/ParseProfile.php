<?php 
	include_once'config/Database.php';
	include_once'config/Utilities.php';
	
	if((isset($_SESSION['id']) || isset($_GET['user_identity'])) && !isset($_POST['updateProfileBtn'])){
		if(isset($_GET['user_identity'])){
			$url_encode_id = $_GET['user_identity'];
			$decode_id = base64_decode($url_encode_id);
			$user_id_array = explode("encodeuserid", $decode_id);
			$id = $user_id_array[1];
		}
		else {
			$id = $_SESSION['id'];
		}
		
		$sqlQuery = "SELECT * FROM users WHERE id = :id";
		$statement = $db->prepare($sqlQuery);
		$statement->execute(array(':id' => $id));
		while($rs = $statement->fetch()){
			$firstname = $rs['firstname']; 
			$lastname = $rs['lastname']; 
			$email = $rs['email']; 
			$phone = $rs['phone'];
			$address = $rs['address'];
			// $password = $rs['password'];
			// $date_joined = strftime("%d %b %Y", strtotime($rs["join_date"]));
		}
		
		$encode_id = base64_encode("encodeuserid{$id}");
	}
	else if(isset($_POST['updateProfileBtn'])) {
		//Collect data from form
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$id  = $_POST['hidden_id'];	
		
		$chpwd = isset($_POST["chpwd"])? 1:0;

		//Initilaise the array
		$form_errors = array();

		//form validation
		$required_fields = array('firstname','lastname','phone','email');

		//check empty fields and merge into array
		$fields_to_check_length = array('firstname' => 3);

		if($chpwd){
			$password = $_POST["password"];
			$confirm_password = $_POST["password-confirm"];
			if(!$password){
				$form_errors[] = "Please enter your password!";
			}else{
				$fields_to_check_length += ['password' => 6];
			}
		}
		//fields to check length		
		//check min length and put data in array
		$form_errors = array_merge($form_errors, check_empty_fields($required_fields));
		$form_errors = array_merge($form_errors, check_min_length($fields_to_check_length));

		//Email validation
		$form_errors = array_merge($form_errors, check_email($_POST));
		if(checkDuplicateEntriesUpdate("users", "phone", $phone, $db, $id)){
			$result_profile = flashMessage("Phone number is already registered! Please try another one");
        }
        else if(checkDuplicateEntriesUpdate("users", "email", $email, $db, $id)){
			$result_profile = flashMessage("Email address is already being used! Please try another one");
			
		}
		else if($chpwd && $password != $confirm_password){
			$result_profile = flashMessage("Those passwords didn't match. Try again.");
		}				
		else if(empty($form_errors) && !isset($result_profile)){
			try{
				if($chpwd){
					$sqlQuery = "SELECT password FROM users WHERE id = :id";
					$statement = $db->prepare($sqlQuery);
					$statement->execute(array(':id' => $id));
					//fetch data from DB & compare it with inputted data 
					$hashed_password = $statement->fetchColumn();
					if(password_verify($password, $hashed_password)){
						//create sql update
						$sqlUpdate = "UPDATE users SET firstname =:firstname, lastname =:lastname, phone =:phone, email =:email, address =:address WHERE id =:id";
						
						//Sanitise 
						$statement = $db->prepare($sqlUpdate);
						
						//update 
						$statement->execute(array(':firstname' => $firstname, ':lastname' => $lastname, ':phone' => $phone, ':email' => $email, ':address' => $address, ':id' => $id));
					}else{
						//Hash the pwd
						$hashed_password = password_hash($password, PASSWORD_DEFAULT);
						//create sql update
						$sqlUpdate = "UPDATE users SET firstname =:firstname, lastname =:lastname, phone =:phone, email =:email, password =:password, address =:address WHERE id =:id";
						
						//Sanitise 
						$statement = $db->prepare($sqlUpdate);
						
						//update 
						$statement->execute(array(':firstname' => $firstname, ':lastname' => $lastname, ':phone' => $phone, ':email' => $email, ':password' => $hashed_password, ':address' => $address, ':id' => $id));
					}
				}else{
					//create sql update
					$sqlUpdate = "UPDATE users SET firstname =:firstname, lastname =:lastname, phone =:phone, email =:email, address =:address WHERE id =:id";
					
					//Sanitise 
					$statement = $db->prepare($sqlUpdate);
					
					//update 
					$statement->execute(array(':firstname' => $firstname, ':lastname' => $lastname, ':phone' => $phone, ':email' => $email, ':address' => $address, ':id' => $id));
				}
				
				//Check if one new row was created
				if($statement->rowCount() == 1){
					echo $message = '
					<script type="text/javascript">
					swal("Updated!", "Profile update successful", "success");
					</script>
					';
				}
				else {
					echo $message = '
					<script type="text/javascript">
					swal("Nothing Happened", "You didnt make any changes");
					</script>
					';
				}
			}
			catch (PDOException $ex) {
				$result_profile = flashMessage("An error occured in: " .$ex->getMessage());
			}
		}else {
			if(count($form_errors) == 1) {
				$result_profile = flashMessage("There was 1 error in the form <br>");
			}
			else {
				$result_profile = flashMessage("There were " .count($form_errors). " errors in the form <br>");
			}
		}
	}