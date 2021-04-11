<?php

// When reading data from serial port with PHP
// our functions we will use

function rs232init($com,$bautrate)
 {
 `mode $com: BAUD=$bautrate PARITY=N data=8 stop=1 xon=off`;
 }

function send($comport,$char)
 {
$fp = fopen ("$comport", "w+");
 if (!$fp)
 {
 echo "not open for read";
 }
 else {
 fputs ($fp, $char);
 fclose ($fp);
 }
 }
function read($comport2,$sek)
 {
$buffer = "";
$fp2 = fopen ("$comport2", "r+");
 if (!$fp2)
 {
 echo "port is open for read";
 }
 else
 {
 sleep($sek);
 $buffer .= fgets($fp2, 4096);
 }
 return $buffer;
 fclose ($fp2);
}

rs232init("com3","9600"); // Port name ("com3")
//and BaudRate("9600") we are entering.

send("com3","3");

$a = read("com3","2"); //Serial to our port ("com3") connected
//we read data from your device.

echo $a; // We Print on the Screen

?>
