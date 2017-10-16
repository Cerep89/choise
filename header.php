<?php require_once('includes/session.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>STI Choise</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="PgwSlideshow/pgwslideshow.css">
  <link rel="stylesheet" href="PgwSlideshow/pgwslideshow_light.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>

<body>
  <div class="line"></div>
  <div class="main-content">
    <div class="row">
      <div class="col-md-3">
        <?php if(isset($_SESSION['user_name'])){
          echo "<h5>{$_SESSION['user_name']}</h5>";
        } ?>
      </div>
      <div class="col-md-3 navbar-right">
        <form class="search-form" action="#" method="post">
          <div class="input-group input-group-sm">
            <input type="text" name="search" value="" placeholder="Поиск" class="form-control">
            <span class="input-group-btn">

             <button type="submit" class="btn btn-default">
               <span class="glyphicon glyphicon-search"></span>
             </button>
           </span>
         </div>
       </form>
     </div>
   </div>
