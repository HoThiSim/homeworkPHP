<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>upload file</title>
</head>
<body>


<div class="container">
 <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="custom-file" style=" padding: 30px">
        <input id="fileUpLoad" class="btn btn-dark" type="file" name="fileUpLoad" >
         <button type="submit" name="upload" value="true" class="btn btn-dark">upload</button>  
    </div>
 </form>

<div class="container">
    <table class="table table-dark">
        <thead class="thead-light">
            <tr>
                <th>id</th>
                <th>img</th>
            </tr>
        </thead>
        <tbody>
          <?php
            require_once 'data.php';
            $img=$connection->query('SELECT * FROM image')->fetch_all();
            for($i=0;$i<count($img);$i++){
                echo '<tr>';
                echo '<td>'.$img[$i][0].'</td>';
                echo '<td><img width="200px" height="200px" src="'.$img[$i][1].'"></td>';
                echo '</tr>';
            }
          ?>
        </tbody>
   
    </table>
</div>
 
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>