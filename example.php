<?php
// Example plugin, https://github.com/schulle4u/yellow-plugin-example
// Copyright (c) 2018 Example Name
// This file may be used and distributed under the terms of the public license.

class YellowExample
{
	const VERSION = "0.7.5";
	var $yellow;			//access to API
	
	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
	}
	
	// Handle page content parsing of custom block
	function onParseContentBlock($page, $name, $text, $shortcut)
	{
		$output = null;
		if($name=="example" && $shortcut)
		{
			$output = "<div class=\"".htmlspecialchars($name)."\">";
			$output .= "Add more HTML code here";
			$output .= "</div>";
		}
		return $output;
	}
}

$yellow->plugins->register("example", "YellowExample", YellowExample::VERSION);
?>
