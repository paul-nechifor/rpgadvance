<?php 
include "include/header.php";
print_header("Shuffle Letters");

function litera ($l)
{
	$este = false;
	for ($i='a'; $i<='z'; $i++)
		if ($l==$i) $este = true;
	for ($i='A'; $i<='Z'; $i++)
		if ($l==$i) $este = true;
	return $este;			
}
function amesteca ($cuvant)
{	
	if (strlen($cuvant)<4) return $cuvant;
	else
	{
		//Hraneste generatorul o singura data, indiferent de cate ori este "called"
		if (!isset($randinit))
			{
				mt_srand((double) microtime() * 1000000);
				static $randinit = 1;
			}
		$distanta = 3; //distanta poate un caracter sa se mute
		for ($i=1; $i<=strlen($cuvant)-1; $i++)
		{
			while ($i+$distanta > strlen($cuvant)-2) 
				$distanta--;
			$r = mt_rand ($i, $i+$distanta);
			//inlocuieste valorile
			$aux = $cuvant{$i};
			$cuvant{$i} = $cuvant{$r};
			$cuvant{$r} = $aux;		
		}
		return $cuvant;
	}	
}
?>
<p>With this program you can shuffle the letters in a word. If you don't know words can still be understood even if you mix the middle letters. One example would be: &quot; I'm gniog to the ueinvrtsity.&quot;. Try it on large texts!</p>
<form name="amestecare" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
	<div align="center"><textarea name="text" rows="12" cols="90"></textarea>
	<p><input type="submit" name="Amesteca" value="Shuffle" /></p></div>
</form>
<?php
$afara = NULL;
$cuvant = NULL;
print "<br />";
if (isset($_POST['text']))
{
	$text = $_POST['text'].".";
	for ($i=0; $i<strlen($text); $i++)
	{
		if ( litera($text{$i}) ) $cuvant .= $text{$i};
		else 
		{
			$afara .= amesteca ($cuvant) . $text{$i};
			$cuvant = NULL;
		}		
	}
	print "<br /><p>The result is:<br />". $afara . "</p>";
}


include "include/footer.php";
?>