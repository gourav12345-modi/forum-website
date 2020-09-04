<?php
session_start();
//always session_start() at top and all file after that 😥😥😥
$loggin=false;
     $salert=false;
     $showError=false;
  
   // echo var_dump($_GET['signup']=='true');
    
     if(isset($_GET['signup'])&&$_GET['signup']=="true"){
        $salert=true;
        // 'i';
      }
    
      else if(isset($_GET['signup']) && $_GET['signup']=="false"){
        $showError=$_GET['error'];
       // echo 'a';
      }
  // echo  $_SESSION['username'];
  
  if(isset($_SESSION['loggin'])&&  $_SESSION['loggin']==true){
                $loggin=true;
              
                //echo '$loggin';
            
  }
  
  if(isset($_GET['login']) && $_GET['login']=='false'){
            $showError=$_GET['error'];
            // echo '$loggn';
          
  }
 
      


echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="index.php">Gforum</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">about</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        catagory
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="contactus.php"  >contact</a>
    </li>
  </ul>
  
  <div class="mx-2 row">
  <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn  btn-success my-2 my-sm-0" type="submit">Search</button>
        </form>';
  if(!$loggin){echo'
      <button class="btn  btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">login</button>
      <button class="btn btn-outline-success mx-2 "  data-toggle="modal" data-target="#signupModal">signup</button>';}
  else{echo'
  <p class="text-light  mx-2 mb-0 mt-1 ">'.$_SESSION['username'].'</p>
  <a class="btn btn-outline-success mx-2 " href="./partials/logout.php"  >logout</a>';}
 echo' </div>
 
</div>
</nav>
';
// echo var_dump($salert);
require 'signup.php';
require 'login.php';

if($salert){
 
  echo  "  <div class=' my-0 alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> your account is created.you can login now.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
}
if($loggin){
  if($_SESSION['hola']){
 
  echo  "  <div class=' my-0 alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> you are logged in.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
  $_SESSION['hola']=false;
  
}}
if($showError){

  echo  "  <div class='my-0 alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> $showError
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
}


?>