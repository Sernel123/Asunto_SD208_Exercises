
    <?php
    
    //Create connection
    $conn = mysqli_connect("localhost", "root", "", "php_activity");
    
    //Check connection
    if (!$conn) {
        die("Connection failed: " .mysqli_connect_error());
    }
    
    

    if(isset($_POST['submit'])) {
        
        $lName = ($_POST["lName"]);
        $fName = ($_POST["fName"]);
        $address = ($_POST["address"]);
        $email = ($_POST["email"]);
        $password = ($_POST["password"]);

        $sql = "INSERT INTO registration (`LastName`, `FirstName`, `Address`, `Email`, `Password`) 
        VALUES ('$lName', '$fName', '$address', '$email', '$password')";

        
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header("Location: update.php");
        } else {
            echo "Error: ". $sql . "<br>" . mysqli_error($conn);
        }
        
    }
    if(isset($_POST['update'])) {
        $id = $_GET['edit'];
        $lName = ($_POST["lName"]);
        $fName = ($_POST["fName"]);
        $address = ($_POST["address"]);
        $email = ($_POST["email"]);
        $password = ($_POST["password"]);

        $sql = "UPDATE registration SET LastName = '$lName', FirstName = '$fName', Address = '$address', Email = '$email', Password = '$password' WHERE Id = '$id'";
        
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header("Location: update.php");
        } else {
            echo "Error: ". $sql . "<br>" . mysqli_error($conn);
        }
        
    }


    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $select_query = "SELECT * from `registration` WHERE Id = '$id'";
        $result = mysqli_query($conn, $select_query);
        $row = mysqli_fetch_assoc($result);

        $lName = $row['LastName'];
        $fName = $row['FirstName'];
        $address = $row['Address'];
        $email = $row['Email'];

    }

    mysqli_close($conn);

    ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="register.css">
   

</head>

<body>
    <form action="" method="Post">

        <div class="login-box">
            <div class="left">
                <b>
                    <h1>R</h1><br>
                    <h1>E</h1><br>
                    <h1>G</h1><br>
                    <h1>I</h1><br>
                    <h1>S</h1><br>
                    <h1>T</h1><br>
                    <h1>E</h1><br>
                    <h1>R</h1>
                </b>
            </div>
            <div class="right">
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" id="last_name" name="lName" value = "<?php echo $lName??""?>" placeholder="Last Name">
                </div>

                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" id="first_name" name="fName" value = "<?php echo $fName??""?>" placeholder="First Name">
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="text" id="email" name="email"  value = "<?php echo $email??""?>" placeholder="Email">
                </div>

                <div class="textbox">
                    <i class="fas fa-home"></i>
                    <input type="text" id="address" name="address" value = "<?php echo $address??""?>" placeholder="Address">
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <a>
                    <?php
                        if(isset($_GET['edit'])){

                           echo '<input type="submit" class="btn" name="update" value="Submit">';
                        }else{
                           echo '<input type="submit" class="btn" name="submit" value="Submit">';
                        }
                        
                    ?>
                </a>
            </div>

        </div>
    </form>

</body>

</html>