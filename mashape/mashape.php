<?php

/*
 * Mashape PHP library.
 *
 * Copyright (C) 2010 Mashape, Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * The author of this software is Mashape, Inc.
 * For any question or feedback please contact us at: support@mashape.com
 *
 */

require_once (dirname(__FILE__) . "/mashapeAPIError.php");
require_once (dirname(__FILE__) . "/init/init.php");
require_once (dirname(__FILE__) . "/methods/handler.php");

abstract class MashapeRestAPI {
	private static $errors;

	protected static function addError($code, $message) {
		if (empty(self::$errors)) {
			self::$errors = array();
		}
		$e = new MashapeAPIError($code, $message);
		array_push(self::$errors, $e);
	}

	private static function clearErrors() {
		self::$errors = array();
	}

	public static function getErrors() {
		return self::$errors;
	}
}

?>