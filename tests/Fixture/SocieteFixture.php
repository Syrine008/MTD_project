<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SocieteFixture
 */
class SocieteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'societe';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'adress' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'number' => 1,
            ],
        ];
        parent::init();
    }
}
