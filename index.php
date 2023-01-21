<?php
require "user.php";
$user = new User("Peter", "abcde");
$user1 = new User("Alex", "321");
print $user->isValid("Peter", "abcde") ? "Всё верно" : "Пароль или логины не совпадают";
echo "\n";
print $user1->isValid("Alex", "3221") ? "Всё верно" : "Пароль или логины не совпадают";
echo "\n";
echo $user->getLogin() . "\n";
echo $user1->getLogin() . "\n";
