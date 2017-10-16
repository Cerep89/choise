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
      <li><a href="contacts.php">Контакты</a></li>
      <li><a href="login.php">Войти</a></li>
    </ul>
  </nav>
</section>
<section class="col-md-9 viewport">
 <h1 class="col-md-10 col-md-offset-2">Создание нового раздела:</h1>
  <form class="form-horizontal" action="create_subject.php" method="post">
    <div class="form-group">
      <label for="name" class="col-sm-2 control-label">Название</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Название" name="name" value="">
      </div>
    </div>
    <div class="form-group">
      <label for="name" class="col-sm-2 control-label">Позиция</label>
      <div class="col-sm-6">
        <select class="form-control" name="position">
        <?php $count_subjects = get_all_subjects()->rowCount();
          for($count=1; $count<=$count_subjects+1 ; $count++): 
        ?>
          <option 
            value="<?php echo $count; ?>">
                  <?php echo $count; ?>          
          </option>
        <?php endfor; ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="pass" class="col-sm-2 control-label">Скрыть</label>
      <div class="col-sm-10">
        <div class="radio">
        <label>
          <input type="radio" name="visible" id="" value="1" checked /> Видимый&nbsp; &nbsp;
        </label>
        
        <label>
          <input type="radio" name="visible" id="" value="0" /> Скрытый
        </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="name" class="col-sm-2 control-label">Описание</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="content" rows="3"></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Создать</button>
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