<?php
$name = $_REQUEST['name'];
$prod1 = 'Samsung';
$prod2 = 'Canon';
$prod3 = 'Logitech';
$prod4 = 'Muszynianka';
$prod5 = 'Crostini';

switch ($name)
    {
    case $prod1:
        echo 'Produkuje telefony' , "<br>" ;
        break;
    case $prod2:
        echo 'Produkuje drukarki.', "<br>";
        break;
    case $prod3:
        echo 'Produkuje głośniki,', "<br>";
        break;

    case $prod4:
        echo 'Produkuje telefony,', "<br>";
        break;
    case $prod5:
        echo 'Produkuje telewizory,', "<br>";
        break;
        default:
            echo 'Nie produkuje nic';
            break;
}
switch ($name)
{
    case $prod1:
        echo'Produkuje telewizory';
        break;
    case $prod3:
        echo 'Produkuje myszki,', "<br>";
        break;
    case $prod4:
        echo 'Produkuje głośniki';
        break;
    case $prod5:
        echo 'Produkuje myszki';
        break;
}
switch ($name)
{
    case $prod3:
        echo 'Produkuje klawiatury';
        break;
}


