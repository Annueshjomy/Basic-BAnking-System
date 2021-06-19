<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

<title>HOME PAGE</title>

</head><style>
*{
margin: 0;
padding: 0;
font-family: Century Gothic;

}
body{
  background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0)), url(bank-bg.jpg);
  background-size: cover;
}
header{

height: 100vh;
background-size: cover;
background-position: center;

}

ul{
float: right;
list-style-type:none;
margin-top: 25px;
}
ul li{
display: inline-block;
}
ul li a{
text-decoration: none;
color:white;
padding:5px 20px;
border:1px solid transparent;
transition: 0.6s ease;
}
ul li a:hover {
background-color: #fff;
color:black;
}
.main{
max-width: 1200px;
margin: auto;


}
.nav-item:hover{
  background-color: black;

}
ul li.active a{
background-color: #fff;
color:#000;
}.title{
position: absolute;
top: 40%;
left: 50%;
transform: translate(-50%,-50%);
}
.title h1{
color: white;
font-size: 80px;
font-family: italic;
}
.button{
position: absolute;
top: 60%;
left: 50%;
transform: translate(-50%,-50%);
text-shadow:1px 1px 0 #444;
}

.btn:hover{
background-color: #4ded30;
color:white;
}


</style>
<body>
  <form action="welcome.php" method="post">
  <div class ="main">
    <nav class="navbar  navbar-expand-lg navbar-dark ">
      <a class="navbar-brand" >Basic Bank System</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="transactionhistory.php"> Transcations </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="transaction.php">Customer Details</a>
              </li>
         </ul>
       </div>
    </nav>






</div>

<header>

</header>
<footer class="text-center mt-5 py-2">
 <p>Created By <b>Kanjirakattu Jomy Annuesh</b> <br> </p>
      </footer>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>
