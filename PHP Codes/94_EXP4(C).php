<html>
<body>
<?php
$marks = array( "Magnus" => array ( "physics" => 35, "maths" => 30, "chemistry" => 39
),
"Danny" => array ( "physics" => 30, "maths" => 32, "chemistry" => 29 ),
"Molly" => array ( "physics" => 31, "maths" => 22, "chemistry" => 39
)
);
/* Accessing multi-dimensional array values */ echo "Marks for Magnus in physics : " ;
echo $marks['Magnus']['physics'] . "<br />"; echo "Marks for Danny in maths : ";
echo $marks['Danny']['maths'] . "<br />";
echo "Marks for Molly in chemistry : " ;
echo $marks['Molly']['chemistry'] . "<br />"; ?>
</body>
</html>