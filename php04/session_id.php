<?php

session_start();
$id = session_id();
$_SESSION["name"]="test";
echo $id;

?>
