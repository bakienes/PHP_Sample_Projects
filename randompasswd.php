<?php
function sifreureteci(){
 $karakterler = "1234567890abcdefghijKLMNOPQRSTuvwxyzABCDEFGHIJklmnopqrstUVWXYZ0987654321";
 $sifre = '';
 for($i=0;$i<8;$i++)                    //The number of characters of the password to be created is 8.
 {
  $sifre .= $karakterler{rand() % 72};    //The first 72 characters from the string of characters will be used, ie all.
 }
 return $sifre;                            //The generated password is being sent.
}
echo $sifre=sifreureteci();
?>
