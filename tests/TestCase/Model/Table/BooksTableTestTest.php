<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BooksTableTest;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BooksTableTest Test Case
 */
class BooksTableTestTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BooksTableTest
     */
    public $BooksTableTest;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BooksTest') ? [] : ['className' => 'App\Model\Table\BooksTableTest'];
        $this->BooksTableTest = TableRegistry::get('BooksTest', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BooksTableTest);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
