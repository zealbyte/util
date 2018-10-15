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
	 * Random Generation Utility
	 *
	 * @author Dustin Martella <dustin.martella@zealbyte.com>
	 */
  class Random
  {
    private static $_lower = 'abcdefghijklmnopqrstuvwxyz';
    private static $_upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    private static $_numer = '1234567890';

		/**
		 * @return string
		 */
    public static function alphaNumericString (int $min = 10, int $max = null) : string
    {
      $rand = '';
      $length = self::getLength($min, $max);
      $string = self::alphaNumericStringNoRepeat($length);
      $maxLen = strlen($string) - 1;

      for ($i = 0; $i < $length; $i++)
        $rand .= $string[mt_rand(1, $maxLen)];

      return str_shuffle($rand);
    }

		/**
		 * @return string
		 */
    public static function alphaNumericStringNoRepeat (int $min = 10, int $max = null) : string
    {
      $length = self::getLength($min, $max);

      $str = self::$_numer . self::$_lower . self::$_upper . self::$_numer;
      $string = str_shuffle(str_shuffle($str));

      return str_shuffle(substr($string, 0, $length));
		}

		/**
		 * @return string
		 */
		public static function entropicToken (int $n_bytes = 32) : string
		{
			return rtrim(strtr(base64_encode(self::getRandomBytes($n_bytes)), '+/', '-_'), '=');
		}

		/**
		 * @return int
		 */
    public static function number (int $min = 10, int $max = 100) : int
    {
      return mt_rand($min, $max);
    }

		/**
		 * @return int
		 */
    private static function getLength (int $min, int $max = null) : int
		{
			$min = ($min > 64) ? 64 : $min;
			$min = ($min < 1) ? 1 : $min;

			if ($max) {
				$max = ($max < $min) ? $min + 1 : $max;
				$max = ($max > 64) ? 64 : $max;
				$max = ($max < 1) ? 1 : $max;
				$max = ($max == $min) ? null : $max;
			}

			if (!empty($max))
				return mt_rand($min, $max);

			return $min;
		}

		/**
		 * @return byte
		 */
		private static function getRandomBytes (int $n_bytes = 32, /*internal*/ int $iteration = 0)
		{
			$n_bytes = ($n_bytes > 512) ? 512 : $n_bytes;

			if (function_exists('openssl_random_pseudo_bytes')) {
				$bytes = openssl_random_pseudo_bytes($n_bytes, $strong);

				if (false !== $bytes && true === $strong)
					return $bytes;
				else if ($iteration < 10)
					return self::getRandomBytes($n_bytes, $iteration++);
			}

			return hash('sha256', uniqid(mt_rand(), true), true);
		}

  }
}
