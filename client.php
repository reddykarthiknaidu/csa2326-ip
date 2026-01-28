<?php
$client = new SoapClient(null, [
    "location" => "http://localhost/soap_calc/server.php",
    "uri" => "http://localhost/soap_calc/server.php"
]);

$result = "";

if (isset($_POST['calc'])) {
    $a = $_POST['n1'];
    $b = $_POST['n2'];
    $op = $_POST['op'];

    if ($op == "add") $result = $client->add($a, $b);
    if ($op == "sub") $result = $client->sub($a, $b);
    if ($op == "mul") $result = $client->mul($a, $b);
    if ($op == "pow") $result = $client->pow($a, $b);
    if ($op == "div") $result = $client->div($a, $b);
}
?>

<form method="post">
Number 1:<input type="number" name="n1" step="any"><br><br>
Number 2:<input type="number" name="n2" step="any"><br><br>


    <select name="op">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="pow">Power</option>
        <option value="div">Divide</option>
    </select><br><br>

    <input type="submit" name="calc" value="Calculate">
</form>

<h3>Result: <?php echo $result; ?></h3>