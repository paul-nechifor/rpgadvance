<?php
require_once 'include/header.php';
print_header('Contact',$_GET['style'], '2006-09-08T14:01:00+02:00');
?>

<div id="title">
	<h2 id="contact_title">Contact</h2>
</div>
<div class="writing">
	<p class="introduction">I probably should have merged this with the <a href="about_me.php">About me</a> page, but what the heck.</p>
	<p>This is where you can contact me:</p>
	<div class="enum">
		<p><span class="q">Email:</span> <span class="a">paul at nechifor dot net</span> (2014 edit: changed to current address)</p>
	</div>
	<p>By writing it literally you&#8217;d expect that I get a lot of junk mail... I do get a few, but not from spiders stealing my email from &quot;mailto&quot; links.
</p>
</div>

<?php
require_once 'include/footer.php';
print_footer($_GET['style']);
?>
