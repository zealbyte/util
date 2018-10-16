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
	require_once(__DIR__.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'imageSmoothArc_optimized.php');

	/**
	 * Smooth Arc with GD
	 *
	 * @author Dustin Martella <dustin.martella@zealbyte.com>
	 */
	class Draw
	{
		public static function Arc (&$img, $cx, $cy, $w, $h, $color, $start, $stop)
		{
			return \imageSmoothArc($img, $cx, $cy, $w, $h, $color, $start, $stop);
		}
	}
}
