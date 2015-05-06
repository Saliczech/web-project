# pw-press/web-project

[![Latest stable](https://img.shields.io/packagist/v/pw-press/web-project.svg)](https://packagist.org/packages/pw-press/web-project)
[![Downloads this Month](https://img.shields.io/packagist/dt/pw-press/web-project.svg?branch=v1.0.1)](https://packagist.org/packages/pw-press/web-project)

Web-project is **unofficial** a pre-packaged and pre-configured [NF](http://nette.org) application with [Bootstrap](http://getbootstrap.com/)
that you can use as the skeleton for your new applications on [ISPConfig](http://www.ispconfig.org) server.



## Installing

The best way to install web-project is using Composer. If you don't have Composer yet, download
it following [the instructions](http://doc.nette.org/composer). Then use command:

		composer create-project pw-press/web-project my-app
		cd my-app

Make directories `private/temp` and `private/log` writable. Navigate your browser
to the `web` directory and you will see a welcome page.

It is CRITICAL that whole `private/app`, `private/log` and `private/temp` directories are NOT accessible
directly via a web browser! See [security warning](http://nette.org/security-warning).


## List of licenses

- Bootstrap: MIT License (https://github.com/twbs/bootstrap/blob/master/LICENSE)
- Nette: New BSD License or GPL 2.0 or 3.0 (http://nette.org/license)
- pw-press/web-project: New BSD License or GPL 2.0 or 3.0 (http://nette.org/license)


## See also [Wiki](https://github.com/pw-press/web-project/wiki)


## Author

Petr Polak, [www.polakweb.com](http://www.polakweb.com/)
