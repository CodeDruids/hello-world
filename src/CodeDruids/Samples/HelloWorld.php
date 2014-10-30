<?php
namespace CodeDruids\Samples;

class HelloWorld
{
	/** @var string Type of person to say hello to */
	public static $type = 'Acolyte';

	/**
	 * Simple method to say hello
	 * 
	 * @param string|null $name The name to say hello to
	 * @return string
	 */
	public static function sayHello($name = null)
	{
		return "Hello ".self::$type.(empty($name) ? '' : ' '.((string) $name)).'!';
	}
}
