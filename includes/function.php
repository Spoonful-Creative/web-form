<?php
//ALL your functions will go inside here
































function dd($data)
{
die(var_dump($data));
}


//These do the same function
// function escape($value)
// {
// 	return e($value);
// }
//
function e($value)
{
	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}