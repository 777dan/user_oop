<?php
require "user.php";
$user = new User();
$user->setLogin("Peter");
$user->setPassword("abcde");
echo $user->getLogin()."\n";
if ($user->isValid()) echo "Пароль и логин совпадают";
if (!$user->isValid()) echo "Пароль или логин не совпадает";