# pw-press/web-project

Packagist:
[![Packagist](https://img.shields.io/packagist/dm/pw-press/web-project.svg)](https://packagist.org/packages/pw-press/web-project)
[![Packagist](https://img.shields.io/packagist/dt/pw-press/web-project.svg)](https://packagist.org/packages/pw-press/web-project)

Web-project is **unofficial** a pre-packaged and pre-configured [Nette Framework](http://nette.org) application with [Bootstrap](http://getbootstrap.com/)
that you can use as the skeleton for your new applications on the [ISPConfig](http://www.ispconfig.org) server.


## Installing

Latest stable: [![Latest stable](https://img.shields.io/packagist/v/pw-press/web-project.svg?style=plastic)](https://github.com/pw-press/web-project/releases)

The best way to install the web-project is using Composer. If you don't have Composer yet, download
it following [the instructions](http://doc.nette.org/composer). Then use command:

```bash
		cd /var/www # or another document root 
		composer create-project pw-press/web-project
		cd web-project
		chmod -R a+rw private/temp private/log
```

Navigate your browser to the `web` directory and you will see a welcome page.

It is **CRITICAL** that whole `private/app`, `private/log` and `private/temp` directories are NOT accessible
directly via a web browser! See [security warning](http://nette.org/security-warning).


## Resources

- [https://github.com/nette/examples](https://github.com/nette/examples)
- [https://github.com/nette/sandbox](https://github.com/nette/sandbox)
- [https://github.com/nette/web-project](https://github.com/nette/web-project)
- [http://getbootstrap.com/getting-started/#examples](http://getbootstrap.com/getting-started/#examples)


## See also

- [github.com/pw-press/web-project/wiki](https://github.com/pw-press/web-project/wiki)
- [http://getbootstrap.com](http://getbootstrap.com)
- [http://nette.org](http://nette.org/)


## List of licenses

- **Bootstrap**: MIT License (https://github.com/twbs/bootstrap/blob/master/LICENSE)
- **Nette**: New BSD License or GPL 2.0 or 3.0 (http://nette.org/license)
- **pw-press/web-project**: New BSD License or GPL 2.0 or 3.0 (http://nette.org/license)


## Author

Petr Polák, [www.polakweb.com](https://www.polakweb.com)
