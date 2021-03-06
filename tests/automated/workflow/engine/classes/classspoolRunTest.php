<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'workflow/engine/classes/class.spool.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:32.
*/

class classspoolRunTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var spoolRun
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new spoolRun();
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
        $methods = get_class_methods('spoolRun');
        $this->assertTrue(count($methods) == 9);
    }

    /**
    * @covers spoolRun::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('__construct', $methods), 'exists method __construct');
        $r = new ReflectionMethod('spoolRun', '__construct');
        $params = $r->getParameters();
    }

    /**
    * @covers spoolRun::getSpoolFilesList
    * @todo   Implement testgetSpoolFilesList().
    */
    public function testgetSpoolFilesList()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('getSpoolFilesList', $methods), 'exists method getSpoolFilesList');
        $r = new ReflectionMethod('spoolRun', 'getSpoolFilesList');
        $params = $r->getParameters();
    }

    /**
    * @covers spoolRun::create
    * @todo   Implement testcreate().
    */
    public function testcreate()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('create', $methods), 'exists method create');
        $r = new ReflectionMethod('spoolRun', 'create');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'aData');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == false);
    }

    /**
    * @covers spoolRun::setConfig
    * @todo   Implement testsetConfig().
    */
    public function testsetConfig()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('setConfig', $methods), 'exists method setConfig');
        $r = new ReflectionMethod('spoolRun', 'setConfig');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'aConfig');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == false);
    }

    /**
    * @covers spoolRun::setData
    * @todo   Implement testsetData().
    */
    public function testsetData()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('setData', $methods), 'exists method setData');
        $r = new ReflectionMethod('spoolRun', 'setData');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'sAppMsgUid');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == false);
        $this->assertTrue($params[1]->getName() == 'sSubject');
        $this->assertTrue($params[1]->isArray() == false);
        $this->assertTrue($params[1]->isOptional() == false);
        $this->assertTrue($params[2]->getName() == 'sFrom');
        $this->assertTrue($params[2]->isArray() == false);
        $this->assertTrue($params[2]->isOptional() == false);
        $this->assertTrue($params[3]->getName() == 'sTo');
        $this->assertTrue($params[3]->isArray() == false);
        $this->assertTrue($params[3]->isOptional() == false);
        $this->assertTrue($params[4]->getName() == 'sBody');
        $this->assertTrue($params[4]->isArray() == false);
        $this->assertTrue($params[4]->isOptional() == false);
        $this->assertTrue($params[5]->getName() == 'sDate');
        $this->assertTrue($params[5]->isArray() == false);
        $this->assertTrue($params[5]->isOptional() == true);
        $this->assertTrue($params[5]->getDefaultValue() == '');
        $this->assertTrue($params[6]->getName() == 'sCC');
        $this->assertTrue($params[6]->isArray() == false);
        $this->assertTrue($params[6]->isOptional() == true);
        $this->assertTrue($params[6]->getDefaultValue() == '');
        $this->assertTrue($params[7]->getName() == 'sBCC');
        $this->assertTrue($params[7]->isArray() == false);
        $this->assertTrue($params[7]->isOptional() == true);
        $this->assertTrue($params[7]->getDefaultValue() == '');
        $this->assertTrue($params[8]->getName() == 'sTemplate');
        $this->assertTrue($params[8]->isArray() == false);
        $this->assertTrue($params[8]->isOptional() == true);
        $this->assertTrue($params[8]->getDefaultValue() == '');
        $this->assertTrue($params[9]->getName() == 'aAttachment');
        $this->assertTrue($params[9]->isArray() == false);
        $this->assertTrue($params[9]->isOptional() == true);
        $this->assertTrue($params[9]->getDefaultValue() == array());
    }

    /**
    * @covers spoolRun::sendMail
    * @todo   Implement testsendMail().
    */
    public function testsendMail()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('sendMail', $methods), 'exists method sendMail');
        $r = new ReflectionMethod('spoolRun', 'sendMail');
        $params = $r->getParameters();
    }

    /**
    * @covers spoolRun::resendEmails
    * @todo   Implement testresendEmails().
    */
    public function testresendEmails()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('resendEmails', $methods), 'exists method resendEmails');
        $r = new ReflectionMethod('spoolRun', 'resendEmails');
        $params = $r->getParameters();
    }

    /**
    * @covers spoolRun::getWarnings
    * @todo   Implement testgetWarnings().
    */
    public function testgetWarnings()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('getWarnings', $methods), 'exists method getWarnings');
        $r = new ReflectionMethod('spoolRun', 'getWarnings');
        $params = $r->getParameters();
    }

    /**
    * @covers spoolRun::db_insert
    * @todo   Implement testdb_insert().
    */
    public function testdb_insert()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('db_insert', $methods), 'exists method db_insert');
        $r = new ReflectionMethod('spoolRun', 'db_insert');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'db_spool');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == false);
    }
}

