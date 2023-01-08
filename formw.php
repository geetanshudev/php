<!doctype html>
<html>


		<!--this is a simple & basic front-end and back-end program in which it takes detail from user and save it into text file with the name of "registration_form.txt"-->


<head>
<title>registration form </title>
</head>
<body>
	<h1 align="center"> <font color="blue"  face="verdana" align = "center"> <u> Registration form </u> </font> </h1>
	<hr color="orange ">
	<marquee direction="left"> this is testing website please dont enter your personal detail </marquee>
	<hr color="orange">
	<table border ="2" align = "center" height = "400" width = "600">
	<form>
	<tr>
		<td> First name : <input type="text" name="firstname"></td>
	</tr>

	<tr>
		<td> Last name : <input type="text" name="lastname"></td>
	</tr>

	<tr>
		<td> Gender : <input type="radio" name="gender">male
			<input type="radio" name="gender">female
			<input type="radio" name="gender">other
		</td>
	</tr>

	<tr>
	<td> Email: <input type="email" name="email"></td>
	</tr>
	
	<tr>
	<td> Phone number: <input type="tel" name="phonenumber">
	</tr>
	
	<tr>
	<td> Date of birth : <input type="date" name="dob"> </td>
	</tr>

	<tr>
		<td> Language : <input type="checkbox" name="language">Hindi
			<input type="checkbox" name="language">English
			<input type="checkbox" name="language">other
		</td>
	</tr>
	<tr>
		<td> what your favourite coding language : 
		<select name="coding">
		<option>   </option>
		<option>C </option>
		<option>C++ </option>
		<option>Python</option>
		<option>Java</option>
		<option> None of these </option>
		</select>
		</td>
	</tr>

	<tr>
		<td> what is your favourite sports?<br>
		<select name="sports">
		<option>         </option>
		<option> cricket </option>
		<option> football </option>
		<option> basketball </option>
		<option> badminton </option>
		<option> tennis </option>
		<option> jaw run </option>
		<option> disk throw </option>
		<option> kabaddi </option>
		<option> hockey </option>
		<option> None of these </option>
		</select>
		</td>
	</tr>

	

	<tr>
	<td> 
	<button> send </button>
	</td>
	</tr>

<tr>
	<td> 
	<button>clear </button>
	</td>
	</tr>

	</form>	
	</table>

</body>
</html>

<?php

extract($_REQUEST);
$file = fopen("registration_form.txt","a");
fwrite($file,"first name :");
fwrite($file,$firstname."\n");
fwrite($file,"last name :");
fwrite($file,$lastname."\n");
fwrite($file,"gender :");
fwrite($file,$gender."\n");
fwrite($file,"email id :");
fwrite($file,$email."\n");
fwrite($file,"phone number :");
fwrite($file,$phonenumber."\n");
fwrite($file,"DOB :");
fwrite($file,$dob."\n");
fwrite($file,"language :");
fwrite($file,$language."\n");
fwrite($file,"coding language :");
fwrite($file,$coding."\n");
fwrite($file,"sport :");
fwrite($file,$sports."\n");
fwrite($file,"=========================================================\n");
fclose($file);
?>