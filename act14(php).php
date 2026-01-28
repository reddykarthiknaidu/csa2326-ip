<?php
if (isset($_POST['name']) && isset($_POST['regno'])) {

    $name  = $_POST['name'];
    $regno = $_POST['regno'];

    $file = fopen("data.txt", "a");
    fwrite($file, "Name: $name  RegNo: $regno\n");
    fclose($file);

    echo "<h3>Data Saved Successfully</h3>";
    echo "<b>Name:</b> $name <br>";
    echo "<b>RegNo:</b> $regno <br><br>";

    echo "<h3>File Contents:</h3>";

    $file = fopen("data.txt", "r");
    while (!feof($file)) {
        echo fgets($file) . "<br>";
    }
    fclose($file);

} else {
    echo "Please submit the form from input.html";
}
?>