<?php
    include 'connection.php';
    session_start();
    if(!$_SESSION['username'])
    {
        header('location:login.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>login Page</title>
  </head>
  <body>
    <h1>Welcome on <p><?php echo $_SESSION['username'] ?></p> page</h1>
    <?php
        echo $_SESSION['username'];
        echo $_SESSION['id'];
        echo $_SESSION['usertype'];
        echo $_SESSION['Password'];
    ?>
    <p>Click here for lagout <a href="logout.php">logout</a></p>
  </body>
</html>