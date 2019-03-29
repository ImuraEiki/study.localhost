<?php

$var = 1;

var_dump(isset($var));
var_dump(isset($var1));

$var_name = 'var';
echo $$var_name;

?>

<!-- issetは変数に値が入っていればtrueを返す -->

<!-- $$varname == $var == 1って感じ -->