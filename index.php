<?php

require_once 'vendor/autoload.php'; 

$faker = Faker\Factory::create();

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'fakers';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn)
{   
die(mysqli_error());
}  

for ($i = 0; $i < 100; $i++) {
    $email = $faker->unique()->email;
    $lastName = $faker->lastName;
    $firstName = $faker->firstName;
    $userName = $faker->userName;
    $password = $faker->password;
    $sql = "INSERT INTO userAccount (email, lastName, firstName, userName, password) VALUES ($email, $lastName, $firstName, $userName, $password)";
  
}
