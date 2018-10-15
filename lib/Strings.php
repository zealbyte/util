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
	/**
	 * String Modification Utility
	 *
	 * @author Dustin Martella <dustin.martella@zealbyte.com>
	 */
	class Strings
	{
		private static $_alpha = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

		/**
		 * Converts a fully-qualified class name to a block prefix.
		 *
		 * @param string $fqcn The fully qualified class name
		 * @return string|null The class name or null if not a valid FQCN
		 */
		public static function fqcnToName ($fqcn)
		{
			// Non-greedy ("+?") to match "type" suffix, if present
			if (preg_match('~([^\\\\]+?)(type)?$~i', $fqcn, $matches))
				return strtolower(preg_replace(array('/([A-Z]+)([A-Z][a-z])/', '/([a-z\d])([A-Z])/'), array('\\1_\\2', '\\1_\\2'), $matches[1]));
		}

		/**
		 *
		 */
		public static function undefined ( /*...*/ ) : string
		{
			$string = '';
			$args = func_get_args();

			foreach ($args as $arg)
				$string .= is_scalar($arg) ? (string) $arg : gettype($arg);

			return $string;
		}

		/**
		 *
		 */
		public static function snakeToCamel (string $string) : string
		{
			$chars = ["-", "_", " ", "\t", "\n", "\r", "\f", "\v"];

			return str_replace($chars, '', ucwords(strtolower($string), implode('', $chars)));
		}

		/**
		 *
		 */
		public static function str_regex_case_i (string $string) : string
		{
			$out = '';
			$sizeof_string = strlen($string);

			for ($i = 0; $i < $sizeof_string; $i++) {
				if (in_array(strtoupper($string[$i]), self::$_alpha)) {
					$out .= '[' . strtolower($string[$i]) . strtoupper($string[$i]) . ']';
				} else {
					$out .= $string[$i];
				}
			}

			return $out;
		}

		/**
		 *
		 */
		public static function str_lreplace (string $search, string $replace, string $subject) : string
		{
			$pos = strrpos($subject, $search);

			if ($pos !== false)
				$subject = substr_replace($subject, $replace, $pos, strlen($search));

			return $subject;
		}
	}
}
