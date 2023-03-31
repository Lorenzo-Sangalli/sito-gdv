<?php

    // Create a MySQL connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database_name";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form has been submitted
    if(isset($_POST['post_content']))
    {

        // Get the user ID and post content from the form
        $user_id = 1; // Change this to the actual user ID
        $post_content = $_POST['post_content'];


        foreach($_POST as $key => $val)
        {
            echo $key . "=>" . $val; 
        }


        // Insert the post into the database
        $sql = "INSERT INTO posts (user_id, post_content) VALUES ('$user_id', '$post_content')";
        if ($conn->query($sql) === TRUE)
        {
            echo "Post created successfully";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Retrieve all the posts from the database
    $sql = "SELECT * FROM posts ORDER BY id DESC";
    $result = $conn->query($sql);

    // Display the posts
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "<div>";
            echo "<p>User " . $row["user_id"] . " said:</p>";
            echo "<p>" . $row["post_content"] . "</p>";
            echo "</div>";
        }
    } 
    else
    {
        echo "No posts found";
    }

    // Close the MySQL connection
    $conn->close();

?>

<!-- HTML form for creating a new post -->
<form method="post">
    <textarea name="post_title"></textarea>
    <textarea name="post_content"></textarea>
    <br>
    <input type="submit" value="Post">
</form>
