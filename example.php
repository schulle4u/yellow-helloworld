<?php
// Example plugin 0.7.4
// Copyright (c) 2018 Steffen Schultz
// This file may be used and distributed under the terms of the public license.

class YellowExample
{
	const VERSION = "0.7.4";
	var $yellow;			//access to API
	
	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("exampleStyle", "MyPlugin");
	}
	
	// Handle page content parsing of custom block
	function onParseContentBlock($page, $name, $text, $shortcut)
	{
		$output = null;
		if($name=="example" && $shortcut)
		{
			list($style) = $this->yellow->toolbox->getTextArgs($text);
			if(empty($style)) $style = $this->yellow->config->get("exampleStyle");
			$output = "<div class=\"".htmlspecialchars($style)."\">";
			$output .= "<p>It works!</p>\n";
		}
		return $output;
	}
}

$yellow->plugins->register("example", "YellowExample", YellowExample::VERSION);
?>