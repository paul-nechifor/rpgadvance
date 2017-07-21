<?php 
include "include/header.php";
print_header("Ingetik");
?>

<p>I developed this to use if I want to give information or warn about something without having to say the same thing the same time. Like in online MMORPG games you always get displayed the same messages when you do the same thing. I made this so I could fit something in one string and yet not get the same exact message the same time. I later found out it is very useful for making curses/swears.</p>
<p>This is how it works. All characters outside of '[' and ']' remain the same. The square brackets indicate a choise (example: <em>[a/b/c]</em>). Options are separated by a slash. You can put choices within options to make if more complicated and consume less space. This is an example: <em>[[a/e/[i/y]]/[b/c]/d]</em>.</p>
<p>I&#8217;ll add in a later version the possibility to escape special characters. If you use and/or modified this I wouldn&#8217;t mind if you tell me.</p>
<p>[S&#259; o /Am s&#259; o/ S-o/ O] fut pe [m&#259;-ta/sor-ta/bunic&#259;-ta [/din groap&#259;]] [toat&#259; ziua/&icirc;ntruna/azi/m&acirc;ine] &icirc;n [cur/g&#259;oaz&#259;/pizd&#259;/gur&#259;/limb&#259;/creier/inim&#259;/&#355;&acirc;&#355;e] [dup&#259; care/apoi] o s-o pun s&#259; [&icirc;mi [sug&#259; pula/ling&#259; coaiele/bea sperma]/&icirc;&#355;i [m&#259;n&acirc;nce [pula/c&acirc;catul]/bea [pi&#351;atul/sangele/sperma/slobozi]]] &#351;i apoi s&#259;-&#355;i [scoat&#259; &#355;ie [ficatul/fica&#355;ii/inima/rinichii/creierii] [pe [cur/gur&#259;]/prin [pul&#259;/nas/ureche]]/bage c&acirc;catul ei [pe [cur/gur&#259;]/prin [pul&#259;/nas/ureche]] &#355;ie &icirc;n stomac].</p>
<p><em>Apropo, dac&#259; faci &icirc;njuraturi complicate cu asta, ca &icirc;n exemplul meu te rog s&#259; mi le trimit &#351;i mie ca sa le public aici.</em></p>
<p>Use this form to test your &quot;code&quot;. You can get the <a href="code/ingetik_002.html">ingetik function here</a>.</p>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
	<p align="center">
	<textarea name="text" cols="50" rows="10"></textarea><br />
	<input name="submit" type="submit" />
	</p>
</form>
 
<?php

/*******************************************************************************
                                    INGETIK
================================================================================

    Ingetik is a simple language to compress similar looking phrasez
	
	
    Copyright (C) 2006 An RPG Advancement

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along
    with this program; if not, write to the Free Software Foundation, Inc.,
    51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.

================================================================================

VERSION PROGRESS:
	0.02:
		- added enumeration
		- added
	0.03:
		- added
		- added
		
		
TODO:
	- operatorul de legare decizii @fs@
	- operatorul de despartire decizii $fs$	
	- erorile sa arate unde s-a gresit

*******************************************************************************/

function ingetik($text)
/*
	Function:		str ingetik (str $text)
	Version:		2
	Purpose:		Recursive function that analizes the input string and 
					randomly chooses words to be included
	Created:		2006-08-31 11:13:00+02:00
	Modified:		2006-08-31 21:32:00+02:00	
	Author:			rpgadvance	
	Maintainer:		rpgadvance
*/

{
	$raspuns = '';		// stringul care trebuie intors
	$cuvinte = array();	// cuvintele dintre care trebuie ales
	$cuv = 0;			// indexul cuvantului cu care se lucreaza
	$cauta = false;		// daca se cauta cuvantul curent sau pur si simplu se adauga la raspuns
	$paran = 0; 		// paranteze patrate gasite. pentru '[' se incrementeaza, pentru ']' se decrementeaza
	
	for ($i=0; $i<strlen($text); $i++)
	{
		if ($text[$i] == '[')
		{
			if ($cauta) 
			{
				$paran++;
				$cuvinte[$cuv] .= $text[$i];
			}
			else $cauta = true;
		}
		elseif ($text[$i] == ']')
		{
			if ($cauta)
			{
				if ($paran > 0)
				{
					$paran--;
					$cuvinte[$cuv] .= $text[$i];
				}
				elseif ($paran == 0)
				{
					$raspuns .= ingetik($cuvinte[mt_rand(0,$cuv)]);
					$cauta = false;
					$cuv = 0;
					$cuvinte = array(); 
				}
				else die('Nu are ce cauta "]" aici');
			}
			else die('Nu are ce cauta "]" aici');
		}	
		elseif ($text[$i] == '/')
		{
			if ($cauta) 
			{
				if ($paran == 0) $cuv++;
				else $cuvinte[$cuv] .= $text[$i];
			}
			else die('Nu are ce cauta "/" aici');
		}			
		else
		{
			if ($cauta) $cuvinte[$cuv] .= $text[$i];
			else $raspuns .= $text[$i];
		}
	}

	return $raspuns;	
}

if (isset($_POST['text']))
{
	for ($i=0; $i<100; $i++)
		echo ingetik($_POST['text'])."<br />\n";
}

include "include/footer.php";
?>