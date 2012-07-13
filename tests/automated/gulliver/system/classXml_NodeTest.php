<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:24.
*/

class classXml_NodeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Xml_Node
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $name = '';
        $type = '';
        $value = '';
        $attributes = array();
        $this->object = new Xml_Node($name, $type, $value, $attributes = array());
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
        $methods = get_class_methods('Xml_Node');        $this->assertTrue( count($methods) == 8);
    }

    /**
    * @covers Xml_Node::Xml_Node
    * @todo   Implement testXml_Node().
    */
    public function testXml_Node()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('Xml_Node', $methods ), 'exists method Xml_Node' );
        $r = new ReflectionMethod('Xml_Node', 'Xml_Node');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'type');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'value');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->assertTrue( $params[3]->getName() == 'attributes');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == array());
    }

    /**
    * @covers Xml_Node::addAttribute
    * @todo   Implement testaddAttribute().
    */
    public function testaddAttribute()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('addAttribute', $methods ), 'exists method addAttribute' );
        $r = new ReflectionMethod('Xml_Node', 'addAttribute');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'value');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers Xml_Node::addChildNode
    * @todo   Implement testaddChildNode().
    */
    public function testaddChildNode()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('addChildNode', $methods ), 'exists method addChildNode' );
        $r = new ReflectionMethod('Xml_Node', 'addChildNode');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'childNode');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers Xml_Node::toTree
    * @todo   Implement testtoTree().
    */
    public function testtoTree()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('toTree', $methods ), 'exists method toTree' );
        $r = new ReflectionMethod('Xml_Node', 'toTree');
        $params = $r->getParameters();
    }

    /**
    * @covers Xml_Node::toArray
    * @todo   Implement testtoArray().
    */
    public function testtoArray()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('toArray', $methods ), 'exists method toArray' );
        $r = new ReflectionMethod('Xml_Node', 'toArray');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'obj');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
    }

    /**
    * @covers Xml_Node::findNode
    * @todo   Implement testfindNode().
    */
    public function testfindNode()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('findNode', $methods ), 'exists method findNode' );
        $r = new ReflectionMethod('Xml_Node', 'findNode');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'xpath');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers Xml_Node::getXML
    * @todo   Implement testgetXML().
    */
    public function testgetXML()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getXML', $methods ), 'exists method getXML' );
        $r = new ReflectionMethod('Xml_Node', 'getXML');
        $params = $r->getParameters();
    }

    /**
    * @covers Xml_Node::getCDATAValue
    * @todo   Implement testgetCDATAValue().
    */
    public function testgetCDATAValue()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getCDATAValue', $methods ), 'exists method getCDATAValue' );
        $r = new ReflectionMethod('Xml_Node', 'getCDATAValue');
        $params = $r->getParameters();
    }

  }
