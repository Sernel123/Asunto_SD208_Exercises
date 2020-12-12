<style>
body {
    background: url("bg1.jpg") no-repeat;
    background-size: cover;
    background-position: bottom;
}
</style>
<center>
    <!-- <div style=" width: 300px; height: 300px; margin-top: 20%; color: black;
 padding: 10px; font-size: sans-serif, arial; font-size: 30px;">
        <h1>RESULT</h1> -->
<?php

if (isset($_POST['submit'])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php_activity";
    
    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    //Check connection
    if (!$conn) {
        die("Connection failed: " .mysqli_connect_error());
    }

    // $error = [];
    // $fName = ($_POST["fName"]);
    // $lName = ($_POST["lName"]);
    // $address = ($_POST["address"]);
    // $email = ($_POST["email"]);
    // $password = ($_POST["password"]);

    // if (strlen($fName) < 2 || (strlen($fName) > 25 )){
    //     array_push($error, "The first name must not be less than 2 and must not be greater than 25 characters!");
    //     echo "<br";
    // }else{
    //     echo "Your first name is " .$fName;
    //     echo "<br>";
    // }

    // if (strlen($lName) < 2 || (strlen($lName) > 25 )){
    //     array_push($error, "The last name must not be less than 2 and must not be greater than 25 characters! ");
    //     echo "<br>";
    // }else{
    //     echo "Your last name is " .$lName;
    //     echo "<br>";
    // }

    // echo "Your address is " .$address;
    // echo "<br>";

    // if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)){
    //     array_push($error, "INVALID EMAIL");
    // }else{
    //     echo "Your email is " .$email;
    //     echo "<br>";
    // }

    // foreach($error as $value){
    //     echo $value;
    // }
}
?>
    </div>
</center>