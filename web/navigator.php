<?php 
include 'navigatorItem.php';
$items = array(
		new NavigatorItem("home", "Home", "page.php"),
		// new NavigatorItem("events", "Events", "page.php?id=events"),
		// new NavigatorItem("guide", "Fairtrade Guide", "page.php?id=guide"),
		new NavigatorItem("helpout", "How you can help", "page.php?id=helpout"),
		new NavigatorItem("gallery", "Photo gallery", "page.php?id=gallery"),
		new NavigatorItem("about", "About us", "page.php?id=about"),
		new NavigatorItem("contacts", "Contacts", "page.php?id=contacts"),
		new NavigatorItem("links", "Links", "page.php?id=links"),
)
?>
<div id="navbar">
	<img border="0" src="images/FTB.gif" alt="Fairtrade logo" width="150"
		align="center" />
	<ul>
		<?php foreach ($items as $item) {?>
		<li><?= $item->getHtml($id); ?></li>
		<?php }?>
	</ul>
</div>
