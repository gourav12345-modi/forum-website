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
    $id=$_GET['catid'];
    $sql="SELECT * FROM `categories` WHERE `categories_id` = $id" ;
    $request=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($request)){
       $tname=$row["categories_name"];
       $desc=substr($row["categories_description"],0,90);

    }


   if($_SERVER['REQUEST_METHOD']=='POST' && $_POST['work']=='thread'){
            $titl=htmlentities($_POST["title"],ENT_QUOTES);
            $description=htmlentities($_POST['describe'],ENT_QUOTES);
         

            $sql="INSERT INTO `thread` ( `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `time`) VALUES ( ' $titl', ' $description', '$id', '0', current_timestamp())";
            $request=mysqli_query($conn,$sql);
            if($request)
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>SUCCESS!</strong> your problem is posted
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            }
            else{
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>fsl</strong> your problem is posted
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
        </div>

        <!-- form to post question -->
        <?php   if(isset($_SESSION['loggin'])&&$_SESSION['loggin']==true ){
       echo' <p><b>Ask your query</b></p>
        <form class="mb-3" action="'. $_SERVER['REQUEST_URI'].'" method="POST">
        <input type="hidden" name="work" value="thread">
            <div class="form-group">
                <label for="title">problem title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">give short and crisp title </small>
            </div>

            <div class="form-group">
                <label for="describe">Example textarea</label>
                <textarea class="form-control" id="describe" name="describe" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>';
        }
        else {
            echo'login to ask a question';
        }
?>
        <!-- recent asked question -->


        <?php        $sql="SELECT * FROM `thread` WHERE `thread_cat_id` = $id" ;
                    $available_question=false;
                    $request=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($request);
                    if($num){
                       echo' <p><b> Browse previous questions</b></p>';
                    }
                    while($row=mysqli_fetch_assoc($request)){
                    $title=$row["thread_title"];
                    $desc=$row["thread_desc"];
                    $id=$row["thread_id"];
                $time=$row['time'];
                  $userid=$row['thread_user_id'];
                    $available_question=true;
                        echo'  <div class="media my-2  " >
                        <img src="./img/download.jpg" width= "50px"class="mr-3" alt="...">
                        <div class="media-body m--5">

                            <h5 class="m-0 p-0" style="font-size: 0.8rem; "><a href="threads.php?threadid='.$id.'">'.$title.'</a></h5>
                            <p class="mb-0"  style="font-size: 0.5rem; width:12rem"  >by '.$userid.' at '. $time.' </p>
                            

              <p style="font-size: 0.8rem; margin-top:0; margin-bottom:auto">  '.$desc.'  </p>          </div>
                        </div>

                   ';

                }


                if(!$available_question){
                echo' <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                    <p class="display-5">no question available</p>
                    <p class="lead">be the first person to ask question</p>
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