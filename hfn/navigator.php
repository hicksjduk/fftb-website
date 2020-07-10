<?php 
include 'navigatorItem.php';
$items = array(
		new NavigatorItem("home", "Home", "page.php"),
		new NavigatorItem("about", "About us", "page.php?id=about"),
		new NavigatorItem("contacts", "Contacts", "page.php?id=contacts"),
		new NavigatorItem("diary", "Diary", "page.php?id=diary"),
//		new NavigatorItem("resources", "Resources", "page.php?id=resources"),
		new NavigatorItem("documents", "Documents", "page.php?id=documents"),
		new NavigatorItem("links", "Links", "page.php?id=links"),
)
?>
<div id="navbar">
	<img border="0" src="images/hfnlogo.jpg" width="120" height="50">
	<ul>
		<?php foreach ($items as $item) {?>
		<li><?= $item->getHtml($id); ?></li>
		<?php }?>
	</ul>
</div>