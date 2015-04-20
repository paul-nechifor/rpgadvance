<?php
require_once 'include/header.php';
print_header('Links',$_GET['style'], '2006-09-08T14:01:00+02:00');
?>

<div id="title">
	<h2 id="links_title">Links</h2>
</div>
<div class="writing">
	<p class="introduction">Some sites I think are realy cool and I visit a lot. I will list them by category</p>

	<h3 id="general_sub">General</h3>
	<ul class="list_of_links">
		<li><a href="http://en.wikipedia.org/wiki/Main_Page">Wikipedia</a></li>
		<li><a href="http://php.net/">PHP: Hypertext Preprocessor</a></li>
		<li><a href="http://www.deviantart.com/">deviantART</a></li>
		<li><a href="http://isohunt.com/">isoHunt</a></li>
	</ul>

	<h3 id="atheism_sub">Atheism and Co.</h3>
	<ul class="list_of_links">
		<li><a href="http://www.infidels.org/">The Secular Web</a></li>
		<li><a href="http://www.losingmyreligion.com/">Losing My Religion</a></li>
		<li><a href="http://www.evilatheistconspiracy.org/">The Evil Atheist Conspiracy</a></li>
	</ul>

	<h3 id="music_sub">Music</h3>
	<ul class="list_of_links">
		<li><a href="http://www.bnrmetal.com/">The BNR Metal Pages</a><img src="images/bnr_metal_banner.gif" alt="The BNR Metal Pages" title="The BNR Metal Pages"/></li>
		<li><a href="http://www.last.fm/">last.fm</a></li>
	</ul>

	<h3 id="fun_sub">Fun</h3>
	<ul class="list_of_links">
		<li><a href="http://www.jesusdressup.com/">Jesus Dress Up</a><img src="images/jesus_dress_up_banner.gif" alt="Jesus Dress Up" title="Jesus Dress Up"/></li>
		<li><a href="http://www.normalbobsmith.com/">Normal Bob Smith</a><img src="images/normal_bob_smith_banner.gif" alt="Normal Bob Smith" title="Normal Bob Smith"/></li>
		<li><a href="http://www.normalbobsmith.com/satanssalvation/">Satan's Salvation</a><img src="images/satans_salvation_banner.gif" alt="Satan's Salvation" title="Satan's Salvation"/></li>
		<li><a href="http://www.landoverbaptist.org/news0104/ps2.html">Accept Jesus Christ and Get a Free PlayStation 2!</a></li>
		<li><a href="http://www.godlessgeeks.com/LINKS/GodProof.htm">Over Three Hundred Proofs of God&#8217;s Existence</a></li>
		<li><a href="http://fuck-the-skull-of-jesus.mit.edu/">Fuck the skull of Jesus</a> (over at MIT)</li>
		<li><a href="http://www.gusworld.com.au/nrc/thesis/intro.htm">How to do things with four-letter words</a> (you must find time to read it all)</li>
		<li><a href="http://www.theonion.com/content/node/29540?issue=4227&special=1999">Christ Converts To Islam</a> (if it&#8217;s a newspaper it must be true)</li>
	</ul>

	<h3 id="software_sub">Software</h3>
	<ul class="list_of_links">
		<li><a href="http://fedora.redhat.com/">Fedora Core</a></li>
		<li><a href="http://www.mozilla.com/firefox/">Mozilla Firefox</a></li>
		<li><a href="http://freemind.sourceforge.net/wiki/index.php/Main_Page">FreeMind</a></li>
		<li><a href="http://www.utorrent.com/">&micro;Torrent</a></li>
	</ul>
</div>

<?php
require_once 'include/footer.php';
print_footer($_GET['style']);
?>
