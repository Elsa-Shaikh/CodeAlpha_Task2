<?php include "Auth/conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <form action="Auth/signin.php" class="login-form" method="post">
        <div class="form-title">Login</div>
        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" id="email" name="uemail" required>
        </div>
        <div class="form-input">
            <label for="password">Password</label>
            <input type="password" id="password" name="upass" required>
        </div>
        <div class="form-input">
            <a href="#" class="link-underline-primary text-primary"> Forget Password?</a>
        </div>
        <div class="form-input">
            <a href="index.php" class="btn btn-dark text-white">Register</a>
            <button class="btn btn-dark" type="submit" name="btnLogin">Login</button>
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