<?php include('includes/connection.php'); ?>
<?php include('includes/functions.php'); ?>
<?php include('includes/form_functions.php'); ?><?php include('includes/session.php'); ?>
<?php confirm_logged_in(); ?>
<?php
if(intval($_GET['subj'])){
  if(isset($_POST['submit'])){
    $subject_id = $_POST['subject_id'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $visible =  $_POST['visible'];
    $content =  $_POST['content'];

    $errors = [];
    $field_names = ['Название'=>$name, 'Порядок'=>$position, 'Видимость'=>$visible, 'Описание'=>$content];
    $errors = check_errors($field_names);

    if(empty($errors)){
      $insert_query = "INSERT 
              INTO pages (subject_id, name, position, visible, content)
              VALUES ($subject_id, '{$name}', $position, $visible, '{$content}')";
      $result = $connection->query($insert_query);
      if($result){
        $message = " Страница успешно создана.";
      }else{
        $message = " Создание страницы не удалось.";
      } // some errors occured during query
    }else{
      $message = "У вас есть ошибки в заполнении полей формы.";
    }
  } // end of submit button press
} // end of check if subj is integer value
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
<?php $subject = get_subject_by_id($sel_subject); ?>
 <div class="row">
  <h3 class="col-md-10 col-md-offset-2">Добавление страницы к  разделу:
    <?php echo $subject['name']; ?>
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
  <form class="form-horizontal" action="new_page.php?subj=<?php echo urlencode($sel_subject); ?>" method="post">
    <?php include('page_form.php'); ?>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="submit">Создать</button>
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