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
	 * Iterator Utility
	 *
	 * @author Dustin Martella <dustin.martella@zealbyte.com>
	 */
	class Iteration
	{
		/**
		 *
		 */
		static public function getFirstInstanceOf ($needle, array $haystack)
		{
			foreach ($haystack as $hay)
				if ($hay instanceof $needle)
					return $hay;

			return null;
		}

	}
}
