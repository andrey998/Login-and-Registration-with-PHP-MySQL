<?php
    include_once'config/Utilities.php';
    
    if(isset($_POST["forgot-password"])){
        if(empty($_POST["recovery_email"])){
            $result_resetpwd = flashMessage("Please enter your email address");
        }else{
            $conn = mysqli_connect("localhost", "root", "", "register");
            $condition = " email = '" . $_POST["recovery_email"] . "'";
            
            if(!empty($condition)) {
                $condition = " where " . $condition;
            }
        
            $sql = "Select * from users " . $condition;
            $result = mysqli_query($conn,$sql);
            $user = mysqli_fetch_array($result);
            
            if(!empty($user)) {
                require_once("forgot-password-recovery-mail.php");
                echo $message = '
					<script type="text/javascript">
					swal("Sent!", "Check your Mails!", "success");
					</script>
					';
            } else {
                $result_resetpwd = flashMessage("Email wasn't registed");
            }
        }
    }
?>