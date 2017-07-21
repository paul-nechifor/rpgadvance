<?php
require_once 'include/header.php';
print_header('About Me', $_GET['style'], '2006-09-08T14:01:00+02:00');
?>

<div id="title">
	<h2 id="about_me_title">About Me</h2>
</div>
<div class="writing">
	<p class="introduction">Some information about me</p>

	<h3 id="presentation_sub">Presentation</h3>
	<p>I am just a normal seventeen-year old from <a href="http://en.wikipedia.org/wiki/Romania" title="Ah... the Eternal and Fascinating Romania.">Romania</a> with much interests in computers. I&#8217;m always fighting with my past self.</p>
	<div class="enum">
		<p><span class="q">Name:</span> <span class="a">Paul Nechifor</span></p>
		<p><span class="q">Date of birth:</span> <span class="a">1989</span></p>
		<p><span class="q">Eye color:</span> <span class="a">Green</span></p>
		<p><span class="q">Country:</span> <span class="a">Romania</span></p>
		<p><span class="q">City:</span> <span class="a"><a href="http://en.wikipedia.org/wiki/Iasi">Ia&#351;i</a></span></p>
	</div>

	<h3 id="questions_sub">Questions</h3>

	<p class="question">Why have I made this site?</p>
	<p>I made this site so that I discover more about me, to organize what I don&#8217;t know about me and meet other people with the same interests</p>

	<p class="question">Interests:</p>
	<p>Computers, Programming (C/C++, PHP, Object Pascal, Prolog), Web design (XHTML, CSS), GNU/Linux , Metal subgenres (Black, Death, Symphonic, Gothic, Doom ), Rock subgenres (Grunge, Psychedelic, Rap-Rock, Progressive, Alternative) Logic, Psychology, Atheism, RPG games, Chess</p>

	<h3 id="quotes_sub">Quotes</h3>
	<p><q>Nobody realizes that some people expend tremendous energy merely to be normal.</q> - <strong>Albert Camus</strong></p>
	<p><q>Reason was given to all men, but not all know how to use it</q> - <strong>Eliphas Levi</strong></p>
	<p><q>C programmers don&#8217;t die. They get cast into void.</q></p>
	<p><q>For whatever the tortures of hell, I think the boredom of heaven would be even worse.</q> - <strong>Isaac Asimov</strong></p>
	<p><q>Denial ain&#8217;t just a river in Egypt.</q> - <strong>Mark Twain</strong></p>
	<p><q>Have no fear of perfection. You will never reach it.</q> - <strong>Salvador Dal&iacute;</strong></p>
	<p><q>I contend that we are both atheists. I just believe in one fewer god than you do. When you understand why you dismiss all the other possible gods, you will understand why I dismiss yours</q> - <strong>Stephen Roberts</strong></p>

	<h3 id="signatures_sub">Signatures</h3>
	<p>These are some of the signatures I use on forums an other sites.</p>
	<p><q>There are only 10 types of people in the world. Those who understand binary and those who don't.</q></p>
	<p><q>Abandon all hope ye who enter</q></p>
	<p><q>A fish thinks about it&#8217;s hunger not about the fisherman</q> (<a href="http://www.imdb.com/title/tt0071615/">The Holy Mountain</a>)</p>
	<p><q>Heaven and Hell were lies / No salvation, no forgiveness</q></p>
	<p><q>I will crawl away from god...</q></p>

	<h3 id="like_sub">What I like</h3>
	<ul>
		<li>List of Bands</li>
		<li>List of Books</li>
		<li>List of Shows and Series</li>
		<li><a href="favorites/topfilms.php">Top Films</a></li>
		<li>Top Music Albums</li>
		<li>... and I like cats</li>
	</ul>

	<h3 id="hate_sub">What I hate</h3>
	<ul>
		<li>...</li>
	</ul>

	<span style="margin:0 auto;"><a href="http://homokaasu.org/gematriculator/?referer" target="_blank"><img src="http://homokaasu.org/pics/g/e71.jpg" width="175" height="80" alt="This site is certified 71% EVIL by the Gematriculator" /></a></span>
</div>

<?php
require_once 'include/footer.php';
print_footer($_GET['style']);
?>
