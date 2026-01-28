<?php
$xmlFile = "students.xml";

if (isset($_POST['add'])) {

    // If file exists, load it, else create new
    if (file_exists($xmlFile)) {
        $xml = simplexml_load_file($xmlFile);
    } else {
        $xml = new SimpleXMLElement("<students></students>");
    }

    $student = $xml->addChild("student");
    $student->addChild("regno", $_POST['regno']);
    $student->addChild("name", $_POST['name']);
    $student->addChild("dept", $_POST['dept']);

    $xml->asXML($xmlFile);
}

$data = file_exists($xmlFile) ? simplexml_load_file($xmlFile) : null;
?>

<!DOCTYPE html>
<html>
<body>

<h2>Add Student</h2>
<form method="post">
    Reg No: <input type="text" name="regno"><br><br>
    Name: <input type="text" name="name"><br><br>
    Dept: <input type="text" name="dept"><br><br>
    <input type="submit" name="add" value="Add Student">
</form>

<hr>

<h2>Student List</h2>

<table border="1" cellpadding="5">
<tr>
    <th>Reg No</th>
    <th>Name</th>
    <th>Department</th>
</tr>

<?php
if ($data) {
    foreach ($data->student as $s) {
        echo "<tr>";
        echo "<td>{$s->regno}</td>";
        echo "<td>{$s->name}</td>";
        echo "<td>{$s->dept}</td>";
        echo "</tr>";
    }
}
?>

</table>

</body>
</html>