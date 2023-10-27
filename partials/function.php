<?php
//Generatore di Password
function randomPswGen($numSelected) {
  /* DATA */
  $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_-+=[]{}|<>?';
  $passwordLength = $numSelected;
  $password = '';
  $usedChars = array();

  for ($i = 0; $i < $passwordLength; $i++) {
      //Genero caratteri finchè non ne genero uno che
      //non è contenuto in $usedChars
      do { 
          $randomChar = $characters[rand(0, strlen($characters) - 1)];
                        /* cosa cerco   dove */
      } while (in_array($randomChar, $usedChars));

      //Push
      $usedChars[] = $randomChar;
      $password .= $randomChar;
  }

  return $password;
}
