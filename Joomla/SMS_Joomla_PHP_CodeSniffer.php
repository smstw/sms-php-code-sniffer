<?php

/**
 * Class SMS_Joomla_PHP_CodeSniffer
 */
class SMS_Joomla_PHP_CodeSniffer
{
	public static function addInstalledStandardPaths()
	{
		// __DIR__ = /vendor/smstw/php-code-sniffer/Joomla/
		$rootPath = realpath(__DIR__ . '/../../../../');

		if (!is_dir($rootPath . '/vendor'))
		{
			return;
		}

		require_once $rootPath . '/vendor/autoload.php';

		$phpcs = new \PHP_CodeSniffer();

		$paths = $phpcs->getInstalledStandardPaths();
		$paths[] = realpath($rootPath . '/vendor/smstw/php-code-sniffer/');

		$paths = array_unique($paths);

		$phpcs->setConfigData('installed_paths', implode(',', $paths));

		echo '"installed_paths" as below:' . PHP_EOL;

		foreach ($paths as $path)
		{
			echo '    - ' . $path . PHP_EOL;
		}

		echo PHP_EOL;
	}
}
