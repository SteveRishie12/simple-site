<?php
// Database connection
 include('dbconnect.php');
if (isset($_POST['image_name']) && isset($_FILES['image']['name'])) {
    $image_name = $_POST['image_name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];

    // Move the uploaded image to a desired folder
    $image_path = 'uploads/' . $_FILES['image']['name'];

    if (move_uploaded_file($image_tmp_name, $image_path)) {
        // Insert the image details into the database
        $query = "INSERT INTO images (image_name, image_path) VALUES ('$image_name', '$image_path')";
        if ($conn->query($query) === TRUE) {
            echo "Image uploaded successfully.";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    } else {
        echo "Failed to upload the image.";
    }
} else {
    echo "Please select an image and provide a name.";
}

$conn->close();
?>
