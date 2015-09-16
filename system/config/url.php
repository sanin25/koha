<?php defined('SYSPATH') OR die('No direct script access.');

return array(

	'trusted_hosts' => array(
		// Set up your hostnames here
		//
		// Example:
		//
		'koh\.ru',
        '.*\.koh\.ru',
		//
		// Do not forget to escape your dots (.) as these are regex patterns.
		// These patterns should always fully match,
		// as they are prepended with `^` and appended with `$`
	),

);
