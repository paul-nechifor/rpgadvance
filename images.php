<?php
require_once 'include/header.php';
print_header('Images',$_GET['style'], '2006-09-08T14:01:00+02:00');
?>
<div id="title">
	<h2 id="images_title">Images</h2>
</div>
<div class="writing">
	<p class="introduction">My favorite images on the internet. A few by me and a lot by others (mostly from <a href="http://www.deviantart.com/" title="a popular online artistic community with over 23 million submissions">deviantART</a>).</p>
	<h3 id="me_sub">By me</h3>
		<p>I&#8217;ve made images/wallpapers before but I want to put those behind me and only post my new works.</p>
	<h3 id="others_sub">By others</h3>
	<div class="image">
		<span class="name">Faceache</span>
		<span class="author"><a href="http://zilla774.deviantart.com/">zilla774</a></span>
		<a href="http://www.deviantart.com/view/26598825/"><img src="galery/Faceache_by_zilla774.jpg" alt="Faceache by zilla774" /></a>
	</div>
	<div class="image">
		<span class="name">Puppetmaster</span>
		<span class="author"><a href="http://zilla774.deviantart.com/">zilla774</a></span>
		<a href="http://www.deviantart.com/view/29936698/"><img src="galery/Puppetmaster_by_zilla774.jpg" alt="Puppetmaster by zilla774" /></a>
	</div>
	<div class="image">
		<span class="name">Le souffle de la mort</span>
		<span class="author"><a href="http://rosabella.deviantart.com/">rosabella</a></span>
		<a href="http://www.deviantart.com/view/33324001/"><img src="galery/Le_souffle_de_la_mort_by_rosabella.jpg" alt="Le souffle de la mort by rosabella" /></a>
	</div>
	<div class="image">
		<span class="name">Through the Looking Glass</span>
		<span class="author"><a href="http://soulcatcher78.deviantart.com/">SoulCatcher78</a></span>
		<a href="http://www.deviantart.com/view/32526394/"><img src="galery/Through_the_Looking_Glass_by_SoulCatcher78.jpg" alt="Through the Looking Glass by SoulCatcher78" /></a>
	</div>
</div>

<?php
require_once 'include/footer.php';
print_footer($_GET['style']);
?>
