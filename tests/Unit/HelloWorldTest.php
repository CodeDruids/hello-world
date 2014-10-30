<?php
namespace CodeDruids\Samples\Tests\Unit;

use PHPUnit_Framework_TestCase as TestCase;
use CodeDruids\Samples\HelloWorld;

class HelloWorldTest extends TestCase
{
	/**
	 * @test
	 */
	public function testType()
	{
		$type = HelloWorld::$type;
		$this->assertEquals($type, "Acolyte");
	}
	/**
	 * @test
	 */
	public function testSayHello()
	{
		$said_what = HelloWorld::sayHello();
		$this->assertEquals($said_what, "Hello ".HelloWorld::$type."!");

		$said_what = HelloWorld::sayHello("Jim");
		$this->assertEquals($said_what, "Hello ".HelloWorld::$type." Jim!");

		$said_what = HelloWorld::sayHello(9000);
		$this->assertEquals($said_what, "Hello ".HelloWorld::$type." 9000!");
	}
}