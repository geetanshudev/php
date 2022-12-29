<?php

/*in this program we have to see different types of operators in php some of the operators are :-
arithmetic operators
relational operators
logical operators
bitwise operators
assignment operators
increment/decrement operators
*/

//arithmetic operator//
$var1 = 11;
$var2 = 7;
echo"sum of two numbers =".$var1+$var2;
echo"</br>";
echo"multiplication of two numbers =".$var1*$var2;
echo"</br>";
echo"difference of two numbers =".$var1-$var2;
echo"</br>";
echo"division of two numbers =".$var1/$var2;
echo"</br>";
echo"remainder of two numbers =".$var1%$var2;
echo"</br>";
echo"power operation of two numbers =".$var1**$var2;
echo"</br>";

//relational operators//
//to compare two numbers who is greater than other//
$a=56;
$b=43;
if($a>$b){
	echo"greater number is=".$a;
}
else{
	echo"greater number is=".$b;
}

?>