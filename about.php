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
    <style>
      body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

  </head>
  <body>
  <?php
    require './partials/_header.php';
  
  ?>


<div class="container ">

<!-- main content -->


<div class="about-section " style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <h1>About Us Page</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde tempora ducimus officia ut architecto pariatur sit, corporis quam, nulla, sequi debitis eligendi corrupti sint possimus? Minima, veniam voluptates. Cumque, eligendi?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat corporis voluptates fuga culpa assumenda recusandae nemo nisi omnis excepturi. Cupiditate, voluptates enim nisi laudantium voluptatibus voluptas perspiciatis! Adipisci, est dignissimos.</p>

  
  <h2 style="text-align:center " class="text-success" >Our Team</h2>
   
 
    
      <div class="card w-25"   style=" border: 2px solid green";>
        <img src="./img/team1.jpg" alt="Jane" style="width:100%">
        <div class="container">
          <h2>Jane Doe</h2>
          <p class="title">CEO & Founder</p>
          <p class="text-dark">jane@example.com</p>
     </div>
      </div>
      <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptatum animi alias omnis error, nulla reiciendis nihil ipsum dolores pariatur nobis sapiente veritatis, cupiditate exercitationem at doloremque quisquam, consequuntur dolorem.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. At, totam atque optio laboriosam in vitae dicta minus impedit perspiciatis commodi ipsum sunt inventore eligendi blanditiis ullam pariatur voluptates provident? Unde.lorem   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos iusto dignissimos laudantium molestias porro velit aliquid ipsam autem blanditiis magnam? Sapiente dolore dolorem natus reiciendis impedit aspernatur, voluptates doloribus nobis.
      </p>
   

  
 
      <div class="card w-25"  style=" border: 2px solid green";>
        <img src="./img/team2.jpg" alt="Mike" style="width:100%">
        <div class="container">
          <h2>Mike Ross</h2>
          <p class="title">Art Director</p>
        
          <p class="text-dark">mike@example.com</p>
        
        </div>
      </div>
      <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptatum animi alias omnis error, nulla reiciendis nihil ipsum dolores pariatur nobis sapiente veritatis, cupiditate exercitationem at doloremque quisquam, consequuntur dolorem.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. At, totam atque optio laboriosam in vitae dicta minus impedit perspiciatis commodi ipsum sunt inventore eligendi blanditiis ullam pariatur voluptates provident? Unde.lorem   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos iusto dignissimos laudantium molestias porro velit aliquid ipsam autem blanditiis magnam? Sapiente dolore dolorem natus reiciendis impedit aspernatur, voluptates doloribus nobis.
    </p>

  

      <div class="card w-25"  style=" border: 2px solid green";>
        <img src="./img/team3.jpg" alt="John" style="width:100%">
        <div class="container">
          <h2>John Doe</h2>
          <p class="title">Designer</p>
       
          <p>john@example.com</p>
      
        </div>
      </div>
      <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptatum animi alias omnis error, nulla reiciendis nihil ipsum dolores pariatur nobis sapiente veritatis, cupiditate exercitationem at doloremque quisquam, consequuntur dolorem.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. At, totam atque optio laboriosam in vitae dicta minus impedit perspiciatis commodi ipsum sunt inventore eligendi blanditiis ullam pariatur voluptates provident? Unde.lorem   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos iusto dignissimos laudantium molestias porro velit aliquid ipsam autem blanditiis magnam? Sapiente dolore dolorem natus reiciendis impedit aspernatur, voluptates doloribus nobis.
    </p>
    </div>


  <!-- !main content -->


</div>


    <?php
    require './partials/_footer.php';
  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>