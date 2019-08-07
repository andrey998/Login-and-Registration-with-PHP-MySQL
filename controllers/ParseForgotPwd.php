<?php
	include_once'config/Database.php';
	include_once'config/Utilities.php';
    
    //Process the form when btn is pressed
    if(isset($_GET['name'])&&isset($_GET['id'])) {
        $name = $_GET["name"];
        $id = $_GET["id"];
        $sqlQuery = "SELECT * FROM users WHERE id = :id and firstname = :name";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':id' => $id, ':name' => $name));
        //fetch data from DB & compare it with inputted data 
        $row_count = $statement->rowCount();
        if($row_count){
            //initialise the form
            echo"<script>      
            $(window).load(function()
            {
                $('#updatepwd-modal').modal('toggle');
            });
            </script>";        

            if(isset($_POST["updatePwdBtn"])) {
                $password = $_POST['password'];
                $confirm_password = $_POST['password_confirm'];              

                $form_errors_update= array();

                //form validation
                $required_fields = array('password');

                //call the function to check empty field and merge the return data into array
                $form_errors_update = array_merge($form_errors_update, check_empty_fields($required_fields));

                //Fields that require checking for min length
                $fields_to_check_length = array('password' => 6);

                //Call the function to check min required length
                $form_errors_update = array_merge($form_errors_update, check_min_length($fields_to_check_length));       
            
                if ($password != $confirm_password){
                    $result_updatepwd = flashMessage("Those passwords didn't match. Try again.");
                }
                //check if error array is empty, if yes process and insert data
                else if(empty($form_errors_update) && !isset($result_updatepwd)){
                    $sqlQuery = "SELECT * FROM users WHERE id = :id and firstname = :name";
                    $statement = $db->prepare($sqlQuery);
                    $statement->execute(array(':id' => $id, ':name' => $name));

                    if($statement->rowCount()){
                        try{
                            //Hash the pwd
                            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                            //create sql update
                            $sqlUpdate = "UPDATE users SET password =:password WHERE id =:id";                            
                            //Sanitise 
                            $statement = $db->prepare($sqlUpdate);                            
                            //update 
                            $statement->execute(array(':password' => $hashed_password, ':id' => $id));
                            //Check if one new row has been created 
                            if($statement->rowCount()){
                                // call sweetalert
                                echo $result = "<script type=\"text/javascript\">
                                                    swal({
                                                        title: \"Success\",
                                                        text: \"Password Updated \",
                                                        type: \"success\",
                                                        timer: 4000,
                                                        showConfirmButton: false});
                                                        
                                                        setTimeout(function(){
                                                            window.location.href='index.php';
                                                        }, 5000);
                                                </script>";    
                            }
                        }
                        catch(PDOException $ex) {
                            $result_updatepwd = flashMessage("An error has occurred " .$ex->getMessage());
                        }
                    }else{
                        $result_updatepwd = flashMessage("Something went wrong!<br>");
                    }
                }
                else {
                    if(count($form_errors_update) == 1) {
                        $result_updatepwd = flashMessage("There was 1 error in the form<br>");
                    }
                    else {
                        $result_updatepwd = flashMessage('There were ' .count($form_errors_update). ' errors in the form<br>'); 
                    }
                }
            }
        }     
    }
?>