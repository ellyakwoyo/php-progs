<!DOCTYPE html>
<html>
<head>
    <title>File Handling and Upload</title>
</head>
<body>
    <h2>File Handling and Upload</h2>

    <?php
    // Handle file inclusion
    $includedFile = "included_file.php";
    if (file_exists($includedFile)) {
        echo "<h3>Included File:</h3>";
        include($includedFile);
    } else {
        echo "<p>Included file not found.</p>";
    }

    // Handle file upload
    if (isset($_FILES['file'])) {
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES['file']['name']);
        $uploadSuccess = move_uploaded_file($_FILES['file']['tmp_name'], $targetFile);

        if ($uploadSuccess) {
            echo "<p>File uploaded successfully.</p>";
            echo "<p>Uploaded file path: " . $targetFile . "</p>";
        } else {
            echo "<p>File upload failed.</p>";
        }
    }
    ?>

    <h3>Upload a File:</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
