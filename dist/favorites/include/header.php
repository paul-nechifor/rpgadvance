<?php
function print_header($title)
{

$style = 'style01.css';

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title><?=$title?> :: My Favorite Stuff :: An RPG Advancement</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Victor Popescu" />
	<meta name="copyright" content="&copy; 2006 An RPG Advancement" />
	<meta name="description" content="An RPG Advancement is my personal web site where I also place my CSS and XHTML experiments. There are also links to scripts made by me in PHP" />
	<meta name="generator" content="By Bloody Hand" />
	<meta name="editor" content="Dreamweaver 8" />
	<meta name="robots" content="all" />
	<meta name="date" content="2006-07-06T08:49:37+02:00" />
	<link type="text/css" rel="stylesheet" media="screen" href="css/<?=$style?>" />
	<!--<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />-->
	<script language="javascript" src="include/sorttable.js"></script>
</head>
<!-- Hello! Why are you looking at the markup? I hope you don’t have any bad thoughts.

Q: What is small, red and stays in a corner?
A: A baby sucking on a razor blade! -->
<body>
<div id="header">
	<h1>My Favorite Stuff</h1>
</div>
<div id="box">
	<div id="content">
<!-- Start Content --><?php
}
?>