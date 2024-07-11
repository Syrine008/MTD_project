<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReferenceTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReferenceTable Test Case
 */
class ReferenceTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReferenceTable
     */
    protected $Reference;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Reference',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Reference') ? [] : ['className' => ReferenceTable::class];
        $this->Reference = $this->getTableLocator()->get('Reference', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Reference);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ReferenceTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
