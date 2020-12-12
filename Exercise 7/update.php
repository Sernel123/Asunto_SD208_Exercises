<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
body {
    background: url("bg1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
h1{
    margin-top: 5%;
    font-size: 60px;
   
}
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    background-color: white;
    opacity: 0.8;
}

</style>

<body>


    <div class="container">
        <?php
        //Create connection
        $conn = mysqli_connect("localhost", "root", "", "php_activity");
        
        //Check connection
        if (!$conn) {
            die("Connection failed: " .mysqli_connect_error());
        }

        $count = 1;
        $select_query = "SELECT * from `registration` ORDER BY id asc";

        $result = mysqli_query($conn, $select_query);

         ?>

        <center>
            <h1>𝕽𝕰𝕲𝕴𝕾𝕿𝕽𝕬𝕿𝕴𝕺𝕹</h1><br><br>
        </center>
        <div class="row justify-content-center">

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <?php
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['LastName']; ?></td>
                    <td><?php echo $row['FirstName']; ?></td>
                    <td><?php echo $row['Address']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td>
                        <a href="register.php?edit=<?php echo $row['Id']; ?>" class="btn btn-info">Update</a>
                        <a href="update.php?delete=<?php echo $row['Id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php }?>
            </table>
        </div>

        <?php  
                
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            // echo $id;
            mysqli_query($conn,"DELETE FROM `registration` WHERE Id='$id'");

        }
        mysqli_close($conn);

        ?>
    </div>

</body>

</html>