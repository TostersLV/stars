<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $clicks = $_POST["clicks"];
    $sql = "INSERT INTO clicks (clicks ) VALUES ('$clicks');";
    $conn->query($sql);
}
