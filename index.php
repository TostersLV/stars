<?php 



$conn = new mysqli("localhost", "root", "", "stars");

$results = $conn->query("SELECT * FROM users");
$data = $results->fetch_assoc();
var_dump($data);

echo "<form>";
    echo "<label> username <input name='username' />";
    echo "<input type='password' name='password' />";
    echo "<input type='submit' value='registreties'";
echo "</form>";