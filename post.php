<!DOCTYPE hmtl>
<?php
    $servername = "89.46.111.192:3306";
    $username = "Sql1698752";
    $password = "GdV03@2023";
    $dbname = "Sql1698752_1";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form has been submitted
    if(isset($_POST['post_content']))
    {
        // Insert the post into the database
        $user_id = 1;
        $post_content = $_POST['post_content'];
        $post_title = $_POST['post_title'];
        $image_url = $_POST['image_url'];
        
        $sql = "INSERT INTO posts (user_id, post_content, post_title, image_url) VALUES ('$user_id', '$post_content', '$post_title', '$image_url')";
        if ($conn->query($sql) === TRUE)
        {
            echo "Post created successfully";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
<html>

<form method="post">
    <p>titolo</p>
    <input type = "text" name="post_title">
    <br>
    <p>contenuto</p>
    <textarea name="post_content"></textarea>
    <br>
    <input type="submit" value="Post">
    <br>
    <p>nome foto</p>
    <input type = "text" name="image_url">
</form>
</html>