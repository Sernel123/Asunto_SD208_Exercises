<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    background: url("bg1.jpg") no-repeat;
    background-size: cover;
    background-position: center;
}
.center{
    border:  ridge 20px ;
    width: 300px;
    height: 300px;
    padding: 20px;
    margin-left: 35%;
    margin-top: 15%;
    background-color: #66b3ff;
}
.result{
    margin-left: 30%;
    font-size: 30px;
    color: #0000cc;
}
.bmi{
    margin-left: 30%;
}
.button{
    font-size: 20px;
    background-color: red;
    margin-left: 20%;
    border: ridge 5px white;
    padding: 5px;
    margin-top: 10%;
}
.text{
    font-size: 20px;
    margin-left: 10%;
    padding: 8px;
    
}
    
</style>
<body>
    <div class = "center">
        <h2 class = "result">RESULT</h2>
        <?php 
            if($_GET['submit']) { 
            $weight = $_GET['weight'];
            $height = $_GET['height'];
            function bmi($weight,$height) {
                $height = $height / 100;
                $bmi = $weight/($height*$height);
                return $bmi;
            } 
            $bmi = bmi($weight,$height);
            if ($bmi <= 18.5) {
                $output = "Under Weight";
            } else if ($bmi > 18.5 && $bmi<=24.9 ) {
                $output = "Normal Weight";
            } else if ($bmi > 24.9 && $bmi<=29.9) {
                $output = "Over Weight";
            } else if ($bmi > 30.0) {
                $output = "OBESE";
            }
            
            echo "<p class = 'text'> Your BMI value is " .round($bmi, 2). "<br></p>" ;
            echo "<p class = 'text'>and you are : ". "$output </p>";
           
            }
        ?>
        <a href = "index.php">
            <button class= "button">Back to Calculator</button>
        </a>
    </div>
   
   
</body>
</html>