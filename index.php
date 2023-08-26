<?php include "Auth/conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <form action="Auth/insert.php" class="login-form" method="post">
        <div class="form-title">Register</div>
        <div class="form-input">
            <label for="name">Name</label>
            <input type="text" id="name" name="uname" required>
        </div>
        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" id="email" name="uemail" required>
        </div>
        <div class="form-input">
            <label for="password">Password</label>
            <input type="password" id="password" name="upass" required>
        </div>
        <div class="captcha">
            <label for="captcha-input">Enter Captcha</label>
            <input type="text" name="cap" class="preview" value="<?php echo substr(uniqid(),5); ?>">
            <div class="captcha-form">
                <input type="text" id="captcha-form" placeholder="Enter Captcha" name="ucaptcha" required>
            </div>
        </div>
        <div class="form-input">
            <button class="btn btn-dark" name="btnRegister" type="submit">Register</button>
            <a href="login.php" class="btn btn-dark text-white">Login</a>
        </div>
        </form>
<?php
   if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
    ?>
    <script>
swal({
  title: "<?php echo $_SESSION['status']; ?>",
  icon: "<?php echo $_SESSION['status_code']; ?>",
  button: "Cancel",
});
</script>
    <?php
    unset($_SESSION['status']);
   }
?>
</body>
</html>