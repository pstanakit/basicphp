<?php

$size = "S";

switch (strtolower($size))
{
    case "s":
        echo "Small Size";
        break;
    case "m":
        echo "Medium Size";
        break;
    case "l":
        echo "Large Size";
        break;
    default:
        echo "Unknow Size";
        break;

}
