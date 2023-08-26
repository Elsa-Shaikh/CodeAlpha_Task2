<?php
include "conn.php";

if(isset($_POST['btnRegister'])){
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $pass = md5($_POST['upass']);
    $captcha = $_POST['cap'];
    $ucaptcha = $_POST['ucaptcha'];
    
    if($captcha == $ucaptcha){
        $query = "SELECT * FROM table_captcha WHERE Email='$email'";
        $check = mysqli_fetch_assoc(mysqli_query($conn,$query));
        if(isset($check)){
            $_SESSION['status'] = 'Email Already Taken! Try Another';
            $_SESSION['status_code']="warning";
            header("Location: http://localhost/internship_Task_2/index.php");
        }else{
        $sql = "INSERT INTO table_captcha(Name,Email,Password) VALUES ('$name','$email','$pass')";
        $run = mysqli_query($conn,$sql);
        if($run){
            $_SESSION['status'] = 'Register Successfully!';
            $_SESSION['status_code']="success";
            header("Location: http://localhost/internship_Task_2/index.php");
        }else{
            $_SESSION['status'] = 'Failed to Register!';
            $_SESSION['status_code']="error";
            header("Location: http://localhost/internship_Task_2/index.php");
        }
        }
    }else{
        $_SESSION['status'] = 'Opps! Invalid Captcha!';
        $_SESSION['status_code']="error";
        header("Location: http://localhost/internship_Task_2/index.php");
    }
}




?>