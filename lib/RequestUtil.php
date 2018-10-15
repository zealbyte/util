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
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;

	/**
	 * URL Utility
	 *
	 * @author Dustin Martella <dustin.martella@zealbyte.com>
	 */
	class RequestUtil
	{
		/**
		 *
		 */
		public static function isPageRequest (Request $request, Response $response) : bool
		{
			if (!self::isPageRequestRequest($request))
				return false;

			if (!self::isPageRequestResponse($response))
				return false;

			return true;
		}

		/**
		 *
		 */
		private static function isPageRequestResponse (Response $response) : bool
		{
			if ($response->isRedirection())
				return false;

			if (!in_array($response->getStatusCode(), [200,400,401,403,404]))
				return false;

			if ($response->headers->has('Content-Type') && false === strpos($response->headers->get('Content-Type'), 'html'))
				return false;

			return true;
		}

		/**
		 *
		 */
		private static function isPageRequestRequest (Request $request) : bool
		{
			if ($request->isXmlHttpRequest())
				return false;

			if ('html' !== $request->getRequestFormat())
				return false;

			return true;
		}

	}
}
