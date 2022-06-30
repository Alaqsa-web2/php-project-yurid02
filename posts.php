<div class="friends">
  <?php
  $image = "";
  if($ROW_USER['gender']=="Male"){
    $image ="socialpage\images\male.png"; 
  }else{
    $image ="socialpage\images\female.png";
  }
  ?>
            <img style = "width:75px; margin-right:4px"src="<?php $image?>"><br>
            <?php
      echo $ROW_USER['first_name'] . " " . $ROW_USER['last_name'];
      
      ?>
        </div>
        <div>
     <div style="font-weight: bold; color:#aa3243">First Frindo</div>
      <?php
      echo $ROW['posts'];

      ?>
        <br><br>
      <a href="">Like</a> . <a href="">Comment</a> . 
  
  <span style="color:#999;">
  <?php echo $ROW['date'] ?>
</span>
  
    </div>
</div>