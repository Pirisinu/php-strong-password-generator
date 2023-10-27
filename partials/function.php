<?php
//Generatore di Password
function randomPswGen($numSelected){
  /* data */
  $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $lowercase = 'abcdefghijklmnopqrstuvwxyz';
  $numbers = '0123456789';
  $specialChars = '!@#$%^&*()_-+=[]{}|<>?';
  $allChars = $uppercase . $lowercase . $numbers . $specialChars;
  /* Passwold base */
  $password = '';
  /* Password base set*/
  $password .= $uppercase[rand(0,strlen($uppercase)-1)];
  $password .= $lowercase[rand(0,strlen($lowercase)-1)];
  $password .= $numbers[rand(0,strlen($numbers)-1)];
  $password .= $specialChars[rand(0,strlen($specialChars)-1)];
  /* Password restante */
  for($i = 0; $i < ($numSelected - 4); $i++) {
    $randomChar = rand(0, strlen($allChars)-1);
    $password .= $allChars[$randomChar];
  }
  return $password;
}