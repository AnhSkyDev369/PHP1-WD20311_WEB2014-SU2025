<?php

$name = "Nguyễn Thế Anh";
$_COOKIE['ho_ten'] = $name;
setcookie('ho_ten', $name, time() + 1);
var_dump($_COOKIE['ho_ten']);