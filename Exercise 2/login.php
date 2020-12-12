<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="login.css">
  </head>
<body>
<form action="biography.php">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" id="username" name="" placeholder="Username" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" id="password" name="" placeholder="Password" required>
  </div>

  <a href="biography.php">
    <input type="submit" class="btn" value="Login">
  </a> 
  <!-- <div class="textbox">
    <i class="fas fa-user"></i>
    <input required type="text" placeholder="Username" >
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input required type="password" placeholder="Password" >
  </div>
  <a href="biography.php">
    <input type="button" class="btn" value="Login">
  </a> -->
  <span class="psw">Doesn't have account, <a href="register.php">Register</a></span>
</form>
</div>
</body>
</html>
