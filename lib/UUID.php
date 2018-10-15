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
	use Ramsey\Uuid\UuidInterface;
	use Ramsey\Uuid\Uuid as RamseyUuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

	/**
	 * UUID Utiltiy
	 *
	 * @author Dustin Martella <dustin.martella@zealbyte.com>
	 */
  class UUID
	{
		/**
		 *
		 */
		public static function new () : UuidInterface
		{
			return RamseyUuid::uuid1();
		}

		/**
		 *
		 */
		public static function newBin () : int
		{
			$uuid = RamseyUuid::uuid1();

			return $uuid->getBytes();
		}

		/**
		 *
		 */
		public static function newString () : string
		{
			$uuid = RamseyUuid::uuid1();

			return $uuid->toString();
		}

		/**
		 *
		 */
		public static function binToString (string $bin) : string
		{
			$uuid = RamseyUuid::fromBytes($bin);

			return $uuid->toString();
		}

		/**
		 *
		 */
		public static function binToUUID (string $bin) : UuidInterface
		{
			return RamseyUuid::fromBytes($bin);
		}

		/**
		 *
		 */
		public static function stringToBin (string $string) : string
		{
			$uuid = RamseyUuid::fromString($string);

			return $uuid->getBytes();
		}

		/**
		 *
		 */
		public static function stringToUUID (string $string) : UUIDInterface
		{
			return RamseyUuid::fromString($string);
		}

	}
}
