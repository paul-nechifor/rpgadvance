<?php
function print_footer($style)
{
	if (!isset($style)) $style = 'blood_wire';
?>
	</div>
	<div id="menu">
		<div id="link_list">Menu List</div>
		<ul>
			<li><a href="index.php?style=<?=$style?>" id="main"><span class="hide">Main Page</span></a></li>
			<li><a href="about_me.php?style=<?=$style?>" id="about_me"><span class="hide">About me</span></a></li>
			<li><a href="http://010n001n111.blogspot.com" id="blog"><span class="hide">Blog</span></a></li>
			<li><a href="contact.php?style=<?=$style?>" id="contact"><span class="hide">Contact</span></a></li>
			<li><a href="sites.php?style=<?=$style?>" id="sites"><span class="hide">Sites</span></a></li>
			<li><a href="images.php?style=<?=$style?>" id="images"><span class="hide">Images</span></a></li>
			<li><a href="links.php?style=<?=$style?>" id="links"><span class="hide">Links</span></a></li>
		</ul>
	</div>
</div>
<div id="footer">
	<div id="copyright">
		Copyright &copy; 2006 <em>An RPG Advancement</em>
	</div>
</div>
</body>
</html><?php
}
?>
