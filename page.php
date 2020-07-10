<?php
$qstr = getenv ( 'QUERY_STRING' );
parse_str ( $qstr, $data );
if (array_key_exists('id', $data))
	$id = $data['id'];
else
	$id = "home";
include 'mailto.php';
date_default_timezone_set("Europe/London")
?>
<html>
<head>
<title>Fareham Fairtrade Borough Working Group</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="GENERATOR" content="Rational Software Architect" />
<link href="fftb.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="fftb.js" type="text/javascript"></script>
</head>
<body id="<?= $id ?>">
<?php include 'navigator.php'; ?>
<div id="content">
<?php

include 'pageList.php';
$page = $pages [$id];
if ($page == "")
{
	print "Unknown page '$id'";
} else
{
	include $page;
}
?>
</div>
<div id="footer">
<hr>
<b>Copyright &copy; Fareham Fairtrade Borough Working Group 2005-<?= date("y") ?>.</b> All rights
reserved.
</div>
</body>
</html>
