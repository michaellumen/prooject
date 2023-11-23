<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    
</head>
<body>

    <!-- FORM teritorial  -->
    <div class="container">
        <form action="controller/proces_login.php" method="POST" class="login-username">
            <p align="center"> Login </p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn"> Login </button>
            </div>
            <p class="login-register-text"> Anda belum punya akun ? <a href="register.php"> Register </a> </p>
        </form>
    </div>
    <!--/  FORM teritorial / -->
</body>
</html>