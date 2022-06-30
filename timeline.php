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
    width: 20%;
    float: left;
    margin: 3%;
    border-radius: 50%;
    
}
#friends_bar{
    min-height: 400px;
    margin-top: 3%;
    color: #aaa;
    text-align:center;
    padding: 2%;
    font-size: 20px;
    color: #aa3243;
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
        <div style="width: 800px; text-align: center; margin-left: 5%; margin-top: 0.4%; font-size: 30px;">Social Web
            <input type="text" id="search" placeholder="Search for people">
            <img src="profile (2).png" style="margin-bottom:10px;border-radius: 30px; width: 6.5%; float: right;">
        </div>
    </div>

    <div style="width: 1000px; margin: auto;  min-height: 400px;">

<div style="display: flex;">

<div style="min-height: 400px;flex: 0;"></div>
    <div id="friends_bar">
    <img src="profile (2).png" style="margin-bottom:10px; border-radius: 50%; border:solid #fff; width: 50%;">
     <br>   Main User
</div>
<div style=" min-height: 400px;flex: 10px; padding: 3%; ">
    <div style="border: solid thin #aaa; padding: 5%; background-color: antiquewhite;">
        <textarea placeholder="Whats on your"></textarea>
        <input id="postButton" type="submit" value="Post"><br>

    </div>
        <div id="post_bar">

            <div class="posts">
                <div>
                    <img src="fr1.png" style="width: 75px; margin-right: 4px;">
                </div>
                <div>
                    <div style="font-weight: bold; color:#aa3243">First Frindo</div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ex quas fugit odio quod? Cum nostrum ipsa adipisci suscipit, vitae commodi odio numquam, illum dolorem tempora ducimus culpa fuga voluptatum dicta repellat iste nulla id?
                <br><br>
                <a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999;">Apirl 23 2022</span>
                </div>
            </div>
        </div>
        <div id="post_bar">

            <div class="posts">
                <div>
                    <img src="fr2.png" style="width: 75px; margin-right: 4px;">
                </div>
                <div>
                    <div style="font-weight: bold; color:#aa3243">Second Frindo</div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ex quas fugit odio quod? Cum nostrum ipsa adipisci suscipit, vitae commodi odio numquam, illum dolorem tempora ducimus culpa fuga voluptatum dicta repellat iste nulla id?
                <br><br>
                <a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999;">Apirl 23 2022</span>
                </div>
            </div>
        </div>
        <div class="posts">
            <div>
                <img src="fr5.png" style="width: 75px; margin-right: 4px;">
            </div>
            <div>
                <div style="font-weight: bold; color:#aa3243">Fifth Frindo</div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ex quas fugit odio quod? Cum nostrum ipsa adipisci suscipit, vitae commodi odio numquam, illum dolorem tempora ducimus culpa fuga voluptatum dicta repellat iste nulla id?
            <br><br>
            <a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999;">Apirl 23 2022</span>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>

</html>