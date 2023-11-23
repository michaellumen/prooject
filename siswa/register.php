<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title> Register  </title>
</head>
<body>
    <div class="container">
        <form action="controller/proces_register.php" method="POST" class="login-email" > 
            <p align="center"> Register </p>
            <div class="input-group">
                <input type="text" name="nama" placeholder="Nama" required>
            </div>
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <input type="password" name="cpassword" placeholder="Confirm Passwrod" required>
            </div>
            <div class="input-group">
                <select name="role" class="role" required>
                    <option value="" disable selected> Choose Role From User </option>
                    <option value="petugas"> Petugas </option>
                    <option value="administrator"> Administrator </option>
                    <option value="siswa"> Siswa </option>
                </select>
            </div>
            <div class="input-group">
                <button class="btn" name="submit"> Register </button>
            </div>
            <p class="login-register-text"> Sudah mempunyai akun ? <a href="login.php"> Login </a></p>
        </form>
    </div>
</body>
</html>