<?php
include "php_serial.class.php"; // Adding Our Class File
$serial = new phpSerial; // We define our class.
$serial->deviceSet("COM3"); // We Write the Port Number to Send Data "COM3"
$serial->confBaudRate(9600); // We're writing our Baud Rate "9600"
$serial->confParity("none");
$serial->confCharacterLength(8); // We Define the Length of the Data We Will Send "8 bits"
$serial->confStopBits(1); // We Define the Minimum Bit Length "1 Bit"
$serial->confFlowControl("none");
$serial->deviceOpen(); // We Open Our Link
$serial->sendMessage(); // We Send A Blank Message From Your Serial Connection
$serial->sendMessage("K"); // We Send "K" Message To Our Serial Connection
$serial->deviceClose(); // We Close Our Connection.
// NOTE: To Send Any Character Over Serial
// Your device must read the data sent from Serial in "Char" data type.
?>
