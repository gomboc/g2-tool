G2 Tool
=======

Zend_Tool extension.

Contributors
------------

* [Draško Gomboc](https://github.com/gomboc)
* [Ivan Kričković](https://github.com/ivankoni)

Requirements
------------

* PHP 5.2 (or later) but PHP 5.3 (or later) is highly recommended.
* Zend Framework 1.9 (or later)

Install
-------

G2 Tool should be installed using the PEAR Installer ([PHP Extension and Application Repository](http://pear.php.net/)). 

The following two commands (which you may have to run as `root`) are all that is required to install package using the PEAR Installer:

    $ pear channel-discover gomboc.github.com/pear
    $ pear install g2/G2_Tool

After the installation you can find the source files inside your local PEAR directory; the path is usually `/usr/share/php/G2`.
	
Add G2_Tool_Manifest class to .zf.ini

	$ nano ~/.zf.ini
	
.zf.ini

	basicloader.classes.0 = "G2_Tool_Manifest"
	
Uninstall
---------

Remove package (run as `root`):

	$ pear uninstall g2/G2_Tool
	
Remove G2_Tool_Manifest class from .zf.ini

	$ nano ~/.zf.ini

Documentation
-------------

To create new g2 project in workspace run:

	$ cd ~/workspace
	$ zf create project-g2 test

Development
-----------

To create example project run:

	$ ./zf create project-g2 example
	
License
-------

Copyright (c) 2012 Draško Gomboc

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.