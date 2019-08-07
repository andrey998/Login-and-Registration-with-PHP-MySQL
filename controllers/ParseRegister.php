<?php 
    include_once'config/Database.php';
    include_once'config/Utilities.php';

    //process the form 
    if(isset($_POST['registerBtn'])){
        //Initialise the array to store messages from form
        $form_errors_regist = array();

        //form validation
        $required_fields = array('firstname','lastname','email', 'phone', 'address' , 'password');

        //call the function to check empty field and merge the return data into array
        $form_errors_regist = array_merge($form_errors_regist, check_empty_fields($required_fields));

        //Fields that require checking for min length
        $fields_to_check_length = array('firstname' => 3, 'password' => 6);

        //Call the function to check min required length
        $form_errors_regist = array_merge($form_errors_regist, check_min_length($fields_to_check_length));

        //Email validation 
        $form_errors_regist = array_merge($form_errors_regist, check_email($_POST));

        //Collect form data and store in vars
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $confirm_password = $_POST['password_confirm'];
        if(checkDuplicateEntries("users", "phone", $phone, $db)){
            $result_regist = flashMessage("Phone number is already registered! Please try another one");
        }
        else if(checkDuplicateEntries("users", "email", $email, $db)){
            $result_regist = flashMessage("Email address is already being used! Please try another one");
        }
        else if ($password != $confirm_password){
            $result_regist = flashMessage("Those passwords didn't match. Try again.");
        }
        //check if error array is empty, if yes process and insert data
        else if(empty($form_errors_regist) && !isset($result_regist)){
            //Hash the pwd
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            try{
                //Create SQL insert 
                $sqlInsert = "INSERT INTO users (firstname, lastname, email, phone, address, password, join_date)
                                VALUES (:firstname, :lastname, :email, :phone, :address, :password, now())";

                //sanitise data
                $statement = $db->prepare($sqlInsert);

                //Add data into the db 
                $statement->execute(array(':firstname' => $firstname,':lastname' => $lastname, ':email' => $email,':phone' => $phone, ':address' => $address, ':password' => $hashed_password));
                //Check if one new row has been created 
                if($statement->rowCount()){
                    // call sweetalert
                    echo $result = " 
                            <script type=\"text/javascript\">
                                swal({
                                    title: \"Congratulations ". $firstname . " " . $lastname. " \",
                                    text: \"Registration has been successful\",
                                    type: \"success\",
                                    confirmButtonText: \"Thank you\"});                                    
                            </script>";    
                }
            }
            catch(PDOException $ex) {
                $result_regist = flashMessage("An error has occurred " .$ex->getMessage());
            }
        }
        else {
            if(count($form_errors_regist) == 1) {
                $result_regist = flashMessage("There was 1 error in the form<br>");
            }
            else {
                $result_regist = flashMessage('There were ' .count($form_errors_regist). ' errors in the form<br>'); 
            }
        }
    }
   
?>