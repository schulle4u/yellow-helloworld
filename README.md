Helloworld 0.8.15
=================
Example feature for developers.

<p align="center"><img src="helloworld-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to add animated text

Create a `[helloworld]` shortcut. 

**TODO:** *Describe how your extension can be used. Write multiple howto sections, if necessary.*

## Examples

Adding animated text:

    [helloworld]
    [helloworld - printf("Hello World\n");]
    [helloworld - alert("Hello World");]  

Adding animated text inside a list:

    Datenstrom Yellow is for people who make small websites.
    
    * [helloworld - Fun to use]
    * [helloworld - Just files and folders]
    * [helloworld - Installed in a few seconds]

**TODO:** *Show how your extension can be used. Give multiple examples that can be copy/pasted.*

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`HelloworldMessage` = default text message  
`HelloworldSpeed` = cursor speed in ms  

**TODO:** *Show how your extension can be configured. Describe settings and files that can be adjusted.*

## Installation

[Download extension](https://github.com/schulle4u/yellow-extension-helloworld/archive/master.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

**TODO:** *Change the link to your own repository. Mention third party libraries and web services that you use.*

## Developer

Example. [Get help](https://github.com/schulle4u/yellow-extension-helloworld/issues).

Use this extension to make a new feature. Have a look inside your `system/extensions` folder, here are all extension files. You can edit the source code in `helloworld.php`, `helloworld.js`, `helloworld.css`. You can edit the language settings in `helloworld.txt`. Every repository has a file called `extension.ini` with extension settings.

**TODO:** *Change the link to your own repository. Review your extension from the perspective of the user. Users want to reach their goals and the documentation should help them do it. The main focus should be on people and their everyday life. Not on technical details. [Learn more about publishing extensions](https://github.com/datenstrom/yellow-extensions/tree/master/source/publish).*
