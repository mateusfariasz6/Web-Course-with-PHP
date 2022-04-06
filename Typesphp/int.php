<div class="titleExercise">Integer type</div>
<p class="descriptionExercise"> 
<?php
echo 'An integer is a number from the set of integers.</br></br>';
echo 'This is an example of an integer: '. 188 . '</br></br>';
echo 'This is a function in php to show the number type: var_dump(1880): '; 
var_dump(1880);
echo '</br></br>This is the maximum integer allowed in php on an x64 system: ' . PHP_INT_MAX ;
echo '</br></br>This is the minimum integer allowed in php on an x64 system: ' . PHP_INT_MIN ;
$binary = 0b100110110;
$octal  = 0174;
$hex = 0x014ffaa;
echo '</br></br>This is an example of an integer in binary: 0b100110110 : ' . "$binary" ;
echo '</br></br>Here is an example of an integer in octal: 0174 : ' . "$octal" ;
echo '</br></br>Here is an example of an integer in hexadecimal: 0x014ffaa : ' . "$hex" ;



?>
</p>