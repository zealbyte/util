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
	use Normalizer;

	/**
	 * String Normalization Utility
	 *
	 * @author Dustin Martella <dustin.martella@zealbyte.com>
	 */
	class Canonical
	{
		/**
		 *
		 */
		public static function name (string $string)
		{
			return preg_replace("/[^a-z0-9-_.]+/", "", strtolower($string));
		}

		/**
		 *
		 */
		public static function param (string $string)
		{
			return preg_replace("/[^a-z0-9-_.]+/", "", strtolower($string));
		}

		/**
		 *
		 */
		public static function term (string $term)
		{
			return self::normalizer($term);
		}

		/**
		 *
		 */
		public static function normalizer (string $string)
		{
			return Normalizer::normalize($string, Normalizer::FORM_C);
		}

	}
}
