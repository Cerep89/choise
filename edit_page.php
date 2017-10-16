<?php include('includes/connection.php'); ?>
<?php include('includes/functions.php'); ?>
<?php include('includes/form_functions.php'); ?>
<?php include('includes/session.php'); ?>
<?php confirm_logged_in(); ?>

<?php 
if(isset($_POST['submit'])){
  $id = $_GET['page'];
  $subject_id = $_POST['subject_id'];
  $name = $_POST['name'];
  $position = $_POST['position'];
  $visible =  $_POST['visible'];
  $content =  $_POST['content'];
  $pic_id = intval(picture_upload());

  $errors = [];
  $field_names = ['Название'=>$name, 'Порядок'=>$position, 'Видимость'=>$visible, 'Описание'=>$content];
  $errors = check_errors($field_names);

  if(empty($errors)){
    $update_query = "UPDATE pages SET
                    subject_id = '{$subject_id}',
                    name = '{$name}',
                    position = $position, 
                    visible = $visible, 
                    content = '{$content}',
                    picture_id = '{$pic_id}'
                    WHERE id = '{$id}'";
    $result = $connection->query($update_query);
    if($result){
      $message = " Страница успешно отредактирован.";
    }else{
      $message = " Редактирование страницы не удалось.";
    } // some errors occured during query
  }else{
    $message = "У вас есть ошибки в заполнении полей формы.";
  }
} // end of submit button press
?>
<?php 
  find_selected_page();
?>
<?php include('header.php'); ?>

<script>
  // function check_field(){
  //   var state = $("input").val();
  //   if (!state) return $("input").addClass('in') + $("#message").html("<b style="color:red">You have error</b>");
  //   $("#message").hide(); 
  // }
</script>
<span id="message"></span>
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
<?php $sel_page = get_page_by_id($sel_page); ?>
 <div class="row">
  <h3 class="col-md-10 col-md-offset-2">Редактирование раздела:
    <?php echo $sel_page['name']; ?>
  </h3>
  <h4 class="col-md-10 col-md-offset-2">
    <?php if(isset($message)){ echo $message; }?>
  </h4>
  <h4 class="col-md-10 col-md-offset-2">
    <?php 
      if(!empty($errors)){
        foreach ($errors as $error) {
          echo $error . "<br/>";
        }
      }
    ?>
  </h4>
 </div>
  <form class="form-horizontal" action="edit_page.php?page=<?php echo $sel_page['id']; ?>" method="post" enctype="multipart/form-data">
    <?php include('page_form.php'); ?>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="submit">Сохранить</button>
        <a href="delete_page.php?subj=<?= $sel_page['id']; ?>" class="btn btn-warning" onclick="return confirm('Желаете удалить эту страницу?');">Удалить</a>
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