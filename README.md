SMS Taiwan Joomla Coding Standards
==================================

This repository includes the [Joomla](http://developer.joomla.org) coding standard definition for [PHP Codesniffer](http://pear.php.net/PHP_CodeSniffer) along with a few other helpful resources.  The PHP_CodeSniffer standard will never be 100% accurate, but should be viewed as a strong set of guidelines while writing software for Joomla.

See Joomla coding standards documentation at [http://joomla.github.io/coding-standards/](http://joomla.github.io/coding-standards/)


## Requirements

* PHP 5.3+
* [PHP Codesniffer](http://pear.php.net/PHP_CodeSniffer) 1.3+


## Installation

Installation is as easy as checking out the repository to the correct location within PHP_CodeSniffer's directory structure.

### Install PHP_CodeSniffer.

	pear install PHP_CodeSniffer

### Install the Joomla standard.

	git clone https://github.com/smstw/sms-php-code-sniffer.git `pear config-get php_dir`/PHP/CodeSniffer/Standards/SMSTWJoomla

## Running

You can use the installed SMSTWJoomla standard like:

	phpcs --standard=SMSTWJoomla path/to/code

Alternatively if it isn't installed you can still reference it by path like:

	phpcs --standard=path/to/sms-php-code-sniffer path/to/code
