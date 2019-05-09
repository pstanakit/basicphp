<?php

for ($a = 1; $a <= 100; $a++)
{
    if ($a % 2 == 1)
    {
        echo "<font color=red>" . $a . ". Hello PHP<br></font>";
    }
    else
    {
        echo $a . ". Hello PHP<br>";
    }
}
