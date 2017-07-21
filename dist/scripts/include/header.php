<?php
function print_header ($title)
{
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$title?> :: An RPG Advancement Scripts</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="copyright" content="&copy; 2006 An RPG Advancement" />
	<meta name="description" content="Scripts made by An RPG Advancement" />
	<meta name="generator" content="By Bloody Hand" />
	<meta name="editor" content="Dreamweaver 8" />
	<meta name="robots" content="all" />
	<meta name="date" content="2006-07-06T08:49:37+02:00" />
	<link type="text/css" rel="stylesheet" media="screen" href="include/style.css"/>
</head>
<body>

<div id="box1">
	<div id="box2">
		<div id="header">
		</div>

		<div id="menu">
			<div id="menu_holder">
				<ul>
					<li><a href="name_generator.php">Name generator</a></li>
					<li><a href="shuffle_letters.php">Shuffle Letters</a></li>
					<li><a href="ingetik.php">Ingetik</a></li>
					<li><a href="obfuscated.php">Obfuscated</a></li>
				</ul>
			</div>
		</div>

		<div id="content">
			<div id="title"><?=$title?></div>
<!-- Content Start-->
<?php
}
?>
