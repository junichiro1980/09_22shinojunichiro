<?php
session_start();
$_SESSION["i"]+=1;
echo $_SESSION["i"];

?>