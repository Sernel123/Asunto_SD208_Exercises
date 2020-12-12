
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="validation.css">
    
</head>
  
<body>
<form action="Form_Handler.php" method="Post">

<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" id="username" name="fName" placeholder="First Name" >
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="text" id="password" name="lName" placeholder="Last Name" >
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="text" id="password" name="email" placeholder="Email" >
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="text" id="password" name="address" placeholder="Address" >
  </div>

  <a href="biography.php">
    <input type="submit" class="btn" name="submit" value="Submit">
  </a> 
 
  
</form>
</div>
</body>
</html>
