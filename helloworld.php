<?php
// Helloworld extension, https://github.com/schulle4u/yellow-helloworld

class YellowHelloworld {
    const VERSION = "0.9.1";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("helloworldMessage", "Hello World");
        $this->yellow->system->setDefault("helloworldSpeed", "100");
    }
    
    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="helloworld" && ($type=="block" || $type=="inline")) {
            $message = $this->yellow->system->get("helloworldMessage");
            $speed = $this->yellow->system->get("helloworldSpeed");
            if (substru($text, 0, 2)=="- ") $message = trim(substru($text, 2));
            $output = "<div class=\"helloworld\" aria-label=\"".htmlspecialchars($message)."\" data-message=\"".htmlspecialchars($message)."\" data-speed=\"".htmlspecialchars($speed)."\">&nbsp;</div>";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $assetLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreAssetLocation");
            $output = "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$assetLocation}helloworld.css\" />\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$assetLocation}helloworld.js\"></script>\n";
        }
        return $output;
    }
}
