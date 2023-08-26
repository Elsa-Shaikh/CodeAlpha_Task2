<?php
include "conn.php";

if(isset($_POST['btnLogin'])){
    $email= mysqli_real_escape_string($conn, $_POST['uemail']);
    $password= md5($_POST['upass']);

    $sql= "SELECT Id,Name FROM table_captcha WHERE Email='$email' AND Password='$password'";    
    $run = mysqli_query($conn,$sql);
    if(mysqli_num_rows($run)>0){
        while($row= mysqli_fetch_assoc($run)){
             $_SESSION["Name"] = $row['Name'];
             $_SESSION["Id"] = $row['Id'];
             $_SESSION['status'] = 'Login Successfully!';
             $_SESSION['status_code']="success";
            header("Location: http://localhost/internship_Task_2/survey.php");
        }
    }else{
        $_SESSION['status'] = 'Email or Password are Incorrect!';
        $_SESSION['status_code']="error";
        header("Location: http://localhost/internship_Task_2/index.php");
    }

   }



?>