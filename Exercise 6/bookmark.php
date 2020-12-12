<?php
    session_start();

   $book  = (isset($_SESSION['book_mark'])) ? $_SESSION['book_mark']:array();

    if(isset($_POST['submit'])){
        if(!empty($_POST["bookmark"]) && !empty($_POST["url"])){
            array_push($book, [$_POST['bookmark'] ,$_POST['url']]);
            $_SESSION['book_mark'] = $book;
        }
        

        // print_r($_SESSION['book_mark']);
       
    }

    if(isset($_POST['x'])){
        array_splice($_SESSION['book_mark'], $_POST['id'], 1);
    }

    if (isset($_POST['clear'])){
        $_SESSION['book_mark'] = [];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    background: url("bg.jpg") no-repeat;
    background-size: cover;
}
input{
    width: 200px;
    height: 20px;
    border: ridge 5px;    
}
div{
    margin-top: 10%;
    padding: 20px;
    float: left;
    margin-left: 15%;
   
}
.result{
    float: right;
    margin-right: 15%;
    margin-top: 20%;
}
.title{
    color: white;
    font-size: 50px;
}
.url{
    color: #663300;
    font-size: 30px;
}
.bookmark{
    color: #663300;
    font-size: 30px;
}
.submit{
    width: 200px;
    height: 30px;
    background-color: green;
    border: ridge 5px;
    margin: 2px;
}
.clear{
    width: 200px;
    height: 30px;
    background-color: red;
    border: ridge 5px;
    
}
.x{
    width: 200px;
    height: 30px;
    background-color: red;
    border: ridge 5px;
    
}
</style>
<body>
<center>
    <div>
        <form  method = "POST">
    
            <h1 class="title"><span style="color: black">BOOK</span><u style="underline: black;">MARK</u></h1>

            <h2 class="bookmark">Bookmark name</h2>
            <input type="text" name="bookmark" id="bookmark" >
            <h2 class = "url">Bookmark URL</h2>
            <input type="text" name="url" id="url" ><br><br><br>
            <input class="submit" type="submit" name="submit" placeholder="Add bookmark"><br>
            <input class="clear" name="clear" type="submit" value="Clear All">
        </form>
        </div>

    <div class = "result">
    <?php if(isset($_SESSION['book_mark'])):?>
        <?php for($id= 0; $id < count($_SESSION['book_mark']); $id++):?>
            <a href= '<?php echo $_SESSION['book_mark'][$id][1];?>' target = "_blank"> <?php echo $_SESSION['book_mark'][$id][0];?> </a>
            <form action="bookmark.php" method="POST">
                <input type="hidden" name ="id" value="<?php echo $id;?>">
                <input class="x" name="x" type="submit" value="X">
            </form> 
        <?php endfor?>
    <?php endif?>
    
</center>
</body>
</html>