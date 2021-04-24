<?php

$db=new Mysqli;
$db->connect('localhost','root','','crud');

if(!$db){

    echo "success";
}

?>