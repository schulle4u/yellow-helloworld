# Helloworld 0.8.15

Example feature for Datenstrom Yellow.

<p align="center"><img src="helloworld-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install a feature

[Download ZIP file](https://github.com/schulle4u/yellow-helloworld/archive/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

**TODO:** *Change the download link to your repository. Test your extension in a brand new installation.*

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
    * [helloworld - Installed in a few minutes]

**TODO:** *Show how your extension can be used. Give multiple examples that can be copy/pasted.*

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`HelloworldMessage` = default text message  
`HelloworldSpeed` = cursor speed in ms  

**TODO:** *Show how your extension can be configured. Describe settings and files that can be adjusted.*

## Acknowledgements

This extension includes feedback by Anna Svensson, Giovanni Salmeri and Steffen Schultz. Thank you for the good work.

**TODO:** *Mention other people, libraries and services. Give them the recognition they deserve.*

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

**TODO:** *Name the responsible developer(s). Review your extension from the perspective of the user. Imagine what the user wants to do and what would make life easier. Focus on people and their everyday lives. Not on technical details. [Learn more about making and publishing extensions](https://github.com/annaesvensson/yellow-publish).*
