<?php

$scan = scandir("./");

foreach ($scan as $item)
{
    if (!preg_match("/^\./", $item) && $item != "index.php")
    {
        echo "<a href=\"$item\">".$item."</a><br>";
    }
}