<?php
    require "classes/connect.php";
    require "classes/signup.php";
    
    $first_name = "";
    $last_name = "";
    $gender="";
    $email="";

if($_SERVER['REQUEST_METHOD']=='POST'){

    $signup= new Signup();
    $result =$signup->evaluate($_POST);

    if($result != ""){
        echo "<div style='text-align:center; font-size:12px;color:black;'>";
        echo " <br> The following errors occured<br><br> ";
        echo $result;
        echo "</div>";
    }else{
        header('location: login.php');
        die;
    }
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender= $_POST['gender'];
    $email= $_POST['email'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Social | Sign up</title>
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
    height: 500px;
    margin-top: 5%;
    margin-bottom: 20%;
    margin-left: 19%;
    margin-right: 20%;
    padding-top: 1%;
    padding-left: 2%;
    border-radius: 20px;
    text-align: center;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

#button{
    background-color: #aa3243;
    color: white;
    text-align: center;
    padding: 1% 6% 1% 6%;
    font-size: 15px;
    border-radius: 15%;
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
.text{
    border-radius: 5%;
    padding: 1%;
}
#text{
    height: 40px;
    width : 200px ;
    border-radius:5px;
    border: solid 1px #ccc;
    padding : 4px ;
    font-size : 14px;
    margin-bottom : 10px ;
}
</style>
<body>

    <div id="bar"> Social Web</div>
  
    <div id="bar2"><h2 id="h2">Sign up to Social Web</h2><br><br>
    <form method="post" action="signup.php" >
       <input value="<?php echo $first_name ?>"name="first_name" type="text" class="text"placeholder="First name"><br><br>
       <input value="<?php echo $last_name ?>" name="last_name"  type="text" class="text"placeholder="Last name"><br><br>
       <span style="font-weight: normal ;">Gender : </span>
       <select id ="text" name="gender">
           <option><?php echo $gender ?></option>
           <option>Male</option>
           <option>Female</option>

       </select><br>
       <input value="<?php echo $email ?>" name = "email" type="text" class="text"placeholder="E-mail" ><br><br>   
       
       <input name ="password" type="password" class="text"placeholder="Password" ><br><br>
       <input  name ="re_password" type="password" class="text"placeholder="Retype Password" ><br><br>
      
       <input type="submit" id="button" value="Sign up">
</form>
    </div>

<footer id="footer">Raghad Abu Al wafa 2021-2022</footer>
</body>
</html>