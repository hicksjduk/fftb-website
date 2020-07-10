<?php
class Picture
{
	private $address;
	private $text;

	function __construct($address, $text)
	{
		$this->address = $address;
		$this->text = $text;
	}

	function address()
	{
		return $this->address;
	}

	function text()
	{
		return $this->text;
	}

	function clickAction()
	{
		$text = str_replace("'", "\\'", $this->text);
		$answer = "setPic('$this->address', '$text');";
		return $answer;
	}
}
