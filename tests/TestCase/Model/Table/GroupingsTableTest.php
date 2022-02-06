<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GroupingsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GroupingsTable Test Case
 */
class GroupingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GroupingsTable
     */
    protected $Groupings;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Groupings',
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
        $config = $this->getTableLocator()->exists('Groupings') ? [] : ['className' => GroupingsTable::class];
        $this->Groupings = $this->getTableLocator()->get('Groupings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Groupings);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GroupingsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\GroupingsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
