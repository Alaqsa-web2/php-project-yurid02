<?php

    session_start();
    require "classes/connect.php";
    require "classes/login.php";
    
    $email="";
    $password = "";
    
   

if($_SERVER['REQUEST_METHOD']=='POST'){

    $login= new Login();
    $result =$login->evaluate($_POST);

    if($result != ""){
        echo "<div style='text-align:center; font-size:12px;color:black;'>";
        echo " <br> The following errors occured<br><br> ";
        echo $result;
        echo "</div>";
    }else{
        header('location: Profilepage.php');
        die;
    }

     $email= $_POST['email'];
     $password= $_POST['password'];
   
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Social | login</title>
</head>
<style>
#bar {
    height: 95px;
     background-color: #ef94ab; 
     box-shadow: gray 2px 2px 7px;
     color: #aa3243;
     font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
    font-size: 40px;
    padding-top: 4%;
    padding-left: 3%;
    border-radius: 10%;
}
#bar2{
    background-color:#fdf9e5; 
    width: 60%;
    height: 300px;
    margin-top: 5%;
    margin-bottom: 20%;
    margin-left: 15%;
    margin-right: 20%;
    padding: 5%;
    border-radius: 20px;
    text-align: center;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
#text1{
 margin-top: 5px;
 margin-left: 35px;
 border-radius: 5%;
 padding: 1%;
}
#text2{
 margin-top: 5px;
 margin-left: 10px;
 border-radius: 5%;
 padding: 1%;

}
#log{
    background-color: #aa3243;
    color: white;
    text-align: center;
    padding: 1% 4.5% 1% 4.5%;
    font-size: 15px;
    border-radius: 10%;
    border-style:double;
    border-color: #aa3243;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
#sign{
    background-color: #aa3243;
    color: white;
    text-align: center;
    margin-left: 3%;
    padding: 1% 4% 1% 4%;
    font-size: 15px;
    border-radius: 10%;
    border-style:double;
    border-color: #aa3243;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
#footer{
    background-color: #ef94ab;
    font-size: 20px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    text-align: center;
    padding: 2%;
}
</style>
<body>

    <div id="bar"> Social Web</div>
  
    <div id="bar2">
    <form method="post" >    
    <h2 id="h2">login to Social Web</h2><br><br>
      E-mail <input name="email" value="<?php echo $email ?>" type="text" id="text1" ><br><br>   
      Password <input name="password" value="<?php echo $password ?>" type="text" id="text2"><br><br>
      <input type="submit" id="log" value="log in">
</form>
   </div>

<footer id="footer">Raghad Abu Al wafa 2021-2022</footer>
</body>
</html>