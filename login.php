<?php
    include 'connection.php';
    session_start();
    if(isset($_POST['submit']))
    {
        $name = $_POST['uname'];
        $pass = $_POST['upass'];

        $q = "select * from login where username='".$name."' AND password='".$pass."'";
        $r = mysqli_query($con,$q);

        $row = mysqli_fetch_assoc($r);
        if($row['usertype']=="admin")
        {
            $_SESSION['username'] = $name;
            $_SESSION['id'] = $row['id'];
            $_SESSION['usertype'] = $row['usertype'];
            $_SESSION['Password'] = $pass;
            header('location:admin.php');
            //echo "Admin";
        }
        else
        {
            $_SESSION['username'] = $name;
            header('location:user.php');
            //echo "User";
        }
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
    <div class="container my-3">
            <form method="post">
            <div class="mb-3">
                <label>Enter your User Name:</label>
                <input type="text" class="form-control" name="uname" autocomplete="off">
                
             <div class="mb-3">
                <label>Enter your User Password:</label>
                <input type="text" class="form-control" name="upass" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
  </body>
</html>