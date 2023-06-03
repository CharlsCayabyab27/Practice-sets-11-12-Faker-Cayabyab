<?php

require_once 'vendor/autoload.php'; 

$faker = Faker\Factory::create('en_PH');

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'fakers';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn)
{   
die(mysqli_error());
}  


for ($i = 0; $i < 20; $i++) {

    $creditCardType = $faker->creditCardType;
    $creditCardNumber ="".$faker->ean13;
    $creditCardExpirationDate = $faker->date($format = 'Y-m-d H:i:s', $max = 'now');
    $userIdNumber = $faker->numberBetween(1, 100);

    $sql = "INSERT INTO cardDetail (creditCardType, creditCardNumber, creditCardExpirationDate, userIdNumber) VALUES ( $creditCardType, $creditCardNumber, $creditCardExpirationDate, $userIdNumber)";

    
}