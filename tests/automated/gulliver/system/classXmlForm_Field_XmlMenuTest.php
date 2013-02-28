<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlMenu.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:22.
*/

class classXmlForm_Field_XmlMenuTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var XmlForm_Field_XmlMenu
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $attributes = array('type'=>'input');
        $fieldNode = new Xml_Node('testField', 'type', 'value', $attributes);
        $this->object = new XmlForm_Field_XmlMenu($fieldNode,'lang','home','owner');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
    */
    protected function tearDown()
    {
    }

    /**
     * This is the default method to test, if the class still having
     * the same number of methods.
    */
    public function testNumberOfMethodsInThisClass()
    {
        $methods = get_class_methods('XmlForm_Field_XmlMenu');        $this->assertTrue( count($methods) == 26);
    }

    /**
    * @covers XmlForm_Field_XmlMenu::XmlForm_Field_XmlMenu
    * @todo   Implement testXmlForm_Field_XmlMenu().
    */
    public function testXmlForm_Field_XmlMenu()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('XmlForm_Field_XmlMenu', $methods ), 'exists method XmlForm_Field_XmlMenu' );
        $r = new ReflectionMethod('XmlForm_Field_XmlMenu', 'XmlForm_Field_XmlMenu');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'xmlNode');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'lang');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[2]->getName() == 'home');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[3]->getName() == 'owner');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
    }

    /**
    * @covers XmlForm_Field_XmlMenu::render
    * @todo   Implement testrender().
    */
    public function testrender()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('render', $methods ), 'exists method render' );
        $r = new ReflectionMethod('XmlForm_Field_XmlMenu', 'render');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'value');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers XmlForm_Field_XmlMenu::renderGrid
    * @todo   Implement testrenderGrid().
    */
    public function testrenderGrid()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('renderGrid', $methods ), 'exists method renderGrid' );
        $r = new ReflectionMethod('XmlForm_Field_XmlMenu', 'renderGrid');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'value');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

  }
