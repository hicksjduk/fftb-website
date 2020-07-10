<?php
$qstr = getenv ( 'QUERY_STRING' );
parse_str ( $qstr );
if ($id == "")
	$id = "home";
include 'mailto.php';
?>
<html>
<head>
<title>Hampshire Fairtrade Network</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="GENERATOR" content="Rational Software Architect" />
<link href="hantsft.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="hfn.js" type="text/javascript"></script>
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
<div id="footer">
<p>
<hr>
<div style="font-size: smaller"><p><span style="font-weight: bold">
<?php
date_default_timezone_set('Europe/London');
$thisyear = date("Y")
?>
&copy; 2011-<?= $thisyear ?> Hampshire Fairtrade Network</span> <br>
All rights reserved.</p>
<p>If you spot any errors, or have any website-related queries, please contact
<?= (new Mailto('website'))->getMailtoCall('the Webmaster')?>.
</div>
<!--
<p><a href="http://www.hants.gov.uk"> <img
	src="images/credit/hosted-white.gif" align="middle" width="154"
	height="70" border="0"
	alt="Web Space provided by Hampshire County Council"> </a></p>
</div>
-->
</div>
</body>
</html>
