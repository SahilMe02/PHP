<?php
$a=0;
$b=1;
$i=1;
echo "$a <br> $b"; do
{
$c=$a+$b; echo "<br>$c"; $a=$b;
$b=$c;
$i++;
} while($i<=8); ?>