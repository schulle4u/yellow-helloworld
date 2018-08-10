<?php
// Example plugin, https://github.com/schulle4u/yellow-plugin-example
// Copyright (c) 2018 Example Name
// This file may be used and distributed under the terms of the public license.

class YellowExample
{
	const VERSION = "0.7.6";
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
	
	/* Uncomment if needed
	// Handle page extra HTML data
	function onExtra($name)
	{
		$output = NULL;
		if($name == "header")
		{
			$output .= "<!-- Additional CSS and JS for your plugin -->\n";
		}
		if($name == "footer")
		{
			$output = "<!-- It is better to include large JS files after the content -->\n";
		}
		return $output;
	}
	*/
}

$yellow->plugins->register("example", "YellowExample", YellowExample::VERSION);
?>
