<?php
session_start(); 
$name = "Nguyễn Thế Anh";
$_SESSION['ho_ten'] = $name;
var_dump($_SESSION['ho_ten']);