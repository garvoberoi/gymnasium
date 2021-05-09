<!DOCTYPE html>
<html lang="en">
<head>
<title>Gymnasium</title>
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

  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url("/photos/gymnasium.jfif");
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
  
  <article >
  <div >
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="photos/c6.jfif" width="100%" height="400px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="photos/c4.jfif"  width="100%" height="400px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="photos/c3.jfif"  width="100%" height="400px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="photos/c2.jfif"  width="100%" height="400px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="photos/c5.jfif"  width="100%" height="400px" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
</div>
<div >
  <h3 style="text-align:center; font-family:'Goblin One', cursive; margin-top:20px;">History of Gymnasium</h3>
  Gymnasium International, Inc. is one of the largest fitness club chains in the world,
   one of few global players in a highly fragmented market. The company operates primarily through franchising. 
   Gold's Gym claims 2.5 million members worldwide, and some 600 gyms found in 27 countries.
    The chain began with a single establishment, which became the center of the sport of bodybuilding in the United States.
     Though Gold's was originally known as a no-frills gym for serious weightlifters, the chain has modified its image to appeal to a broader class of consumers. 
     Gold's Gym offers classes such as group exercise, yoga, Pilates, and spinning, as well as personal training and pure weightlifting.
      The private company earns income through franchising, operating company-owned gyms, and through selling apparel and accessories licensed with the Gold's logo.
       The company was founded by Joe Gold in 1965. Gold sold the company in 1970, and it changed hands several times since then.
        In 2004 the firm was acquired by the Texas-based investment group TRT Holdings.
</div>


  </article>

</section>  

<footer class="footer">
  <p>GYMNASIUM PVT. LTD.</p>
  <p>Follow Us</p>
    <div>
        <p><img src="https://img.icons8.com/doodle/48/000000/facebook-new.png" /><img src="https://img.icons8.com/doodle/48/000000/instagram-new.png" /><img src="https://img.icons8.com/doodle/48/000000/twitter--v1.png" /><img src="https://img.icons8.com/doodle/48/000000/linkedin.png" /></p>
    </div>
    <p>2020 Copyright (C) All rights reserved </p>
</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>