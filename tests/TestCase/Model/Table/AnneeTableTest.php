<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnneeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnneeTable Test Case
 */
class AnneeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AnneeTable
     */
    protected $Annee;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Annee',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Annee') ? [] : ['className' => AnneeTable::class];
        $this->Annee = $this->getTableLocator()->get('Annee', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Annee);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AnneeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
