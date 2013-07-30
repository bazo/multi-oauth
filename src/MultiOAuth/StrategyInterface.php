<?php

namespace MultiOAuth;

/**
 *
 * @author Martin Bažík <martin@bazo.sk>
 */
interface StrategyInterface
{
	/**
	 * @param string $callbackUri
	 * @param array $optionalParameters
	 * @return string
	 */
	public function getLoginUri($callbackUri, $optionalParameters = []);
	
	/**
	 * @param string $callbackUri
	 * @param string $code
	 * @return string
	 */
	public function getAccessTokenUri($callbackUri, $code);
}