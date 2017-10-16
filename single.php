<?php include('includes/connection.php'); ?>
<?php include('includes/functions.php'); ?>
<?php include('includes/session.php'); ?>
<?php confirm_logged_in(); ?>
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
      <h2><a href="single.php?page=<?php echo $page['id'];?>">
        <?php echo $page['name'];?></a></h2>
        <p class="postmeta"> <a href="#">Posted by STI:</a><?php echo $page['publish_date'];?></p>
        <p><?php echo 
            strip_tags(
                nl2br($page['content']),
                "<b><br><a><p>"
            );?></p>
      </div>
      <hr>
      <p><strong>
        <a href="edit_page.php?page=<?php echo $sel_page; ?>">
          Edit Post
        </a> | 
        <a href="#">Delete Post</a>
      </strong></p>
    </section>
  </div>
  <!-- end of header section -->
  <!-- End of Block secion --> 
</div>
<!-- End of main-content	 -->
<?php include('footer.php'); ?>