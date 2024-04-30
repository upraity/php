<!-- Q7. Wap to generate uploaded form. -->
<!DOCTYPE html>
<html>
<head>
    <title>File Upload Form</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_FILES["fileToUpload"])) {
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

        if (file_exists($targetFile)) {
            echo "Sorry, file already exists.<br>";
            $uploadOk = 0;
        }

        if ($_FILES["fileToUpload"]["size"] > 5000000) { // 5MB limit
            echo "Sorry, your file is too large.<br>";
            $uploadOk = 0;
        }

        if($fileType != "txt" && $fileType != "pdf" && $fileType != "doc" && $fileType != "docx") {
            echo "Sorry, only TXT, PDF, DOC, and DOCX files are allowed.<br>";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.<br>";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). 
                " has been uploaded successfully.<br>";
            } else {
                echo "Sorry, there was an error uploading your file.<br>";
            }
        }
    }
}
?>

</body>
</html>
