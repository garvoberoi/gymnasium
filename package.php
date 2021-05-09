<!DOCTYPE html>
<html lang="en">
<head>
<title>Package Details</title>
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

.card{
  width :70%;
  margin :20px 150px; 
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
    <h1 style="text-align:center; font-family:'Goblin One', cursive; margin-top:20px;">Package details</h1>

    <div class="card text-center">
  <div class="card-header" style="height:40px;">
  </div>
  <div class="card-body">
    <h5 class="card-title"><b>Monthly Plan</b></h5>
    <p class="card-text">4 Spa session, 6 Yoga sessions, 20 Weight training sessions, 12 Cardio sessions</p>
    <a href="/registration.php" class="btn btn-primary">Take Membership</a>
  </div>
  <div class="card-footer text-muted">
    <strong>1500/-</strong>
  </div>
</div>


<div class="card text-center">
  <div class="card-header" style="height:40px;">
  </div>
  <div class="card-body">
    <h5 class="card-title"><b>6 Months Plan</b></h5>
    <p class="card-text">4 Spa session, 6 Yoga sessions, 20 Weight training sessions, 12 Cardio sessions a month<p>(Discount: 2000/-)</p></p>
    <a href="/registration.php" class="btn btn-primary">Take Membership</a>
  </div>
  <div class="card-footer text-muted">
    <strong>7000/-</strong>
  </div>
</div>


<div class="card text-center">
  <div class="card-header" style="height:40px;">
  </div>
  <div class="card-body">
    <h5 class="card-title"><b>Yearly Plan</b></h5>
    <p class="card-text">4 Spa session, 6 Yoga sessions, 20 Weight training sessions, 12 Cardio sessions a month<p>(Discount: 6000/-)</p></p>
    <a href="/registration.php" class="btn btn-primary">Take Membership</a>
  </div>
  <div class="card-footer text-muted">
    <strong>12000/-</strong>
  </div>
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