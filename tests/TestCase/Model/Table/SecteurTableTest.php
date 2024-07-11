<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SecteurTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SecteurTable Test Case
 */
class SecteurTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SecteurTable
     */
    protected $Secteur;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Secteur',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Secteur') ? [] : ['className' => SecteurTable::class];
        $this->Secteur = $this->getTableLocator()->get('Secteur', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Secteur);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SecteurTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
