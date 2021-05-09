<?php
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
  }
  $delete = false;
  $update = false;
  $servername = "localhost";
  $username = "id16770052_gymnasium";
$password = "\&sCzsKY2m0~If4B";
$database = "id16770052_gym";
  
  $conn = mysqli_connect($servername, $username, $password, $database);

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  
  if($_SERVER['REQUEST_METHOD']=='POST'){
    
    if(isset($_POST['sno'])){
      $Fee = $_POST["Fee"];
      $sno = $_POST["sno"];
      $sql = "UPDATE `memberlist` SET `Fee` = '$Fee' WHERE `memberlist`.`Sno` = $sno;";

        $result = mysqli_query($conn, $sql);

        if($result){
            $update = true;
        } else{
            echo "the record was not submited due to..".mysqli_error($conn);
        }
    }
  }

  if(isset($_GET['delete'])){
    $sno = $_GET['delete'];
    $sql = "DELETE FROM `memberlist` WHERE `memberlist`.`Sno` = $sno;";
    $result = mysqli_query($conn, $sql);
    if($result){
      $delete = true;
  } else{
      echo "the record was not submited due to..".mysqli_error($conn);
  }
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Administration</title>
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
  background-color:  #01003b; 
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

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 8px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

article {
  float: left;
  width: 77%;
  padding: 20px;
  background-color: #BEBEBE;
  border-radius:7px;
  margin:10px; 
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #C0C0C0;}

th {
  background-color: #4CAF50;
  color: white;
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

<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editmodalLabel">Select Fee status:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <input type="hidden" name="sno" id="sno">
      <label for="Fee">Fees</label>
    <select id="Fee" name="Fee">
      <option value="paid">Paid</option>
      <option value="unpaid">Unpaid</option>
    </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" value="Save" name="submit">
      </div>
      </form>
    </div>
  </div>
</div>
<header>
  <h2 class="bg-text">GYMNASIUM</h2>
</header>

<?php
  if($delete){
   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Success</strong>,Membership details have been deleted!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  if($update){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong>,Fee status updated!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
?>

<section>
  <nav>
    <ul>
        <li><a href='index.php'><button>HOME</button></a></li>
        <li><a href='registration.php'><button>New Member</button></a></li>
        <li><a href='list.php'><button>Member list</button></a></li>
        <li><a href='package.php'><button>packages</button></a></li>
        <li><a href='contact.php'><button>Contact Us</button></a></li>
    </ul>
  </nav>
  
  <article>
    <h1 style="text-align:center; font-family:'Goblin One', cursive; margin-top:20px;">Administration</h1>
    <a href="logout.php" style="float: right; margin-top: -55px; margin-bottom:40px; padding: 5px;"><button class="btn btn-dark">Logout</button></a>
    <table>
  <tr>
    <th>Sno.</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>PhoneNumber</th>
    <th>Date of Joining</th>
    <th>Fee</th>
    <th></th>
    <th></th>
  </tr>

<?php
  $sql = "SELECT * FROM `memberlist`";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if($num>0){
    $sno1 = 1;
    while($row = mysqli_fetch_assoc($result)){
      
  ?>
   <tr>
    <td><?= $sno1 ?></td>
    <td><?= $row['fname'] ?></td>
    <td><?= $row['lname'] ?></td>
    <td><?= $row['number'] ?></td>
    <td><?= $row['filldate'] ?></td>
    <td><?= $row['Fee'] ?></td>
    <td><button class='edit btn btn-sm btn-primary' id="<?= $row['Sno'] ?>">Update Fee</button></td>
    <td><button class='delete btn btn-sm btn-danger' id="d<?= $row['Sno'] ?>">Delete</button></td>
  </tr>
  <?php
    $sno1= $sno1+1;
    }
  }
  ?>
  </table>
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

<script>
  edits = document.getElementsByClassName('edit');
  Array.from(edits).forEach((element)=>{
    element.addEventListener("click",(e)=>{
      sno.value = e.target.id;
      $('#editmodal').modal('toggle');
      
    })
  })
</script>
<script>
  deletes = document.getElementsByClassName('delete');
  Array.from(deletes).forEach((element)=>{
    element.addEventListener("click",(e)=>{
      console.log("edit", e);
      sno = e.target.id.substr(1,)
        if(confirm("Are you sure you want to delete?")){
            console.log("yes");
            window.location = `list.php?delete=${sno}`;
        }
        else{
          console.log("no");
        }
    })
  })
</script>

</html> 