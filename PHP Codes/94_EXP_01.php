<?php
echo "a. Welcome to php<br/>";
$a=40;$b=11;
echo "b. Sum of two number is:".($a+$b)."<br>";
echo "   Remainder of two number is:".($a%$b)."<br/>";
$a=40;$b=40;
echo "c. Comparison is (==):".($a==$b)."<br/>";
echo "   Comparison is (==):".($a!==$b)."<br/>";
$a=40;$b=11;
if($a>30 && $b<20) echo "d. Both Statements are true<br/>";
if($a>30 && $b<20) echo "   Either one of Statements is true<br/>";
$a=8;$b=4;$c=2;
echo "e. Bitwise AND operation:".($a&$b)."<br/>";
echo "   Bitwise Ledt shift operation:".($b<<$c)."<br/>";
echo "f. $a  += $b :".($a+=$b)."<br/>";
echo "   $a  *= $b :".($a*=$b)."<br/>";
echo "g. Preincrement of $a:".(++$a)."<br>";
echo "   Postdecrement of $b:".($b--)."<br/>";
$a="Sa"; $b=$a."Hil";
echo "h.  String operator: ".($b)."<br/>";
$b="Mehta";
echo "    String operator: ".($b)."<br/>";
$a=array("a"=>"Sa","b"=>"Hil");
$b=array("a"=>"Me","b"=>"hta");
echo "i. Union of both arrays :<br/>";
var_dump($a+$b);
echo"<br/>Both arrays are identical ? :";
var_dump($a==$b);
echo "<br/>";
$a=10;$b=12;
echo $c=$a>$b?5:22;
echo"<br/>";
echo $c="Sa"??"Hil";
?>