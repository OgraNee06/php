<?php
$name = $_REQUEST['name'];
$prod1 = 'Samsung';
$prod2 = 'Canon';
$prod3 = 'Logitech';
$prod4 = 'Muszynianka';
$prod5 = 'Crostini';

echo $name;
switch ($name)
    {
    case $prod1:
        echo ' produkuje telefony i telewizory.';
        break;
    case $prod2:
        echo ' produkuje drukarki';
        break;
    case $prod3:
        echo ' produkuje głośniki, myszki oraz klawiatury';
        break;
    case $prod4:
        echo ' produkuje telefony i głośniki';
        break;
    case $prod5:
        echo ' produkuje telewizory i myszki';
        break;
    default:
        echo ' nie produkuje nic';

    }




