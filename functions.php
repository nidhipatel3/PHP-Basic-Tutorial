<?php

//for length
echo strlen("hello welcome");
echo '<br>';

//for word count
echo str_word_count("how are you?");
echo '<br>';

//for reverse string
echo strrev("welcome");
echo '<br>';

//for character position
echo strpos("welcome to php", "php");
echo '<br>';

//for replace string
echo str_replace("php", "java", "php programming");
echo '<br>';

//user define function
function cal($x,$y)
{
	$add = $x + $y;
	echo "answer is:". $add;
}

cal(10,20);

echo '<br>';

function square($x)
{
	$sq = $x * $x;
	echo "square is:". $sq;
}

square(3);

?>