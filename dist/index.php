<?php
require_once 'include/header.php';
print_header('Main',$_GET['style'], '2006-09-08T14:01:00+02:00');
?>
<div id="title">
	<h2 id="main_title">Main</h2>
</div>
<div class="writing">
	<p class="introduction">Hi, I&#8217;m <strong>Paul</strong> (for more info see the <a href="about_me.php">About me</a> page) and I design web sites as a hobby. I made this site to experiment with CSS and also to post on the web some of the <a href="scripts/index.php">scripts</a> I made in PHP.</p>
	<p>Inspired by the idea at <a href="http://www.csszengarden.com/" title="the Zen of CSS design">CSS Zen Garden</a> I started off by making valid XHTML and linked the pages to CSS designs. This site is the result of hard work and a combination of XHTML, CSS, PHP and Photoshop.</p>
	<p>Unlike CSS Zen Garden I&#8217;ve linked the CSS with more than one page and separated the file in PHP files that I would include on each page so I wouldn&#8217;t have to copy and paste on each page stuff like the header and menu.</p>
	<p>By now I&#8217;ve made these designs:</p>
	<ul>
		<li><a href="index.php?style=blood_wire">Blood Wire</a> (default) - With this design I wanted to make a satanic looking site. I know most satanic sites would just have black background with red text. I made it a bit different, as you can see the main text is actually more orange than red. I still added elements like up site down crosses, blood text, gothic writing and slightly modified cranium as a fixed background.</li>
		<li><a href="index.php?style=ba_chess">B&amp;A Chess</a> -  In this design I made a smooth black &amp; white chess theme. Every thing is smooth and faded. I used only serif fonts and made a CSS only pop up menu. The menu really pops up (not down). BA stands for Black and Alb (romanian: &quot;white&quot;). Somehow I mixed those in my mind when I created the style folder and kept it that way.</li>
	</ul>
	<p>If you notice something wrong on the site, whether it is the CSS, the XHTMLs or just the information on it, I would appreciate reporting that to me (see <a href="contact.php">contact</a> info).</p>
</div>

<?php
require_once 'include/footer.php';
print_footer($_GET['style']);
?>
