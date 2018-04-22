<?php
date_default_timezone_set('Asia/Jakarta');
error_reporting(E_ALL);

/*
Comments in PHP
	A comment in PHP code is a line that is not read/executed as part of the program. Its only purpose is to be read by someone who is looking at the code.

Comments can be used to:

	Let others understand what you are doing
	Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code

PHP supports several ways of commenting:
 */

// This is a single-line comment <--- inline comment

# This is also a single-line comment <--- inline comment like C, C++

/* 										---
This is a multiple-lines comment block 	  | Block comments
that spans over multiple 				  |
lines 								    ---
*/

/**
 * This is a new Class for my Application Library
 */
class CoreAPI
{
	protected $array_data = []; // this is a property or array data
	public $name;

	/**
	 * Core Setting Application
	 * @param  array  $data This param must be an array to passing in core settings
	 * @return array
	 */
	public function settings(array $data)
	{
		return $this->array_data = $data;
	}
}

// Case Sensitif

// $hobby = 'Hiking';

// echo "My Hobby is " . $hobby ."<br>";
// echo "My Hobby is " . $HOBBY;

// $x = 5; // global scope
 
// function myTest() {
//     // using x inside this function will generate an error
//     echo "<p>Variable x inside function is: $x</p>";
// } 
// myTest();

// echo "<p>Variable x outside function is: $x</p>";

// Type data Object
$object = file_get_contents('data.json');
$integer = 21;
$string = 'Hello World $boolean';
$boolean = false;
$null = null;

$coreAPI = new CoreAPI();
$coreAPI->name = 'web';
// $x = "Hello world! $boolean";
// $x = null;

$hello = addslashes("What does 'yolo' mean?");

define("GREETING", "Welcome to W3Schools.com!");

$x = 5;
$y = 3;

$greeting = 'Hello, World';

$name = [
	'Harpani',
	'Imam',
	'Ratna'
];

$t = date("H");

// if ($t >= "18" && $t <= "24") {
//     echo "Selamat Malam";
// } elseif ($t >= "14" && $t <= "18") {
// 	echo "Selamat Sore";
// } elseif ($t >= "11" && $t <= "14") {
// 	echo "Selamat Siang";
// } else {
// 	echo "Selamat Pagi";
// }

// switch ($t) {
// 	case $t >= "18" && $t <= "24":
// 		echo "Selamat Malam";
// 		break;
// 	case $t >= "14" && $t <= "18":
// 		echo "Selamat Sore";
// 		break;
// 	case $t >= "11" && $t <= "14":
// 		echo "Selamat Siang";
// 		break;
// 	default:
// 		echo "Selamat Siang";
// 		break;
// }

function tanyaJam($t='')
{
	if ($t == '') {
		echo "Hai user, lu ga kasih gua parameter!";
		exit;
	}

	if ($t >= "18" && $t <= "24") {
	    echo "Selamat Malam sekarang jam " . date('H:i');
	} elseif ($t >= "14" && $t <= "18") {
		echo "Selamat Sore sekarang jam " . date('H:i');
	} elseif ($t >= "11" && $t <= "14") {
		echo "Selamat Siang sekarang jam " . date('H:i');
	} else {
		echo "Selamat Pagi sekarang jam " . date('H:i');
	}
}

echo "<pre>";
print_r($_SERVER);