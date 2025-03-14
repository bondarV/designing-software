<?php


require './autoload.php';

$example1 = Authenticator::getInstance();
$example2 = DerivedAuthenticator::getInstance();

if ($example1 === $example2) {
    echo "Singleton works, both variables contain the same instance.";
} else {
    echo "Singleton failed, variables contain different instances.";
}
var_dump($example1);
var_dump($example2);