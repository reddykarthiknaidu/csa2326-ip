<?php
$a=simplexml_load_file("students.xml");
foreach($a->student as $b)
{
echo "Name :" .$b->name ."<br>";
echo "RegNo:" .$b->regno."<br>";
echo "Dept :" .$b->dept ."<br><br>";
}
?>