<?php
    session_start();

    if(isset($_POST['login'])){
        include_once("db.php");
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);

        $username = stripslashes($username);
        $password = stripslashes($password);

        $username = pg_prepare($db, $username);
        $password = pg_prepare($db, $password);

        $sql = "SELECT * FROM user WHERE username=$username";
        $query = pg_query($db, $sql);
        $row = pg_fetch_array($query);

        $id = $row['id'];
        $db_password = $row['password'];

        if($password == $db_password){
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            header("Location: userpage.php");
        } 
        else{
            echo "You didn't enter the correct details!";
        }


    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <h1 style="font-family: Tahoma;">Login</h1>
    <form action="login.php" method="post" enctype="multipart/form-data">
    <input placeholder="Username" name="username" type="text" autofocus>
    <input placeholder="Password" name="password" type="password">
    <input name="login" type="submit" value="login">

    </form>
</body>
</html>