<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuthorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuthorsTable Test Case
 */
class AuthorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AuthorsTable
     */
    public $AuthorsTable;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.authors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Authors') ? [] : ['className' => 'App\Model\Table\AuthorsTable'];
        $this->AuthorsTable = TableRegistry::get('Authors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AuthorsTable);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
