 <head>
    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-all.min.css">
    <link rel="stylesheet" href="index.css">
    <title>gruppo dopo la scuola</title>
    <link rel="icon" type="x-icon" href="GDV-logo-trasparente.png">
    <link rel="shortcut icon" type="x-icon" href="icon.png">
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php
        function cout($post_content, $image_url, $id)
        {
 //         echo $post_content;
          echo '<div class="column">
                <div class="card"><img src="'.$image_url.'"> 
                  <div class="innerCard">
                      <h>'.$post_content.'</h>
                      <p>
                        <br><br>
                        <a href = "https://www.gruppodopolascuola.it/gdv/content.php?id='.$id.'">
                        <button class="cardButton">clicca qui</button>
                      </p>
                    </div>
                </div>
              </div>';
        }

?>
<body>
    <div class="navbar">
     <nav class="shift">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
      </ul>
     </nav>
    </div>
    
    <div class='topImage'>
      <img src="topImage.jpg" style="width:100%;">
          <div class="text-block">
              <h4><u><strong>GDV</strong></u> GruppoDopoLaScuola</h4>
          </div>
    </div>
<br><br><br>
    <div class="Smalltitle">
        <h7 style="font-size: 3.3vw;"><strong>LOREM IPSUM <br>DOLOR SIT AMET</strong></h7>
    </div>
    <br><br>
    <div class="firstP">        
        <div class="firstText">
            <p style="font-size: 1.95vw;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
        <div class="sideImage1">
            <img src="vertImage.jpg" class="side">
        </div>
    </div>
    
    <br>

    <div class="row">

    </div>

</body>


<?php

    // Create a MySQL connection
    
    $servername = "89.46.111.192:3306";
    $username = "Sql1698752";
    $password = "GdV03@2023";
    $dbname = "Sql1698752_1";
    $conn = new mysqli($servername, $username, $password, $dbname);    
    

    
        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {   
                cout($row["post_title"], $row["image_url"], $row["id"]);
            }
        } 
        else
        {
            echo "No posts found";
        }
    
        // Close the MySQL connection
        $conn->close();
    
?>