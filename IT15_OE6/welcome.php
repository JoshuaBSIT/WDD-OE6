<?php
    session_start();
    //fname = $_SESSION['first_name'];

    if(!$_SESSION['email']){
        header("Location: login.html");
    }
?>

<html>
    <head> 
        <title>User Dashboard</title>
    </head>

    <body>
        <h1>Welcome</h1><br>
        <?php
            echo $_SESSION['email'];

        ?>
        <h1><a href="logout.php">Logout here</a></h1>
</body>
</html>