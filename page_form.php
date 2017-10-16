<div class="form-group">
  <label for="name" class="col-sm-2 control-label">Название</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="name" placeholder="Название" name="name" value="<?php echo $sel_page['name']; ?>">
  </div>
</div>
<div class="form-group">
 <?php 
    $subjects = get_all_subjects();
  ?>
  <label for="name" class="col-sm-2 control-label">Раздел</label>
  <div class="col-sm-6">
    <select class="form-control" name="subject_id" id="subject_id">
      <?php 
        foreach ($subjects as $subject):
      ?>
        <option value="<?php echo $subject['id'];?>"
        <?php 
          if($subject['id'] == $sel_page['subject_id']){ echo " selected "; }
        ?>
         ><?php echo $subject['name'];?></option>
      <?php  
        endforeach; 
      ?>
    </select>
  </div>
</div>
<div class="form-group">
 <?php 
    $pages_count = get_all_pages($sel_subject)->rowCount(); 
  ?>
  <label for="name" class="col-sm-2 control-label">Порядок</label>
  <div class="col-sm-6">
    <select class="form-control" name="position" id="page_position">
      <?php 
        for($count = 1; $count<=$pages_count+1; $count++):
      ?>
        <option value="<?php echo $count;?>"
        <?php 
          if($count == $sel_page['position']){ echo " selected "; }
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
        <?php if($sel_page['visible'] == 1){ echo " checked "; }?>
      /> Видимый&nbsp; &nbsp;
    </label>
    
    <label>
      <input type="radio" name="visible" id="" value="0" 
        <?php if($sel_page['visible'] == 0){ echo " checked "; }?>
      /> Скрытый
    </label>
    </div>
  </div>
</div>
<div class="form-group">
  <label for="name" class="col-sm-2 control-label">Описание</label>
  <div class="col-sm-10">
    <textarea class="form-control" name="content" rows="3"><?php echo $sel_page['content']; ?></textarea>
  </div>
</div>
<div class="form-group">
  <label for="inputFile" class="col-sm-2 control-label">Загрузить Изображение</label>
  <div class="col-sm-4">
    <input type="file" name="upload_picture">
    <input type="hidden" name="max_size" value="10000000">
  </div>
</div>