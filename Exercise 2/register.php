<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="register.css">
  </head>
<body>
<form action="login.php">
<div class="login-box">
  <h1>Register</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" id="username" name="" placeholder="First Name" required>
  </div>

  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Last Name" required>
  </div>

  <div class="textbox">
    <i class="fas fa-home"></i>
    <input type="text" placeholder="Address" required>
  </div>


  <div class="textbox">
    <i class="fas fa-envelope"></i>
    <input type="text" placeholder="Email Address" required>
  </div>

  <div class="textbox">
    <i class="fas fa-envelope"></i>
    <input type="text" placeholder="Confirm Email Address" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Confirm Password" required>
  </div>
  <a href="login.php">
    <input type="submit" class="btn" value="Register">
  </a>
</form>
  <!-- <a href="login.php">
    <button type="button" class="cancelbtn" href="login.php">Cancel</button>
  </a> -->
</div>
</body>
</html>
