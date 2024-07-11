<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientTable Test Case
 */
class ClientTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClientTable
     */
    protected $Client;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Client',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Client') ? [] : ['className' => ClientTable::class];
        $this->Client = $this->getTableLocator()->get('Client', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Client);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ClientTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
