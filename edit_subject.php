<?php include('includes/connection.php'); ?>
<?php include('includes/functions.php'); ?>
<?php include('includes/form_functions.php'); ?>
<?php include('includes/session.php'); ?>
<?php confirm_logged_in(); ?>
<?php 
if(isset($_POST['submit'])){
  $id = $_GET['subj'];
  $name = $_POST['name'];
  $position = $_POST['position'];
  $visible =  $_POST['visible'];
  $content =  $_POST['content'];

  $errors = [];
  $field_names = ['Название'=>$name, 'Порядок'=>$position, 'Видимость'=>$visible, 'Описание'=>$content];
  $errors = check_errors($field_names);

  if(empty($errors)){
    $update_query = "UPDATE subjects SET
                    name = '{$name}',
                    position = $position, 
                    visible = $visible, 
                    content = '{$content}'
                    WHERE id = '{$id}'";
    $result = $connection->query($update_query);
    if($result){
      $message = " Раздел успешно отредактирован.";
    }else{
      $message = " Редактирование раздела не удалось.";
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
<?php $subject = get_subject_by_id($sel_subject); ?>
 <div class="row">
  <h3 class="col-md-10 col-md-offset-2">Редактирование раздела:
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
  <form class="form-horizontal" action="edit_subject.php?subj=<?php echo $subject['id']; ?>" method="post">
    <div class="form-group">
      <label for="name" class="col-sm-2 control-label">Название</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Название" name="name" value="<?php echo $subject['name']; ?>">
      </div>
    </div>
    <div class="form-group">
     <?php 
        $subjects_count = get_all_subjects()->rowCount(); 
      ?>
      <label for="name" class="col-sm-2 control-label">Порядок</label>
      <div class="col-sm-6">
        <select class="form-control" name="position">
          <?php 
            for($count = 1; $count<=$subjects_count+1; $count++):
          ?>
            <option value="<?php echo $count;?>"
            <?php 
              if($count == $subject['position']){ echo " selected "; }
            ?>
             ><?php echo $count;?></option>
          <?php  
            endfor; 
          ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="pass" class="col-sm-2 control-label">Скрыть</label>
      <div class="col-sm-10">
        <div class="radio">
        <label>
          <input  type="radio" name="visible" id="" value="1" 
            <?php if($subject['visible'] == 1){ echo " checked "; }?>
          /> Видимый&nbsp; &nbsp;
        </label>
        
        <label>
          <input type="radio" name="visible" id="" value="0" 
            <?php if($subject['visible'] == 0){ echo " checked "; }?>
          /> Скрытый
        </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="name" class="col-sm-2 control-label">Описание</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="content" rows="3"><?php echo $subject['content']; ?></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="submit">Сохранить</button>
        <a href="delete_subject.php?subj=<?= $sel_subject; ?>" class="btn btn-warning" onclick="return confirm('Желаете удалить этот раздел?');">Удалить</a>
        <a href="new_page.php?subj=<?= urlencode($sel_subject); ?>" class="col-md-offset-2 btn btn-success navbar-right" style="margin-right: 0px;">Добавить статью в раздел</a>
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