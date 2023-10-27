<!DOCTYPE html>
<html>
<head>
    <title>Image Slider</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="slider">
        <?php
        // Database connection
         include('dbconnect.php'); 

        // Fetch images from the database
        $query = "SELECT * FROM images";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<img src="' . $row['image_path'] . '" alt="' . $row['image_name'] . '">';
                 
            }
            
        } else {
            echo "No images found.";
        }

        $conn->close();
        ?>
         <div class="infor">
    <h3>welcome all to all saints music family. Here we grow together, embrace one another,<br>
     challenge one another and love one another.<br>
      Please register yourself on <a href="uploadrecords.php"> Register</a> button on top.</h3>
  </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
