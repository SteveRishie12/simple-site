<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
    include('header.php'); ?>
    <div class="form"> 
    <h2>Upload an Image</h2>
    <form action="upload2.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <input type="text" name="image_name" placeholder="Image Name" required>
        <input type="submit" value="Upload">
    </form>
    </div>
    <?php 
    include('footer.php');?>
</body>
</html>
