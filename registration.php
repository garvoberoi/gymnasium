<?php
$submit = false;
$fname = $lname = $gender = $number = $address = $email="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $gender = test_input($_POST["gender"]);
    $number = test_input($_POST["number"]);
    $address = test_input($_POST["address"]);
    $email = test_input($_POST["email"]);    
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$servername = "localhost";
$username = "id16770052_gymnasium";
$password = "\&sCzsKY2m0~If4B";
$database = "id16770052_gym";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    if(isset($_POST["submit"])){
        $sql = "INSERT INTO `memberlist` (`fname`, `lname`, `gender`, `number`, `address`, `email`, `filldate`) VALUES ('$fname', '$lname', '$gender', '$number', '$address', '$email', current_timestamp())";

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
<title>Registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet"><style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
  height: 100%;
  margin: 0;
}

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

nav {
  float: left;
  padding: 20px;
  width: 20%;
  background: #BEBEBE;
  height: 100%;
  margin: 10px;
  border-radius:7px;
}

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

input[type=text], select, textarea {
  width: 100%; 
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px; 
  box-sizing: border-box;
  margin-top: 6px; 
  margin-bottom: 16px;
  resize: vertical ;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 70%;
  margin: 20px 150px;
}

section::after {
  content: "";
  display: table;
}

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
  <strong>Success</strong>, Membership details have been submitted!!
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
    <h1 style="text-align:center; font-family:'Goblin One', cursive; margin-top:20px;">Registration Form</h1>
    <div class="container">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name..">
    
    <div class="col">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name..">
  
    <label for="gender">Gender</label>
    <select id="gender" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>

    <label for="number">Phone Number</label>
    <input type="text" id="number" name="number" placeholder="Phone number">

    <label for="address">Address</label>
    <input type="text" id="address" name="address" placeholder="Address">
    
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Email">

    <input type="submit" value="Submit" name="submit">

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