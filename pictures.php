<div id="pictures">
	<p id="thumbnails">
		<?php foreach ($pictures as $pic) {?>
		<img hspace="5" vspace="5" src="<?= $pic->address() ?>" width="60"
			height="60" alt="<?= $pic->text() ?>" 
			onClick="<?= $pic->clickAction() ?>" />
		<?php }?>
	</p>
	<table id="picturetab">
		<caption>
			<?= $pictures[0]->text() ?>
		</caption>
		<tr>
			<td><img name="picture" src="<?= $pictures[0]->address() ?>"
				alt="<?= $pictures[0]->text() ?>" /></td>
		</tr>
	</table>
</div>
