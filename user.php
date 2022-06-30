<div class="friends">
     <?php
     $image = "images/male.png";
      if ( $FRIEND_ROW ['gender'] == "Female " ) { 
        $image = "images/female.png "; } 
        
     ?>
      <img class = "friends_img"src="<?php echo $image ?>">
      <br>
<?php  echo $FRIEND_ROW['first_name'] . " " . $FRIEND_ROW['last_name']?>
  </div>
       