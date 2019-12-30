<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Login</title>
</head>
<body>

<?php 
   require_once 'action.php';
   if(isset($_POST['login'])){
       $name =$_POST["uname"];
       $password = $_POST["psw"];
       $db = $connection->query('SELECT * FROM login')->fetch_all();
       
       for ($i=0; $i <count($db) ; $i++) { 
            if ($name==$db[$i][1] && $password==$db[$i][2]) {
              header("Location: profile.php");
            }else{
                echo 'dang nhap lai';
            }
       }
   }
?>
<form action="" method="post">
<div class="container">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin: 20px auto">
    <form action="" method="POST">
      <div class="form-group">
        <label for="uname" class="text-info"  >User Name</label>
        <input type="text" class="form-control" name="uname" id="" aria-describedby="helpId" placeholder="enter name">
      </div>
      <div class="form-group">
        <label for="psw" class="text-info">Password</label>
        <input type="password" class="form-control" name="psw" id="" aria-describedby="helpId" placeholder="enter password">
      </div>
      
      <button type="submit" name="login" value="true"  style="float: right" class="btn btn-dark">Login</button>
    </form>
</div>
</div>
</form>
<?php

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>