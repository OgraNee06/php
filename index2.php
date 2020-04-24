<?php
$name = $_REQUEST['name'];
$imiona= array(
    'Krystyna',
    'Andrzej'
);
if ($name === $imiona[1] )
{
    echo 'Witaj ', $imiona[1];
}
if ($name === $imiona[0])
{
    echo 'Witaj ' , $imiona[0];
}
for($name1 = 'Krzysztof'; $name2 = 'Sandra';) {
    switch ($name) {
        case $name1;
            echo 'Bycmoze Witam ', $name1;

    }
}






