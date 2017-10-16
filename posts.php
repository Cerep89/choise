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
<section class="col-md-6 posts">
  <h3>
    <?php 
      $subject_set = get_subject_by_id($sel_subject);
      echo "Раздел: {$subject_set['name']}";
    ?>
  </h3>
  <?php
    $pages_set = get_all_pages($subject_set['id']);
    foreach ($pages_set as $page):
  ?>
  <div class="post gallery">
    <p>
      <img class="single-large" src="images/promo01.jpg" alt="">
    </p>
    <h2><a href="article.php?page=<?php echo $page['id'];?>">
    <?php echo $page['name'];?></a></h2>
    <p class="postmeta"> <a href="#">Posted by STI:</a><?php echo $page['publish_date'];?></p>
    <p><?php echo mb_substr($page['content'], 0, 150, 'utf8');?></p>
  </div>
  <hr>
  <?php endforeach; ?>
  <!-- end articles loop -->
</section>
<section class="col-md-3 navbar-right">
  <div class="popular">
    <h3>Sidebar Section</h3>
    <p>This section contains most popular articles.</p>
  </div>
  <div class="about">
    <h3>Популярные статьи</h3>
    <p>
      Однажды, во время своей вечерней прогулке по царскому дворцу, он увидел купающуюся <a href="#">Вирсавию</a>, которая была очень красива. Несмотря на тот факт, что она была женой одного из его солдат, он велел послать за ней, а затем он переспал с ней.
    </p>
    <p>
      Однажды, во время своей вечерней прогулке по царскому дворцу, он увидел купающуюся <a href="#">Вирсавию</a>, которая была очень красива. Несмотря на тот факт, что она была женой одного из его солдат, он велел послать за ней, а затем он переспал с ней.
    </p>
    <p>
      Однажды, во время своей вечерней прогулке по царскому дворцу, он увидел купающуюся <a href="#">Вирсавию</a>, которая была очень красива. Несмотря на тот факт, что она была женой одного из его солдат, он велел послать за ней, а затем он переспал с ней.
    </p>
  </div>
</section>
</div>
<!-- end of header section -->
<!-- End of Block secion -->
</div>
<!-- End of main-content   -->
<?php include('footer.php'); ?>