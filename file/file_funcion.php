<!-- Q19. Wap to declare all the function that realted to working of file. -->
<?php
    // File path
    $filename = "example.txt";

    // File creation
    $file = fopen($filename, "w") or die("Unable to open file!");
    fwrite($file, "Hello, this is a SabkaCode.\n");
    fwrite($file, "It contains more text.\n");
    fclose($file);
    echo "File created successfully.<br>";
    // File reading
    $file = fopen($filename, "r") or die("Unable to open file!");
    echo "File content:<br>";
    while (!feof($file)) {
        echo fgets($file);
    }
    fclose($file);
    echo "<br>";
    // File appending
    $file = fopen($filename, "a") or die("Unable to open file!");
    fwrite($file, "This is appended text.\n");
    fclose($file);
    echo "Text appended to the file.<br>";
    // File reading after appending
    $file = fopen($filename, "r") or die("Unable to open file!");
    echo "File content after appending:<br>";
    while (!feof($file)) {
        echo fgets($file);
    }
    fclose($file);
    echo "<br>";
    // File deletion
    if (unlink($filename)) {
        echo "File deleted successfully.<br>";
    } else {
        echo "Error deleting file.<br>";
    }
    // File existence check
    if (file_exists($filename)) {
        echo "File $filename exists.<br>";
    } else {
        echo "File $filename does not exist.<br>";
    }
    // Directory creation
    $dirname = "new_directory";
    if (mkdir($dirname)) {
        echo "Directory $dirname created successfully.<br>";
    } else {
        echo "Error creating directory $dirname.<br>";
    }
    // Directory deletion
    if (rmdir($dirname)) {
        echo "Directory $dirname deleted successfully.<br>";
    } else {
        echo "Error deleting directory $dirname.<br>";
    }
?>
