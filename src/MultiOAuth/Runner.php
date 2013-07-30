<?php

namespace MultiOAuth;

/**
 * OAuth Strategy Runner
 *
 * @author Martin Bažík <martin@bazo.sk>
 */
class Runner
{

	private $strategies = [];


	/**
	 * 
	 * @param string $strategyName
	 * @param StrategyInterface $strategy
	 * @return Runner
	 */
	public function addStrategy($strategyName, StrategyInterface $strategy)
	{
		$this->strategies[$strategyName] = $strategy;

		return $this;
	}


	/**
	 * @param string $strategyName
	 * @return StrategyInterface
	 * @throws \RuntimeException
	 */
	public function getStrategy($strategyName)
	{
		if (!isset($this->strategies[$strategyName])) {
			throw new \RuntimeException(sprintf('Stratefy "%s" does not exist.'));
		}

		return $this->strategies[$strategyName];
	}


}
