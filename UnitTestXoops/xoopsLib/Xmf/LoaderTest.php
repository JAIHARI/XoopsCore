<?php
/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/

namespace Xmf;

require_once(dirname(__FILE__).'/../../init_mini.php');

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-05-22 at 19:56:36.
 */
class LoaderTest extends \MY_UnitTestCase
{
    /**
     * @var Loader
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Loader;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Xmf\Loader::loadFile
     * @todo   Implement testLoadFile().
     */
    public function testLoadFile()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Xmf\Loader::loadClass
     * @todo   Implement testLoadClass().
     */
    public function testLoadClass()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}