My plugin 0.7.4
===============
Sample documentation file for new plugins. Just fill out missing data, and delete unwanted headings. 

<p align="center"><img src="my-screenshot.png?raw=true" alt="Screenshot"></p>

## How do I install this?

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/). If you are using Safari, right click and select 'Download file as'.
3. Copy `plugin.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to use my plugin?

Create a `[plugin]` shortcut. 

The plugin is available on your website as `http://website/blog/`. 

## How to show plugin information?

You can use shortcuts to show information about the plugin:

`SHORTCUT ARGUMENT` description   

The following arguments are available:

`LOCATION` = page location   

## How to configure my plugin?

The following settings can be configured in file `system/config/config.ini`:

`PluginLocation` = plugin location  

The following files can be configured:

`system/config/page-new-plugin.txt` = content file for new plugin page  
`system/themes/snippets/content-plugin.php` = source code for plugin page  

## Example

Showing latest plugin pages:

    [blogchanges /blog/]
    [blogchanges /blog/ 5]
    [blogchanges /blog/ 20]

## Developer

Datenstrom. [Get support](https://developers.datenstrom.se/help/support).
