<?php include('includes/connection.php'); ?>
<?php include('includes/functions.php'); ?>
<?php include('includes/session.php'); ?>
<?php 
  if(logged_in()){
  header ("Location: content.php");
} ?>
<?php 
  if(!isset($_POST['login'])){
    // if button wasn't pressed
  }else{
    // button pressed
    $user_name = trim($_POST['user_name']);
    $user_pass = trim($_POST['user_pass']);
    $hash_pass = sha1($user_pass);

    $user_query = "SELECT user_id, user_name 
                    FROM users 
                    WHERE user_name = '{$user_name}'AND user_pass = '{$user_pass}' LIMIT 1";
    $user_result = $connection->query($user_query)->fetch();

    if(isset($user_result['user_id'])){
      // login succesfull
      $_SESSION['user_id'] = $user_result['user_id'];
      $_SESSION['user_name'] = $user_result['user_name'];
      header("Location: content.php");
      exit;
    }else{
      $message = "Логин и пароль не совпадают";
    }
  } // end jf button was pressed
 ?>
<?php 
  find_selected_page();
?>
<?php include('header.php'); ?>
<div class="row">
  <section class="col-md-3 navigation">
    <div class="logo">
      <img src="images/logo2.png" alt="">
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Главная</a></li>
        <?php
        navigation($sel_subject, $sel_page);
        ?>
      <li><a href="contacts.php">Контакты</a></li>
      <li><a href="login.php">Войти</a></li>
    </ul>
  </nav>
</section>
<section class="col-md-9 viewport">
 <h1 class="col-md-10 col-md-offset-2">Вход на сайт:</h1>
 <h4 class="col-md-10 col-md-offset-2">
    <?php if(isset($message)){ echo $message; }?>
  </h4>
  <form class="form-horizontal" action="login.php" method="post">
    <div class="form-group">
      <label for="name" class="col-sm-2 control-label">Логин</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" placeholder="Login" name="user_name" value="">
      </div>
    </div>  
    <div class="form-group">
      <label for="name" class="col-sm-2 control-label">Пароль</label>
      <div class="col-sm-5">
        <input type="password" class="form-control" placeholder="Passwor" name="user_pass" value="">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="login" class="btn btn-success">Вход</button>
      </div>
    </div>
  </form>
</section>
</div>
<!-- end of header section -->
<!-- End of Block secion -->
</div>
<!-- End of main-content	-->
<?php include('footer.php'); ?>