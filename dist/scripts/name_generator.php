<?php
include "include/header.php";
print_header("Name Generator 0.5");

#=================================================================#
#   DENUMIRE:       Generator de nume                             #
#   VERSIUNE:       0.5                                           #
#   AUTOR:          Victor P. <rpg.advancement@gmail.com>         #
#   TERMINARE:      2006-09-05 23:27 +02:00                       #
#   LICENTA:        GPL                                           #
#   COMENTARIU:     Un program care sa genereze un nume (defapt   #
#                   mai multe) de genul celor care se  folosesc   #
#                   in jocurile RPG.                              #
#=================================================================#

/*
SCHIMBARI:
Versiunea 0.2:
	-
Versiunea 0.3:
	-vocalele si consoarele sunt string in loc de vector de caractere (duh!!)
Versiunea 0.4:
	-CSS Style
	-numar de denumiri sa fie generate
Versiunea 0.5:
	-updated it to fit my scripts site
	-made the litera_aleatoare() function use english letter frequency


VIITOR:
	-POSIBLILITATEA DE A ALEGE ALTA FRECVENTA A LITERELOR
	-o conditie care sa dubleze o litera (ex din Fibonaci in Fibonacci)
	-sa accepte input variabil
*/

define ('MAX_LITERE', 10);
define ('MIN_LITERE', 3);
define ('CONS_IN_SIL', 2);
define ('CU_APOSTROF', true);
$con_size = 4000;
$voc_size = 600;


$consoane = array (
'b' => 1.492,
'c' => 2.782,
'd' => 4.253,
'f' => 2.228,
'g' => 2.015,
'h' => 6.094,
'j' => 0.153,
'k' => 0.772,
'l' => 4.025,
'm' => 2.406,
'n' => 6.749,
'p' => 1.929,
'q' => 0.095,
'r' => 5.987,
's' => 6.327,
't' => 9.056,
'v' => 0.978,
'w' => 2.360,
'x' => 0.150,
'z' => 0.074 );

$vocale = array (
'a' => 8.167,
'e' => 12.702,
'i' => 6.966,
'o' => 7.507,
'u' => 2.758,
'y' => 1.974 );

$con_set=''; $voc_set='';
$con_sum = 0; $voc_sum = 0;
foreach ($consoane as $c) $con_sum += $c;
foreach ($vocale as $v) $voc_sum += $v;
foreach ($consoane as $key => $val)
{
	$nr = (int)($con_size*$val)/$con_sum;
	for ($i=0; $i<$nr; $i++)
		$con_set .= $key;
}
foreach ($vocale as $key => $val)
{
	$nr = (int)($voc_size*$val)/$voc_sum;
	for ($i=0; $i<$nr; $i++)
		$voc_set .= $key;
}

$con_set = str_shuffle($con_set);
$voc_set = str_shuffle($voc_set);

function litera_aleatoare ($set)
{
	global $con_set,$voc_set;
	if ($set=='con') return $con_set[mt_rand(0, strlen($con_set)-1)];
	else return $voc_set[mt_rand(0, strlen($voc_set)-1)];
}
function silaba_aleatoare()
{

	$silaba = '';
	$cons = mt_rand (0, CONS_IN_SIL );
	for ($i=0; $i<$cons; $i++)
		$silaba .= litera_aleatoare('con');
	$silaba .= litera_aleatoare('voc');
	str_shuffle($silaba);
	return $silaba;	
}
function nume_aleator()
{
	//procentul de probabilitate.
	$sansa = array ( 1 => 5,   2 => 15,   3 => 31,   4 => 20,
	                 5 => 15,  6 => 9,    7 => 4,    8 => 1   ); 			
	$procent = mt_rand (1, 100);
	$suma = 0;
	for ($i=1; $i<=count($sansa); $i++)
		if ( $procent <= ($suma += $sansa[$i]) ) 
		{
			$silabe = $i;
			break;
		}
	$apostrof = false;
	$cuvant = '';
	for ($i=0; $i<$silabe; $i++)
	{
		$cuvant .= silaba_aleatoare();
		//daca este singurul si nu este la prima silaba, dar nici ultima. Are sansa 1 din 10
		if ( CU_APOSTROF && !$apostrof && $i+1 < $silabe && $i>1 && (mt_rand (1,10) == 9) )
		{
			$cuvant .= "'";
			$apostrof = true;
		}	
	}	
	$cuvant = ucfirst($cuvant);
	return  $cuvant;
}
function valid($nume)
{
	$valid = true;
	if (strlen($nume) < MIN_LITERE) $valid = false;
	elseif (strlen ($nume) > MAX_LITERE) $valid = false;
	return $valid;
}
function nume($nr)
{
	echo '<ul>';
	for ($i=0; $i<$nr; $i++)
	{
		$nume = '';
		do
		{
			$nume = nume_aleator();
		} 
		while (!valid($nume));
		echo "<li>$nume</li>";
	}	
	echo '<ul>';
}

?>
<p>This script generates names to be used as unique ids or handles for sites or RPG games. It will probably not generate a name that you like, so enter in the box below how many names you want to be generated. I do know it's not a very good name generator and I will try to improve it. It currently uses only english letter frequency. I'll add other posibilities later.</p>


<form name="names" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
	<p>Number of names: <input type="text" name="nr" value="100" />&nbsp;&nbsp;&nbsp;
	<input type="submit" name="submit" value="Generate" /></p>
</form>
<?php
if (isset($_POST['nr']))
{
	$nr = $_POST['nr'];
	if ($nr<20 || $nr>4000) echo '<p><strong>Error:</strong> Only between 20 and 4000.</p>';
	else
	{
		echo '<table align="center" border="0" cellpadding="0" cellspacing="0" width="600"><tr>';
		for ($i=0; $i<4; $i++)
		{
			echo '<td width="150">';
			nume(ceil($nr/4));
			echo '</td>';
		}	
		echo '</tr></table>';
	}	
}
?>


<?php
include "include/footer.php";
?>




