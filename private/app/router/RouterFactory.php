<?php

namespace App;

use Nette,
	Nette\Application\Routers\RouteList,
	Nette\Application\Routers\Route,
	Nette\Application\Routers\SimpleRouter;


/**
 * Router factory.
 */
class RouterFactory
{


	/**
	 * @return \Nette\Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new RouteList();

		$router[] = $adminRouter = new RouteList('Admin');
		$adminRouter[] = new Route('admin/<presenter>/<action>[/<id>]', 'Default:default', Route::SECURED); // , Route::SECURED for admin

		$router[] = $frontRouter = new RouteList('Front');
		$frontRouter[] = new Route('index.php', 'Default:default'); // For NetBeans Connector only.
		$frontRouter[] = new Route('<presenter>/<action>[/<id>]', 'Default:default');


		return $router;

	}

}
