<?php

// Heading
echo "<br><center><h1>Experiment 1</h1></center>";

// For string operators
$str1="Hello";
$str2=" World";

// For array operators
$arr1=array("index","array");
$arr2=array("associative"=>"array");

// For other operators
$a=10;
$b=5;

// a.
echo "Welcome to PHP"; echo "<br><br>";
// b.
echo "The addition of a and b is ".($a+$b)."."; echo "<br>The division of 10 and 5 is ".($a/$b).".";

echo "<br><br>";

// c.
echo "The value stored in a is ".(10>5?"greater":"less")." than b."; echo "<br>The value stored in a is
".(10!=="10"?"not":"")." identical to the string
\"10\".";

echo "<br><br>";

// d.
echo (($a==0or$b==0)?"E":"Ne")."ither a or b is 0. <br>";
if($a!=0 and $b!=0) echo "Both a and b are not 0.";

echo "<br><br>";
// e.
echo "Left shifting a by 1 we get: ".($a<<1)."."; echo "<br>Right shifting a by 2 we get: ".($a>>2).".";

echo "<br><br>";

// f.
echo "Adding b to a we get ".($a+=$b).".<br>"; echo "Subracting b from a we get ".($a-=$b).".";

echo "<br><br>";

// g.
echo "Using pre-increment operator on a, we get ".(++$a).".<br>";
echo "Using post-decrement operator on b, we get ".($b--).".";

echo "<br><br>";

// h.
echo "Using string concatenation operator on
\$str1 and \$str2, we get: ".$str1.$str2."<br>";
$str2.=$str1;
echo "Adding \$str1 to \$str2, printing \$str2:
$str2";

echo "<br><br>";

// i.
echo "Displaying union of \$arr1 and \$arr2:"; var_dump($arr1+$arr2);
echo ".<br>\$arr1 is ".(($arr1==$arr2)?:"not")." equal to \$arr2".".";

echo "<br><br>";

// j.
echo "Between $a and $b, ".($a>$b?$a:$b)." is greater.<br>";
$a = NULL;
$a = $a ?? 999; echo $a;
?>
