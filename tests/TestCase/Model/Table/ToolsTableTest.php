<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ToolsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ToolsTable Test Case
 */
class ToolsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ToolsTable
     */
    protected $Tools;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Tools',
        'app.Projects',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tools') ? [] : ['className' => ToolsTable::class];
        $this->Tools = $this->getTableLocator()->get('Tools', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Tools);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ToolsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ToolsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
