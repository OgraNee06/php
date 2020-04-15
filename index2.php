<html lang="pl">
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
// collect value of input field
$name = "Krystyna";
$name = $_REQUEST['fname'];
if ($name == "Krystyna")
{
    echo "Welcome Krystyna";
} else
{
    echo "Żegnam " . $_POST["fname"] . " Nie lubię cię! :C";
}
?>
</body>
</html>