<html lang="pl">
<body>
<form method="post" action="index1.php"
">
Producent: <input type="text" name="name">
<input type="submit">
</body>
</html>

<?php
if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    $samsung = 'Samsung';
    $canon = 'Canon';
    $logitech = 'Logitech';
    $muszynianka = 'Muszynianka';
    $crostini = 'Crostini';
    $maxCounters = [
        $samsung => 2,
        $canon => 1,
        $logitech => 3,
        $muszynianka => 2,
        $crostini => 2
    ];

    if (isset($maxCounters[$name])) //isset sprawdza czy w tablicy istnieje wartosc pod podanym kluczem
    {
        $maxCounter = $maxCounters[$name];
    } else {
        $maxCounter = 0;
    }

    $counter = 0;

// komentarz
    /*
     * komentarz
     */
// $counter++;
// $counter += 1;

    switch ($name) {

        case $canon:
            if ($counter < $maxCounter) {
                echo 'Produkuje drukarki';
                $counter++;
            }
            if ($counter == $maxCounter) {
                break;
            }

        case $muszynianka:
            if ($counter < $maxCounter) {
                echo 'Produkuje telefony';
                $counter++;
            }
            if ($counter == $maxCounter) {
                break;
            }

        case $logitech:

            if ($counter < $maxCounter) {
                echo 'Produkuje klawiatury';
                $counter++;
            }
            if ($counter == $maxCounter) {
                break;
            }
        case $samsung:
            if ($counter < $maxCounter) {
                echo 'Produkuje telefony ';
                $counter++;
            }
            if ($counter == $maxCounter) {
                break;
            }
        case $crostini:
        case $samsung:
            if ($counter < $maxCounter) {
                echo 'Produkuje telewizory';
                $counter++;
            }
            if ($counter == $maxCounter) {
                break;
            }
        case $logitech:
        case $muszynianka:

            if ($counter < $maxCounter) {
                echo 'Produkuje głośniki';
                $counter++;
            }
            if ($counter == $maxCounter) {
                break;
            }
        case $logitech:
        case $crostini:
            if ($counter < $maxCounter) {
                echo 'Produkuje myszki';
                $counter++;
            }
            if ($counter == $maxCounter) {
                break;
            }
        default:
            echo 'Nie produkuje nic';
    }
}
?>