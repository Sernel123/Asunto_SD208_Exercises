<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
</head>
<style>
body{
    background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(bg.jpg);
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    
}
.center{
    width: 250px;
    height: 300px;
    padding: 10px;
    float: center;
    margin-left: 5%;
    color: white;
    font-size: 30px;
    
    
}
.input-box{
    box-align: inline;
    padding: 5px;
    margin: 5px;
}
.submit{
    padding: 4px;
    margin: 5px;
    background-color: red;
    font-size: 25px;
    border: ridge 5px;
}

</style>
<body>
    <center>
    <h1 style="color:white; margin-top: 10%; font-size: 70px;"><span style="color:red;"><u>BMI </u></span>CALCULATOR</h1><br>
    <form method="GET" action="bmi.php">
    
        <div class="center">
            <h2>INPUT</h2>
	        HEIGHT(cm):<input type="text" class="input-box" name="height" required><br>
	        WEIGHT(kg):<input type="text" class="input-box" name="weight" required><br>
	        <input class="submit" type="submit" name="submit"/>
           
        </div>
    </form>
   
</center>
</body>
</html>