<?php  
if(!isset($_SESSION)){
session_start();}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Gform-discuss coding </title>
</head>

<body>
    <?php
      require './partials/_dbconnect.php';
    require './partials/_header.php';
    $id=$_GET['threadid'];
    $sql="SELECT * FROM `thread` WHERE `thread_id` = $id" ;
    $request=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($request)){
       $tname=$row["thread_title"];
       $desc=$row["thread_desc"];

    }

    if($_SERVER['REQUEST_METHOD']=='POST' && $_POST['work']=='comment'){
        
        $description=htmlentities($_POST['describe'],ENT_QUOTES);
        $sql="INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_time`, `comment_by`) VALUES ( '$description', '$id', current_timestamp(), '0');";
        $request=mysqli_query($conn,$sql);
        if($request)
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            your answer is posted
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
        else{
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>fail!</strong> we failed to post your answer.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }


}

  
    
  ?>




    <div class="container">
        <h2 class="text-center my-3">Gform-catagory</h2>
        <div class="jumbotron">
            <h1 class="display-4"><?php  echo $tname ?></h1>
            <p class="lead"><?php  echo $desc ?> </p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p><b>posted by gourav</b></p>
        </div>
        <p>Discussion</p>


        <!-- form to post comments -->
        <?php   if(isset($_SESSION['loggin'])&&$_SESSION['loggin']==true ){

       echo' <form class="mb-3" action=" '. $_SERVER["REQUEST_URI"].'" method="POST">
                     
       <input type="hidden" name="work" value="comment">
            <div class="form-group">
                <label for="describe">type your answer</label>
                <textarea class="form-control" id="describe" name="describe" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>';
        }
        else echo"login to share you'r answer";
        ?>

        <?php       
       $sql="SELECT * FROM `comments` WHERE `thread_id` = $id" ;
       $request=mysqli_query($conn,$sql);
       $available=false;
       while($row=mysqli_fetch_assoc($request)){
    
       $desc=$row["comment_content"];
      
           $available=true;


          echo'  <div class="media my-2">
        <img src="./img/download.jpg" width= "50px"class="mr-3" alt="...">
        <div class="media-body">
          

   '.$desc.'            </div>
        </div>

    ';

    }


    
if(!$available){
    echo' <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                    <p class="display-5">no answer available</p>
                    <p class="lead">be the first person to share answer</p>
                    </div>
                </div>';
}

?>





    </div>



        <?php
    require './partials/_footer.php';
  ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
</body>

</html>