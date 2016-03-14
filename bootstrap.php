<?php
/**
 * @package		Textile
 * @version		1.0
 * @author		Andrew Wheal <andreww@propcom.co.uk>
 * @copyright	2010 - 2011 Propeller Communications
 */

Autoloader::add_classes(array(
	// Classes
	'Propeller\MarkItUp'   => __DIR__.'/classes/markitup.php',
	'Textile\Textile'   => __DIR__.'/classes/textile.php',
	'Textile\Tag'   => __DIR__.'/classes/tag.php',
	'Textile\DataBag'   => __DIR__.'/classes/databag.php',
));

/* End of file bootstrap.php */
