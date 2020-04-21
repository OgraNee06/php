<?php
$acceptName = 'Krystyna';
$name = $_REQUEST['name'];
($_SERVER["REQUEST_METHOD"] == "POST");
if ($name == 'Krystyna')
{
    echo 'Welcome Krystyna';
} else
{
    echo "Żegnam " . $_POST["name"] . " Nie lubię cię! :C";
}
?>