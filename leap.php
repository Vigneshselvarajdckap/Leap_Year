<?php


function leap($leap)
{
    if($leap % 4 == 0)
    {
        return "It's leap year";
    }
    else
    {
        return "It's Not leap year";
    }
}
echo leap(2020);