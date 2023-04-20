<?php
    $servername = "89.46.111.192:3306";
    $username = "Sql1698752";
    $password = "GdV03@2023";
    $dbname = "Sql1698752_1";
    $conn = new mysqli($servername, $username, $password, $dbname);  

    $id = $_GET["id"];
    $sql = "SELECT * FROM posts WHERE id = $id";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo $row["post_content"];
    }    
    

    $conn->close();

 ?>


<!-- HTML form for creating a new post -->
<!--<form method="post">-->
<!--    <textarea name="post_title"></textarea>-->
<!--    <textarea name="post_content"></textarea>-->
<!--    <br>-->
<!--    <input type="submit" value="Post">-->
<!--</form>-->