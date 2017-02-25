<?php
session_start();
require_once "config.php";

function selengkapnya($artikel)
{
	if(strlen($artikel) > 500)
	{
		$pendek = substr($artikel, 0, 500);
		$artikel = substr($pendek, 0, strrpos($pendek, " "));
		return $artikel ;
	}
}

?>