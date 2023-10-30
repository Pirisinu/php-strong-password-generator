<?php
//Generatore di Password
function randomPswGen($numSelected) {
  /* DATA */
  $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_-+=[]{}|<>?';
  $password = '';
  $usedChars = array();

  for ($i = 0; $i < $numSelected; $i++) {
      //Genero caratteri finchè non ne genero uno che
      //non è contenuto in $usedChars
      while (in_array($randomChar, $usedChars)) {
        $randomChar = $characters[rand(0, strlen($characters) - 1)];
      }
      //push while
      $usedChars[] = $randomChar;
      $password .= $randomChar;
  }

  return $password;
}
