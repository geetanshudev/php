<?php

/*local variable = declared insude function or method and cannot be accessed outside the function or method */

function marks(){
	$marks=78;
	echo"this is local variable";
	echo"</br>";
	echo "marks of subject=".$marks;
}
marks();
echo"</br>";
/* global variable = declare outside of function and can be accessed throught the program*/
echo"</br>";
$stud="this is global variable";
function study(){
	global $stud;
	echo"this is global variable";
	echo"</br>";
	echo "variable inside of global function=".$stud;
}
study();  //function declaration//
echo"</br>";
echo "variable outside of global function=".$stud;
echo"</br>";
echo"</br>";

/* static variable = variable that doesn't loose its value*/

function num(){
	static $var=87;
	$var++; //increment//
	echo "static variable number=".$var;
	echo"</br>";
}
num();
num();
num();


?>