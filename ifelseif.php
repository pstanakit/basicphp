<?php

$score = 120;

if ($score >= 80 && $score <= 100)
{
    echo "Grade A";
}
elseif ($score >= 70 && $score < 80)
{
    echo "Grade B";
}
elseif ($score >= 60 && $score < 70)
{
    echo "Grade C";
}
elseif ($score >= 50 && $score < 60)
{
    echo "Grade D";
}
elseif ($score > 100 || $score < 0)
{
    echo "Invalid Score";
}
else
{
    echo "Grade F";
}
