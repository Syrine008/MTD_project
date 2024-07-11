<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocieteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocieteTable Test Case
 */
class SocieteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SocieteTable
     */
    protected $Societe;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Societe',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Societe') ? [] : ['className' => SocieteTable::class];
        $this->Societe = $this->getTableLocator()->get('Societe', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Societe);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SocieteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
