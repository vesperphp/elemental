<?php

namespace Elemental;

use Frontier\Frontier;
use Config\Config;


class Re{

	/**
	 * Redirect to a page 
	 * within the app.
	 */

	public static function direct(string $location='', int $header=200){

		/**
		 * If the location is not empty..
		 */

		if($location) {

			/**
			 * And the location is numeric..
			 */

			if(is_numeric($location)) {
				switch($location) {
				case 404:
					
					/**
					 * Then send it to the 404
					 * more added later... 
					 */

					Frontier::error(404);
					
					exit();
				break;
					
				}
			}

			/** 
			 * If the location is not a
			 * http error, then redirect
			 * to an internal supplied url.
			 */

			header('Location: ' . Config::get('site/uri').'/'.$location);

			exit();
			
		}else{

			/**
			 * If there is no location set (empty),
			 * redirect to the homepage.
			 */

			header('Location: ' . Config::get('site/uri'));

			exit();
			
		}

	}

	/**
	 * For external links, since they can
	 * be handled differently, we have a
	 * separate method:
	 */
	public static function ext(string $location){

		/**
		 * If the location is not empty..
		 */

		if($location) {

			/**
			 * If the location is set,
			 * try to redirect..
			 */

			header('Location: ' . $location);
			
			exit();
			
		}

	}

}
