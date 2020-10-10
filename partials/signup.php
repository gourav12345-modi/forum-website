<!-- Modal -->
<?php
if($_SERVER['REQUEST_METHOD']=='POST' && $_POST['work']=='signup'){
      require '_dbconnect.php';
       $username=htmlentities($_POST['name'],ENT_QUOTES);
       
       $password=htmlentities($_POST['password'],ENT_QUOTES);
       
       $cpassword=htmlentities($_POST['cpassword'],ENT_QUOTES);
        $exists=false;
        $sql="SELECT * FROM `user` where name='$username'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>=1){
            $exists=true;
            $showError='username already exist';
         }
        else{

                if($password==$cpassword && !$exists){
                  $hashform =password_hash($password,PASSWORD_DEFAULT);
                          $sql="INSERT INTO `user` ( `name`, `password`, `tstamp`) VALUES ('$username', '$hashform', current_timestamp())";
                          $result=mysqli_query($conn,$sql);
                          if($result)$salert=true;
                        // echo var_dump($salert);
                         // echo 'u';
                       header("location:../index.php?signup=true");
                         exit;
                  }
                  else
                  $showError="password and confirm password donot match";
                //   echo 'pd';
                header("location:../index.php?signup=false&error=$showError");
            }
            echo $showError;
         header("location:../index.php?signup=false&error=$showError");
}?>


<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Signup</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="partials/signup.php" method="POST">
            <input type="hidden" name="work" value="signup">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">name</label>
                        <input type="name" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password"id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1">
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