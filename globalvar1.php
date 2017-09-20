<htmL>
<body>

?php

$x=5; //global scope variable declaration

function MyTest ()
{
	echo "<p>Test variables inside the function:</p>";
	echo "Variable x is "$x;
	echo "<br>";
	echo "variabe y is :$y";
}

myTest ();

echo "<p>Test Variable outside the function:</p>;
echo "variable x is $x";
echo "<br>";
echo "Variable Y is $y";

?>

</body>
</html>

