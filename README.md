PWPress skeleton
================

Skeleton is a pre-packaged and pre-configured Nette Framework application
that you can use as the skeleton for your new applications.

Installing
----------

The best way to install Sandbox is using Composer. If you don't have Composer yet, download
it following [the instructions](http://doc.nette.org/composer). Then use command:

		composer create-project PWPress/skeleton my-app
		cd my-app

Make directories `private/temp` and `private/log` writable. Navigate your browser
to the `web` directory and you will see a welcome page.

It is CRITICAL that whole `private/app`, `private/log` and `private/temp` directories are NOT accessible
directly via a web browser! See [security warning](http://nette.org/security-warning).


License
-------
- Nette: New BSD License or GPL 2.0 or 3.0 (http://nette.org/license)
- Adminer: Apache License 2.0 or GPL 2 (http://www.adminer.org)
- PWPress/skeleton: New BSD License or GPL 2.0 or 3.0 (http://nette.org/license)
