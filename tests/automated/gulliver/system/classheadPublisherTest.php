<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.headPublisher.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:22.
*/

class classheadPublisherTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var headPublisher
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new headPublisher();
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
        $methods = get_class_methods('headPublisher');        $this->assertTrue( count($methods) == 27);
    }

    /**
    * @covers headPublisher::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('__construct', $methods ), 'exists method __construct' );
        $r = new ReflectionMethod('headPublisher', '__construct');
        $params = $r->getParameters();
    }

    /**
    * @covers headPublisher::getSingleton
    * @todo   Implement testgetSingleton().
    */
    public function testgetSingleton()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getSingleton', $methods ), 'exists method getSingleton' );
        $r = new ReflectionMethod('headPublisher', 'getSingleton');
        $params = $r->getParameters();
    }

    /**
    * @covers headPublisher::setTitle
    * @todo   Implement testsetTitle().
    */
    public function testsetTitle()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setTitle', $methods ), 'exists method setTitle' );
        $r = new ReflectionMethod('headPublisher', 'setTitle');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'title');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers headPublisher::addMaborakFile
    * @todo   Implement testaddMaborakFile().
    */
    /*public function testaddMaborakFile()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('addMaborakFile', $methods ), 'exists method addMaborakFile' );
        $r = new ReflectionMethod('headPublisher', 'addMaborakFile');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'filename');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'loader');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
    }*/

    /**
    * @covers headPublisher::addScriptFile
    * @todo   Implement testaddScriptFile().
    */
    public function testaddScriptFile()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('addScriptFile', $methods ), 'exists method addScriptFile' );
        $r = new ReflectionMethod('headPublisher', 'addScriptFile');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'url');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'LoadType');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '1');
    }

    /**
    * @covers headPublisher::addInstanceModule
    * @todo   Implement testaddInstanceModule().
    */
    public function testaddInstanceModule()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('addInstanceModule', $methods ), 'exists method addInstanceModule' );
        $r = new ReflectionMethod('headPublisher', 'addInstanceModule');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'instance');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'module');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers headPublisher::addClassModule
    * @todo   Implement testaddClassModule().
    */
    public function testaddClassModule()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('addClassModule', $methods ), 'exists method addClassModule' );
        $r = new ReflectionMethod('headPublisher', 'addClassModule');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'class');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'module');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers headPublisher::addScriptCode
    * @todo   Implement testaddScriptCode().
    */
    public function testaddScriptCode()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('addScriptCode', $methods ), 'exists method addScriptCode' );
        $r = new ReflectionMethod('headPublisher', 'addScriptCode');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'script');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers headPublisher::printHeader
    * @todo   Implement testprintHeader().
    */
    public function testprintHeader()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('printHeader', $methods ), 'exists method printHeader' );
        $r = new ReflectionMethod('headPublisher', 'printHeader');
        $params = $r->getParameters();
    }

    /**
    * @covers headPublisher::printRawHeader
    * @todo   Implement testprintRawHeader().
    */
    public function testprintRawHeader()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('printRawHeader', $methods ), 'exists method printRawHeader' );
        $r = new ReflectionMethod('headPublisher', 'printRawHeader');
        $params = $r->getParameters();
    }

    /**
    * @covers headPublisher::clearScripts
    * @todo   Implement testclearScripts().
    */
    public function testclearScripts()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('clearScripts', $methods ), 'exists method clearScripts' );
        $r = new ReflectionMethod('headPublisher', 'clearScripts');
        $params = $r->getParameters();
    }

    /**
    * @covers headPublisher::includeExtJs
    * @todo   Implement testincludeExtJs().
    */
    public function testincludeExtJs()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('includeExtJs', $methods ), 'exists method includeExtJs' );
        $r = new ReflectionMethod('headPublisher', 'includeExtJs');
        $params = $r->getParameters();
    }

    /**
    * @covers headPublisher::getExtJsStylesheets
    * @todo   Implement testgetExtJsStylesheets().
    */
    public function testgetExtJsStylesheets()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getExtJsStylesheets', $methods ), 'exists method getExtJsStylesheets' );
        $r = new ReflectionMethod('headPublisher', 'getExtJsStylesheets');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'skinName');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers headPublisher::getExtJsScripts
    * @todo   Implement testgetExtJsScripts().
    */
    public function testgetExtJsScripts()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getExtJsScripts', $methods ), 'exists method getExtJsScripts' );
        $r = new ReflectionMethod('headPublisher', 'getExtJsScripts');
        $params = $r->getParameters();
    }

    /**
    * @covers headPublisher::getExtJsVariablesScript
    * @todo   Implement testgetExtJsVariablesScript().
    */
    public function testgetExtJsVariablesScript()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getExtJsVariablesScript', $methods ), 'exists method getExtJsVariablesScript' );
        $r = new ReflectionMethod('headPublisher', 'getExtJsVariablesScript');
        $params = $r->getParameters();
    }

    /**
    * @covers headPublisher::getExtJsLibraries
    * @todo   Implement testgetExtJsLibraries().
    */
    public function testgetExtJsLibraries()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getExtJsLibraries', $methods ), 'exists method getExtJsLibraries' );
        $r = new ReflectionMethod('headPublisher', 'getExtJsLibraries');
        $params = $r->getParameters();
    }

    /**
    * @covers headPublisher::usingExtJs
    * @todo   Implement testusingExtJs().
    */
    public function testusingExtJs()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('usingExtJs', $methods ), 'exists method usingExtJs' );
        $r = new ReflectionMethod('headPublisher', 'usingExtJs');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'library');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers headPublisher::setExtSkin
    * @todo   Implement testsetExtSkin().
    */
    public function testsetExtSkin()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setExtSkin', $methods ), 'exists method setExtSkin' );
        $r = new ReflectionMethod('headPublisher', 'setExtSkin');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'skin');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers headPublisher::addExtJsScript
    * @todo   Implement testaddExtJsScript().
    */
    public function testaddExtJsScript()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('addExtJsScript', $methods ), 'exists method addExtJsScript' );
        $r = new ReflectionMethod('headPublisher', 'addExtJsScript');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'filename');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'debug');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->assertTrue( $params[2]->getName() == 'isExternal');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
    }

    /**
    * @covers headPublisher::AddContent
    * @todo   Implement testAddContent().
    */
    public function testAddContent()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('AddContent', $methods ), 'exists method AddContent' );
        $r = new ReflectionMethod('headPublisher', 'AddContent');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'templateHtml');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers headPublisher::getContent
    * @todo   Implement testgetContent().
    */
    public function testgetContent()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getContent', $methods ), 'exists method getContent' );
        $r = new ReflectionMethod('headPublisher', 'getContent');
        $params = $r->getParameters();
    }

    /**
    * @covers headPublisher::Assign
    * @todo   Implement testAssign().
    */
    public function testAssign()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('Assign', $methods ), 'exists method Assign' );
        $r = new ReflectionMethod('headPublisher', 'Assign');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'variable');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'value');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers headPublisher::AssignVar
    * @todo   Implement testAssignVar().
    */
    public function testAssignVar()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('AssignVar', $methods ), 'exists method AssignVar' );
        $r = new ReflectionMethod('headPublisher', 'AssignVar');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'value');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers headPublisher::getVars
    * @todo   Implement testgetVars().
    */
    public function testgetVars()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getVars', $methods ), 'exists method getVars' );
        $r = new ReflectionMethod('headPublisher', 'getVars');
        $params = $r->getParameters();
    }

    /**
    * @covers headPublisher::AssignNumber
    * @todo   Implement testAssignNumber().
    */
    public function testAssignNumber()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('AssignNumber', $methods ), 'exists method AssignNumber' );
        $r = new ReflectionMethod('headPublisher', 'AssignNumber');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'variable');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'value');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers headPublisher::renderExtJs
    * @todo   Implement testrenderExtJs().
    */
    public function testrenderExtJs()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('renderExtJs', $methods ), 'exists method renderExtJs' );
        $r = new ReflectionMethod('headPublisher', 'renderExtJs');
        $params = $r->getParameters();
    }

    /**
    * @covers headPublisher::stripCodeQuotes
    * @todo   Implement teststripCodeQuotes().
    */
    public function teststripCodeQuotes()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('stripCodeQuotes', $methods ), 'exists method stripCodeQuotes' );
        $r = new ReflectionMethod('headPublisher', 'stripCodeQuotes');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sJson');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers headPublisher::disableHeaderScripts
    * @todo   Implement testdisableHeaderScripts().
    */
    public function testdisableHeaderScripts()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('disableHeaderScripts', $methods ), 'exists method disableHeaderScripts' );
        $r = new ReflectionMethod('headPublisher', 'disableHeaderScripts');
        $params = $r->getParameters();
    }

  }
