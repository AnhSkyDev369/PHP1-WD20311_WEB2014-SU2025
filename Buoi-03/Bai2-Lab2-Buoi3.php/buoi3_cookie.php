<?php

$name1 = "Nguyễn Thế Anh";

$_COOKIE['ho_ten'] = $name1;

setcookie('ho_ten', $name1, time() + 1);

var_dump($_COOKIE['ho_ten']);