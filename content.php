<?php include('includes/connection.php'); ?>
<?php include('includes/functions.php'); ?>
<?php include('includes/session.php'); ?>
<?php confirm_logged_in(); ?>
<?php find_selected_page(); ?>
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
      <li><a href="logout.php">Выход</a></li>
    </ul>
  </nav>
</section>
<section class="col-md-9 viewport">
  <div class="slider">
    <ul class="pgwSlideshow">
      <li><img src="images/promo01.jpg" alt=""></li>
      <li><img src="images/promo02.jpg" alt=""></li>
      <li><img src="images/promo03.jpg" alt=""></li>
      <li><img src="images/promo04.jpg" alt=""></li>
      <li><img src="images/promo05.jpg" alt=""></li>
    </ul>
  </div>
</section>
</div>
<!-- end of header section -->
<div class="row">
  <div class="col-md-12">
  </div>
</div>
<div class="row">
  <div class="col-md-4 block">
    <h2>О нас</h2>
    <p>Мы являемся организацией, которая преподает компьютерное обучение для всех категорий населения.</p>
  </div>
  <div class="col-md-4 block">
    <h2>Что мы делаем</h2>
    <p>В данный момент мы разрабатываем сайт, посвященный "Правильному выбору", дабы помочь пользователям совершить правильный выбор.</p>
  </div>
  <div class="col-md-4 block">
    <h2>Контакты</h2>
    <p>Вы можете связаться с нами по данным, которые указаны ниже для вашего удобства.</p>
    <p>Адрес: ул. В. Александри 133</p>
    <p>E-mail: scriptehinfo@gmail.com</p>
    <p>Телефон: 79156655</p>
  </div>
</div>
<!-- End of Block secion -->
<div class="row portfolio">
  <h3>Последние работы</h3>
  <a href="#">Сайт</a>
  <a href="#">Публикации</a>
  <a href="#">Фото</a>
  <div class="portfolio">
   <a href=""> <img src="images/thumb_1.jpg" alt=""> </a>
   <a href=""> <img src="images/thumb_2.jpg" alt=""> </a>
   <a href=""> <img src="images/thumb_3.jpg" alt=""> </a>
   <a href=""> <img src="images/thumb_4.jpg" alt=""> </a>
   <a href=""> <img src="images/thumb_1.jpg" alt=""> </a>
   <a href=""> <img src="images/thumb_2.jpg" alt=""> </a>
   <a href=""> <img src="images/thumb_3.jpg" alt=""> </a>
   <a href=""> <img src="images/thumb_4.jpg" alt=""> </a>
   <a href=""> <img src="images/thumb_1.jpg" alt=""> </a>
   <a href=""> <img src="images/thumb_2.jpg" alt=""> </a>
   <a href=""> <img src="images/thumb_3.jpg" alt=""> </a>
   <a href=""> <img src="images/thumb_4.jpg" alt=""> </a>
 </div>
</div>
<!-- End of Recent Works section -->
</div>
<!-- End of main-content	 -->
<?php include('footer.php'); ?>