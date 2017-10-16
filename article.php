<?php include('includes/connection.php'); ?>
<?php include('includes/functions.php'); ?>
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
          public_navigation($sel_subject, $sel_page);
        ?>
      <!-- <li><a href="posts.php">Разделы</a>
        <ul>
          <li><a href="#">Давид</a></li>
          <li><a href="#">Урия</a></li>
          <li><a href="#">Вирсавия</a></li>
        </ul>
      </li> -->
      <li><a href="single.php">Статья</a></li>
      <li><a href="contacts.php">Контакты</a></li>
      <li><a href="login.php">Войти</a></li>
    </ul>
  </nav>
  </section>
  <section class="col-md-9 viewport">
    <div class="post gallery">
    <?php  $page = get_page_by_id($sel_page);?>
      <p>
        <img class="single-large" src="<?= $page['picture_id']; ?>" alt="">
      </p>
      <h2><?php echo $page['name'];?></h2>
        <p class="postmeta"> <a href="#">Posted by STI:</a><?php echo $page['publish_date'];?></p>
        <p><?php echo $page['content'];?></p>
      </div>
      <hr>
    </section>
  </div>
  <!-- end of header section -->
  <!-- End of Block secion --> 
</div>
<!-- End of main-content	 -->
<?php include('footer.php'); ?>