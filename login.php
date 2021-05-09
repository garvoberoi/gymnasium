<?php
$login = false;
$showErr = false;
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $user= $_POST["username"];
    $pass= md5($_POST["password"]);

    $servername = "localhost";
    $username = "id16770052_gymnasium";
    $password = "\&sCzsKY2m0~If4B";
    $database = "id16770052_gym";

    $conn = mysqli_connect($servername, $username, $password, $database);
  
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        
            $sql = "SELECT * from users where username='$user' AND password='$pass'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if($num == 1){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $user;
                header("location: /list.php");
            } else{
                $showErr = true;
            }
        
    }
      
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet"><style>
    <title>Log In</title>
    <style>
    * {
  box-sizing: border-box;
}
    body {
      background-image: url("photos/log.jfif");
      background-repeat: no-repeat;
      background-size: cover;
    }
    .container {
  border-radius: 7px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 30%;
  float:right;
  margin: 12% 10% 10% 90%;
}
.mb-3 {
    margin: 20px;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin:20px;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>
 </head>
  <body>
  <?php
  if($showErr){
   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Invalid credentials</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
?>
  <div class="container">
  <h1 style="text-align:center; font-family:'Goblin One', cursive; margin-top:20px;">Log In</h1> 
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="password">
  </div>
  <input type="submit" value="Login" name="Login">
</form>
</div>

  </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</html>