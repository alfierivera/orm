<?php
/**
 * @package   Fuel\Orm
 * @version   2.0
 * @author    Fuel Development Team
 * @license   MIT License
 * @copyright 2010 - 2013 Fuel Development Team
 * @link      http://fuelphp.com
 */

namespace Fuel\Orm;

/**
 * Tests for Model
 *
 * @package Fuel\Orm
 * @author  Fuel Development Team
 * @covers  Fuel\Orm\Model
 */
class ModelTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * @var Model
	 */
	protected $object;

	protected function setUp()
	{
		$this->object = new Model;
	}

	/**
	 * @coversDefaultClass isNew
	 * @coversDefaultClass setIsNew
	 * @group              Orm
	 */
	public function testIsNew()
	{
		$this->assertTrue(
			$this->object->isNew()
		);

		$this->object->setIsNew(false);

		$this->assertFalse(
			$this->object->isNew()
		);
	}

	/**
	 * @coversDefaultClass setIsNew
	 * @expectedException  \InvalidArgumentException
	 * @group              Orm
	 */
	public function testInvalidIsNew()
	{
		$this->object->setIsNew(new \stdClass());
	}

	/**
	 * @coversDefaultClass getOriginalData
	 * @group              Orm
	 */
	public function testGetOriginalData()
	{
		$this->assertInstanceOf(
			'Fuel\Common\DataContainer',
			$this->object->getOriginalData()
		);
	}

}
