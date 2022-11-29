<?php 
include 'config.php';
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name"><br>
    <input type="file" name="my_file"><br>
    <button type="submit">Upload</button>
</form>

<div>
    <?php 
        $filePath = MY_DB_FILE;
        $fileResource = fopen($filePath, 'r') or die("No such file");

            while (!feof($fileResource)) {
                $fileData = fgets($fileResource);
                if ($fileData) {
                    echo sprintf(
                        '<li>%s <a href="%s" target="_blank">Preview</a>', 
                        $fileData, $fileData, $fileData, $fileData
                    );
                }
            }
        fclose($fileResource);
    ?>
</div>


