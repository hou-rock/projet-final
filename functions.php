<?php

if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');

function checkEmail($str) 
{
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $str);
}
?>