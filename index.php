<?php 



$conn = new mysqli("localhost", "root", "", "stars");

$results = $conn->query("SELECT * FROM users");
$data = $results->fetch_assoc();
var_dump($data);


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "INSERT INTO users (username, pass) VALUES ('$username', '$password');";
    $conn->query($sql);
}


echo "<form method='POST'>";
    echo "<label> username <input name='username' /> </label><br>";
    echo "<label> password <input type='password' name='password' /></label><br>";
    echo "<input type='submit' value='registreties'/>";
echo "</form>";

echo "<br>";

$masivs = [6, 8, 10];

$assoc_masivs = ["vecums" => 6, "videja_atzime" => 8, "ids" => 10];

print_r($assoc_masivs);

