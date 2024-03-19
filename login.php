<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<form action="loginlog.php" method="post">
    <div class="container">
        <div class="user-container">
            <label for="name"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="name" required>
        </div>
        <div class="password-container">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
        </div>
        <button type="submit">Login</button>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
    </div>
</form>
</body>
</html>