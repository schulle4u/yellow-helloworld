Example plugin 0.7.4
===============
Sample documentation file for new plugins. Just fill out missing data, and delete unwanted headings. This repository also contains a simple shortcut plugin. 

<p align="center"><img src="example-screenshot.png?raw=true" alt="Screenshot"></p>

## How do I install this?

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/schulle4u/yellow-plugin-example/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `master.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to use example plugin?

Create a `[example]` shortcut. 

## How to show example plugin information?

You can use shortcuts to show information about the plugin:

`SHORTCUT ARGUMENT` description   

The following arguments are available:

`LOCATION` = page location   

## How to configure example plugin?

The following settings can be configured in file `system/config/config.ini`:

`ExampleLocation` = example location  

The following files can be configured:

`system/config/page-new-example.txt` = content file for new plugin page  
`system/themes/snippets/content-example.php` = source code for plugin page  

## Example

Showing latest example pages:

    [example /blog/]

## Developer

Datenstrom. [Get support](https://developers.datenstrom.se/help/support).
