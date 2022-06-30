
<?php
session_start () ;
    include ("classes/connect.php");
    include ("classes/login.php"); 
    include ("classes/user.php");
    include ("classes/post.php");
    

    // check if user is logged in 
   if (isset($_SESSION['social_user_id']) && is_numeric( $_SESSION['social_user_id'])){ 
   $id = $_SESSION['social_user_id']; 
   $login = new Login() ; 
   $result = $login->check_login($id); 
   if ($result) {

        // retrieve user data  
        $user = new User() ;
        $user_data = $user->get_data($id) ;
         if ( !$user_data ){
              header ("Location:login.php") ;
                die; 
            } else { 
                 header ("Location:login.php") ;
                die;
                }              
    }else{
        header ("Location:login.php") ;
                die; 
    }
}

//posts
if($_SERVER['REQUEST_METHOD']=="POST"){
    $post = new Post();
    $id = $_SESSION['social_user_id'];
    $result = $post->create_post($id, $_POST);

    if($result == ""){
        header("location:Profilepage.php");
        die;
    }else{
        echo "<div style='text-align:center; font-size:12px;color:black;'>";
        echo " <br> The following errors occured :<br><br> ";
        echo $result;
        echo "</div>";
    }
}

//display posts
    $post = new Post();
    $id = $_SESSION['social_user_id'];
    $posts = $post->get_posts($id);

    //friends
    $user = new User();
    $id = $_SESSION['social_user_id'];
    $friends = $user->get_friends($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Social</title>
</head>
<style>
    #head-bar {
        height: 60px;
        background-color: #aa3243;
        color: white;
        padding-top: 1%;
        padding-left: 10%;
        font-size: 25px;
        font-family: Georgia, 'Times New Roman', Times, serif;

    }
    #search{
        width: 35%;
        height: 10%;
        margin-left: 3%;
        border-radius: 5px;
        padding-left: 1.5%;
        font-size: 13px;
        background-image: url(search.png);
        background-repeat: no-repeat;
        background-position:right;
        background-size: 15px;
}
#img-profile{
        width: 20%;
        margin-top: -200px;
        border-radius: 50%;
        border: solid 2px white;
}
.menu{
    width: 100px;
    display: inline;
    margin: 3%;
}
.friends_img{
    width: 45%;
    float: left;
    margin: 3%;
    border-radius: 50%;
    
}
#friends_bar{
    background-color: antiquewhite;
    min-height: 400px;
    margin-top: 3%;
    color: #aa3243;
    padding: 2%;
}
.friends{
    clear: both;
    font-size: 12px;
    font-weight: bold;
    color: #aa3243; 
}
textarea{
    width: 100%;
    border :none;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 14px;
    height: 50px;
    
}
#postButton{
    float:right;
    background-color: #aa3243;
    border: none;
    color: white;
    padding: 2%;
    font-size: 14px;
    border-radius: 2px;
    width: 50px;
}
#post_bar{
    margin-top: 20px;
    background-color: white;
    padding: 10px;
}
.posts{
    padding: 4px;
    font-size: 13px;
    display: flex;
}
</style>

<body style="font-family: Georgia, 'Times New Roman', Times, serif;" background-color="#d0d8e4">
    <div id="head-bar">
        <div style="width: 60%; text-align: center; margin-left: 5%; margin-top: 0.4%; font-size: 30px;">
        Social Web
            <input type="text" id="search" placeholder="Search for people">
            <img src="profile (2).png" style="margin-bottom:10px;border-radius: 30px; width: 6.5%; float: right;">
            <a href="logout.php">
            <span style="font-size: 11px; float:right; margin:10px; color:white;">Logout</span>
           </a>
        </div>
    </div>

    <div style="width: 800px; margin: auto;  min-height: 400px;">
    <div style="background-color: white; text-align: center;color:#aa3243">
    <img src="feed-image-2.png" style="width: 100%;">
    <img id="img-profile" src="profile (2).png"><br>
    
    <div style="font-size: 20px;"></div>
    
    <br>

    <div class="menu">Timeline</div> 
    <div class="menu">About</div> 
    <div class="menu">Friends</div>
    <div class="menu">Photos </div>
    <div class="menu">Settings</div>
    </div>
<div style="display: flex;">

<div style="min-height: 400px;flex: 0;"> </div>

    <div id="friends_bar" style="min-width:150px;" >
        Friends <br>
        <?php
            
            if($friends){
                foreach($friends as $FRIEND_ROW){
                    
                    include ("user.php");
                }
            }

           ?>
</div>
  
    <!--posts area-->
<div style=" min-height: 200px;flex: 2.5; padding: 3%; padding_right : 0px;">
    <div style="border: solid thin #aaa; padding: 5%; background-color: antiquewhite;">
        
    <form method="post">
    <textarea name="post" placeholder="Whats on your Mind "></textarea>
        <input id="postButton" type="submit" value="Post">
        <br>
        </form>
    </div>
    <!--posts-->
    <div id="post_bar">

<?php   
 if($posts){
     foreach($post as $ROW){
         
         $user = new User();
         $ROW_USER = $user->get_user($ROW['user_id']);
         include("posts.php");
     }
 }
?>
</div>
     </div>
    
</div>
</div>
</div>
</body>

</html>