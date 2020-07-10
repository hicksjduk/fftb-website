<h1>Diary of Events</h1>
<p>
Please check back regularly for updates. You may also be
able to find details of events on the websites of individual
local groups, which can be accessed from the
<a href="page.php?id=contacts">Contacts page</a>.
</p>
<?php 
foreach (scandir('diary') as $file)
{
	if (preg_match('/[0-9]{8}/', $file, $matches) && $matches[0] >= date('Ymd'))
	{
?>
<p>
<?php include "diary/$file"; ?>
</p>
<?php 
	}
}
?>

