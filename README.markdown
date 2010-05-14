doStaticPagePlugin
-------------

A lightweight symfony CMS for project where you don't need one. In your projects you always need static pages: About, Terms, Privacy, etc. 
Symfony makes it's easy to create simple CMS from scratch. This plugin saves your time on code generation and creating a schema. 

Features
--------
* Saves time on common task 
* Generates a static page routes, which are just '/page-name'
* Contains admin module
* Page has only 2 fields: title and body
* Easily can be ported to the project and be extended.

Requirements
--------
* Symfony 1.3-1.4
* Doctrine

Installation
--------
* Put this plugin  into /plugins folder
* Enable plugin in ProjectConfiguration
* Activate module 'content' for frontend
* Activate module 'contentAdmin' for backend
* Remove route '@default_index', that symfony has by default. Now a routes like '/page' will work

If you need you can create your own content module. Right now it only has a 'Show' action.