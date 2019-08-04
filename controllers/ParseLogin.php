<?php 
    include_once'config/Database.php';
    include_once'config/Utilities.php';

    if(isset($_POST['loginBtn'])){
        //initialise the array a        print_r($_POST);exit;
        $form_errors_login = array();

        //Validate the form
        $required_fields = array('username', 'password');

        $form_errors_login = array_merge($form_errors_login, check_empty_fields($required_fields));

        if(empty($form_errors_login)){
            //Collect the form data
            $user = $_POST['username'];
            $password = $_POST['password'];
            isset($_POST['remember']) ? $remember = $_POST['remember'] : $remember = "";


            //check if user exists in the db 
            $sqlQuery = "SELECT * FROM users WHERE email = :email";
            $statement = $db->prepare($sqlQuery);
            $statement->execute(array(':email' => $user));

            //fetch data from DB & compare it with inputted data 
            while($row = $statement->fetch()){
                // print_r($row);exit;
                $id = $row['id'];
                $hashed_password = $row['password'];
                $email = $row['email'];

                //If pwd's match create the session 
                if(password_verify($password, $hashed_password)){
                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $email;

                    $fingerprint = md5($_SERVER['REMOTE_ADDR']. $_SERVER['HTTP_USER_AGENT']);
                    $_SESSION['last_active'] = time();
                    $_SESSION['fingerprint'] = $fingerprint;

                    if($remember == "yes") {
                        rememberMe($id);
                    }

                    //call sweetalert 
                    echo $welcome = " 
                                    <script type=\"text/javascript\">
                                        swal({
                                            title: \"Welcome ". $row["firstname"] . " " . $row["lastname"]. "\",
                                            text: \"Your being logged in\",
                                            type: \"success\",
                                            timer: 4000,
                                            showConfirmButton: false});
                                            
                                            setTimeout(function(){
                                                window.location.href='index.php';
                                            }, 5000);

                                    </script>";                    
                }
                else{
                    $result_login = flashMessage("Invalid username or password!");
                }
            }


        }
        else {
            if(count($form_errors_login) == 1) {
                $result_login = flashMessage("There was 1 error in the form<br>");
            }
            else {
                $result_login = flashMessage('There were ' .count($form_errors_login). ' errors in the form<br>'); 
            }
        }
    }
    
?>