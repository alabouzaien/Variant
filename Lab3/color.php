<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAB 3</title>

    

    <!-- Bootstrap core CSS -->
<link href="./bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
<?php 


if (isset($_POST["iv_color"])) {
    $bg_color = $_POST["iv_color"];
}

?>
 
 <body style="background-color:<?=$bg_color?>" > 

    <br><br><br>
<center><h1><? echo "выбери любимый цвет" ?></h1></center>
    
    <br><br><br>



  <form  method="post">
    <div class="mb-3">
  <center><label class="form-label" for="favcolor">Color Picker:</label></center>
  <center><input type="color" name="iv color" class="form-control form-control-color" id="exampleColorInput" value="#ff0000"></center>
</div>
  <center><button type="submit" class="btn btn-primary">Submit</button></center>
</form>



<?php

if (isset($_POST["iv_color"]))
    print_r($_POST["iv_color"]);
  
?>













    
  </body>
</html>