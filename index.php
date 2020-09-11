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
  
    
  ?>

    <!-- carasoul -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/android.jpg" style="height: 50vh;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/angular.jpg" style="height: 50vh;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/aws.jpg" style="height: 50vh;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/java.jpg" style="height: 50vh;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/css.jpg" style="height: 50vh;" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="container">
        <h2 class="text-center my-3">Gform-catagory</h2>
        <div class="row">
            <?php  
      $sql="SELECT * FROM `categories`";
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result)){
             echo'
                <div class="col-md-4 my-2">
                    <div class="  card d-inline-block mx-3 my-3 " style="width: 18rem;">
                        <img src='.$row["image"].' class="card-img-top h-100 w-100" alt="..." style="height:200px !important" >
                        <div class="card-body">
                            <h5 class="card-title"><a href="threadsList.php?catid='.$row["categories_id"].'">'.$row["categories_name"].'</a></h5>
                            <p class="card-text">'.substr($row["categories_description"],0,90).'....</p>
                            <a href="threadsList.php?catid='.$row["categories_id"].'" class="btn btn-primary">view threads</a>
                        </div>
                    </div>

                </div>
           ';

      }
      ?>
      <!--  -->
  

    <!--  -->
        </div>
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