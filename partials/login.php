<?php
 
 if($_SERVER["REQUEST_METHOD"]=="POST" && $_POST['work']=='loggin'){
  require '_dbconnect.php';
  $user=htmlentities($_POST['name'],ENT_QUOTES);
  
  $password=htmlentities($_POST['password'],ENT_QUOTES);
  $sql="SELECT * FROM `user` WHERE `name` LIKE '$user'";
  $request=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($request);
  if($num==1){

    $row=mysqli_fetch_assoc($request);
        if(password_verify($password,$row['password'])){
                        $login=true;
                        session_start();
                        $_SESSION['loggin']=true;
                        $_SESSION['username']=$user;  //setting only username 
                    header("location:http://localhost/gphpt/gforum/index.php?login=true");
                         $_SESSION['hola']=true;

    

            }
            else
            {
                $serror="password donot match";
               header("location:http://localhost/gphpt/gforum/index.php?login=false&error=$serror");
                }   
     

  }
  else{
      $serror="no account ";
   header("location:http://localhost/gphpt/gforum/index.php?login=false&error=$serror");
  }
 }
?>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="partials/login.php" method="POST">
            <input type="hidden" name="work" value="loggin">
            <div class="modal-body">
             
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="name " name="name" class="form-control" id="name" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password"class="form-control" id="password">
                    </div>
                 
                    <button type="submit" class="btn btn-primary">Submit</button>
             
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
            </div>
            </form>
        </div>
    </div>
</div>