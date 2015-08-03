<?php

$urls = explode("\n", file_get_contents('sites-check/google-result.txt'));

$padding = 120;
$counter = 0;
foreach ($urls as $url)
{
	if ( !@file_get_contents($url) and !@file_get_contents($url) )
	{
		echo "\n";
		echo str_pad($counter . ' - ' . $url, $padding, ' ');
		echo 'ERROR';
	}
	else
	{
		echo "\n";
		echo str_pad($counter . ' - ' . $url, $padding, ' ');
		echo 'WORKING';
	}
	
	flush();
	++$counter;
}
echo "\n";
