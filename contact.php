<?php
$submit = false;
$name = $email = $msg = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $name = $_POST["name"];
    $email= $_POST["email"];
    $msg = $_POST["msg"];
      
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "members";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    if(isset($_POST["submit"])){
        $sql = "INSERT INTO `contact` (`name`, `email`, `msg`, `date`) VALUES ('$name', '$email', '$msg', current_timestamp())";
        $result = mysqli_query($conn, $sql);

        if($result){
            $submit=true;
        } else{
            echo "the record was not submited due to..".mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
  height: 100%;
  margin: 0;
}

/* Style the header */
header {

background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url("photos/gymnasium.jfif");
border-radius:7px;
background-repeat: no-repeat;
background-size: cover;
margin:10px;

}
.bg-text {
  color: white;
  font-family:'Goblin One', cursive;
  font-size:60px;
  font-weight: bold;
  z-index: 2;
  padding: 70px 50px 30px 50px;
  text-align: center;
}
/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  padding: 20px;
  width: 20%;
  background: #B8B8B8;
  height: 100%;
  margin: 10px;
  border-radius:7px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

nav button {
  background-color: #01003b;
  border: none;
  color: white;
  padding: 15px ;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin:10px;
  width: 240px;
}

article{
  float: left;
  width: 77%;
  padding: 20px;
  background-color: #BEBEBE;
  border-radius:7px;
  margin:10px;
}

/* Style inputs with type="text", select elements and textareas */
input[type=text], textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 70%;
  margin: 20px 150px;
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
.footer {
  background-color: #202020;
  width: 100%;
  height: auto;       
  text-align: center;
  color: white;
  padding: 1rem 1rem;
  clear: both;
  display: block;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<header>
<h2 class="bg-text">GYMNASIUM</h2>
</header>

<?php
  if($submit){
   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong>, your Meassage has been sent!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
?>

<section>
  <nav>
    <ul>
        <li><a href='index.php'><button>HOME</button></a></li>
        <li><a href='registration.php'><button>New Member</button></a></li>
        <li><a href='login.php'><button>Member list</button></a></li>
        <li><a href='package.php'><button>packages</button></a></li>
        <li><a href='contact.php'><button>Contact Us</button></a></li>
    </ul>
  </nav>
  
  <article>
    <h1 style="text-align:center; font-family:'Goblin One', cursive; margin-top:20px;">Contact Us</h1>

    <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Type your name here..">
  </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
  </div>
  
  <div class="form-group">
    <label for="msg">Message/Query</label>
    <textarea class="form-control" id="msg" name="msg" rows="3"></textarea>
  </div>

  <input type="submit" value="submit" name="submit">

</form>
</div>
  </article>
</section>

<footer class="footer">
  <p>GYMNASIUM PVT. LTD.</p>
  <p>Follow Us</p>
    <div>
        <p><img src="https://img.icons8.com/doodle/48/000000/facebook-new.png" /><img src="https://img.icons8.com/doodle/48/000000/instagram-new.png" /><img src="https://img.icons8.com/doodle/48/000000/twitter--v1.png" /><img src="https://img.icons8.com/doodle/48/000000/linkedin.png" /></p>
    </div>
    <p >Powered By .......</p>
    <p>2020 Copyright (C) All rights reserved </p>
</footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</html>