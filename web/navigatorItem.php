<?php
class NavigatorItem
{
	private $id;
	private $text;
	private $url;
	
	function __construct($id, $text, $url)
	{
		$this->id = $id;
		$this->text = $text;
		$this->url = $url;
	}
	
	function getHtml($currentPageId)
	{
		if ($this->id == $currentPageId)
		{
			$answer = "<b>$this->text</b>";
		}
		else
		{
			$answer = "<a href=\"$this->url\">$this->text</a/";
		}
		return $answer;
	}
}
