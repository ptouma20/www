<!DOCTYPE html>
<html>
<head>
<title>User registation system using php and mysql</title>
<link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>

<div class="header">
<h2>LOGIN</h2>
</div>
<form method="post" action="login.php">
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username">
    </div>

    <div class="input-group">
        <label>Password</label>
        <input type="passowrd" name="passowrd_1">
    </div>

    <div class="input-group">
        <button typ="submit" name="login" class="btn">Login</button>
    </div>
<p>
    Not yet a member? <a href="register.php">Sign up</a>
</p>
</form>

</body>
</html>

