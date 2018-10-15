<?php

/*
 * This file is part of the ZealByte Util Package.
 *
 * (c) ZealByte <info@zealbyte.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ZealByte\Util
{
	use ZealByte\Util\Exception\SysPathException;
	use ZealByte\Util\Exception\AliasExistsException;

	/**
	 * Local File Path Alias Utility
	 *
	 * @author Dustin Martella <dustin.martella@zealbyte.com>
	 */
	class SysPath
	{
		private static $creatable = [];
		private static $existing = [];

		/**
		 *
		 */
		public static function hasPath (string $alias) : bool
		{
			if (empty(trim($alias)))
				throw new SysPathException('The alias for SysPath must be a non-empty string.', 502);

			if (array_key_exists($alias, self::$creatable) || array_key_exists($alias, self::$existing))
				return true;

			return false;
		}

		/**
		 *
		 */
		public static function getPath (string $alias, string $basename = null, $is_file = false) : string
		{
			if ($is_file)
				return self::getFilePath($alias, $basename);

			return self::getDirPath($alias, $basename);
		}

		/**
		 *
		 */
		public static function getDirPath (string $alias, string $basename = null) : string
		{
			if (array_key_exists($alias, self::$creatable))
				return self::getCreatablePath($alias, $basename, false);

			if (array_key_exists($alias, self::$existing))
				return self::getExistingPath($alias, $basename, false);

			throw new \Exception("The SysPath alias \"$alias\" is not set.", 599);
		}

		/**
		 *
		 */
		public static function getFilePath (string $alias, string $basename = null) : string
		{
			if (array_key_exists($alias, self::$creatable))
				return self::getCreatablePath($alias, $basename, true);

			if (array_key_exists($alias, self::$existing))
				return self::getExistingPath($alias, $basename, true);

			throw new \Exception("The SysPath alias \"$alias\" is not set.", 599);
		}

		/**
		 *
		 */
		public static function setPath (string $alias, string $path, bool $creatable = false) : bool
		{
			if ($creatable) {
				return self::setCreatablePath($alias, $path);
			} else {
				return self::setExistingPath($alias, $path);
			}
		}

		/**
		 *
		 */
		public static function setCreatablePath (string $alias, string $path) : bool
		{
			if (self::hasPath($alias))
				throw new AliasExistsException("The SysPath alias \"$alias\" already exists.", 502);

			try {
				self::$creatable[$alias] = self::findPath($path, false);
			} catch (\Exception $e) {
				throw new \Exception("The supplied path $path for \"$alias\" does not exist.", 516);
			}

			if (!is_readable(self::$creatable[$alias]))
				throw new \Exception("The supplied path $path for \"$alias\" is not readable.", 526);

			if  (!is_writable(self::$creatable[$alias]))
				throw new \Exception("The supplied path $path for \"$alias\" is not writable.", 536);

			return true;
		}

		/**
		 *
		 */
		public static function setExistingPath (string $alias, string $path) : bool
		{
			if (self::hasPath($alias))
				throw new AliasExistsException("The SysPath alias \"$alias\" already exists.", 502);

			try {
				self::$existing[$alias] = self::findPath($path, false);
			} catch (\Exception $e) {
				throw new \Exception("The supplied path $path for \"$alias\" does not exist.", 514);
			}

			if (!is_readable(self::$existing[$alias]))
				throw new \Exception("The supplied path $path for \"$alias\" is not readable.", 524);

			return true;
		}

		/**
		 *
		 */
		private static function getExistingPath (string $alias, string $basepath = null, bool $is_file = false) : string
		{
			$is_file = ($is_file && (bool) $basepath);
			$path = self::$existing[$alias] . DIRECTORY_SEPARATOR . (string) $basepath;

			try {
				$path = self::findPath($path, $is_file);
			} catch (\Exception $e) {
				throw new \Exception("Path $path does not exist in app.", 544);
			}

			if (!is_readable($path))
				throw new \Exception("Path $path is not readable in app.", 554);

			return $path;
		}

		/**
		 *
		 */
		private static function getCreatablePath (string $alias, string $basepath = null, bool $is_file = false) : string
		{
			$basename = null;
			$path = self::$creatable[$alias];
			$is_file = ($is_file && (bool) $basepath);
			$basepath = trim(str_replace(['/','\\'], DIRECTORY_SEPARATOR, trim($basepath)), DIRECTORY_SEPARATOR);
			$dirpaths = explode(DIRECTORY_SEPARATOR, $basepath);

			if ($is_file) {
				$basename = array_pop($dirpaths);
			}

			if (count($dirpaths) > 0) {
				foreach ($dirpaths as $dir) {
					if (empty($dir))
						continue;

					$path = $path . DIRECTORY_SEPARATOR . $dir;

					if (!file_exists($path)) {
						if (!mkdir($path, 0775))
							throw new \Exception('The var directory path cannot be created, please verify permissions.', 566);
					} else if (is_file($path)) {
						if (!rename($path, $path . '.1')) {
							throw new \Exception('The var directory path cannot be created, a file with the same name already exists', 576);
						} else {
							if (!mkdir($path, 0775))
								throw new \Exception('The var directory path cannot be created, please verify permissions.', 566);
						}
					}
				}
			}

			if ($basename) {
				$path = $path . DIRECTORY_SEPARATOR . $basename;

				if (!file_exists($path)) {
					if (!touch($path))
						throw new \Exception('The var file path cannot be created, please verify permissions', 586);
				} else if (is_dir($path)) {
					if (!rename($path, $path . '.1')) {
						throw new \Exception('The var file path cannot be created, a directory with the same name already exists', 596);
					} else {
						if (!touch($path))
							throw new \Exception('The var file path cannot be created, please verify permissions', 586);
					}
				}
			}

			return $path;
		}

		/**
		 *
		 */
		private static function findPath (string $path, $is_file = false) : string
		{
			$path = trim(str_replace(['/','\\'], DIRECTORY_SEPARATOR, trim($path)), DIRECTORY_SEPARATOR);
			$path = realpath(DIRECTORY_SEPARATOR . $path);

			if (($is_file ? is_file($path) : is_dir($path)))
				return $path;

			throw new \Exception('The supplied path does not exist.', 512);
		}

	}
}
