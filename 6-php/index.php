<?php

echo "Hello World\n";

// variables
$name = "Jacob";
echo "My name is $name\n";

$string1 = "This is the first part";
$string2 = " of a sentence";

echo "$string1$string2\n";

$myNumber = 45;

// don't have to be careful about the typ eof the variable
$calculation = $myNumber * 31 / 97 + 4;

echo "The caluclation is ".$calculation."\n";

$myBool = true;

echo "<p>This statment is true? ".$myBool."</p>\n";

$variableName = "name";

echo $$variableName."\n";


// arrays
$myArray = array("Rob", "Jacob", "Tom", "ralph");
print_r($myArray);

echo $myArray[1]."\n";

$anotherArray[0] = "pizza";
$anotherArray[1] = "yoghurt";
$anotherArray[5] = "coffee";
$anotherArray["myFavouriteFood"] = "ice cream";
print_r($anotherArray);

$thirdArray = array(
    "France" => "French", 
    "USA" => "English", 
    "Germany" => "German");

print_r($thirdArray);

echo sizeOf($thirdArray)."\n";

$thirdArray[] = "Katie";

print_r($thirdArray);

unset($thirdArray["France"]);

print_r($thirdArray);

// if statments 
$user = "jacob";

if ($user == "rob") {
    
    echo "Hello Rob!\n";
    
} else {
    echo "I don't know you\n";
}

$age = 25;

if ($age > 18 || $user == "rob") {
    echo "You may proceed\n";
} else {
    echo "Halt!\n";
}

// loops

for ($i = 10; $i >= 0; $i--) {
    echo $i."\n";
}

$family = array("Rob", "Kirsten", "Tommy", "Ralphie");


foreach ($family as $key => $value) {
    $family[$key] = $value." Landman";
    echo "Array item ".$key." is ".$value."\n";
    
}

for ($i = 0; $i < sizeOf($family); $i++) {
    echo $family[$i]."\n";
}

// while loops
$i = 0;
while ($i < 10) {
    echo $i."\n";
    $i++;
}

$i = 0;
while ($i < sizeof($family)) {
    
    echo $family[$i]."\n";
    $i++;
}

$emailTo = "jakeypoolandman7@gmail.com";
$subject = "Test Email";
$body = "I think you're great!";
$headers = "From: jacoblandman.com";

if (mail($emailTo, $subject, $body, $headers)) {
    echo "The email was sent successfully\n";
} else {
    echo "The email could not be sent.\n";
}
?>