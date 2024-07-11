<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientFixture
 */
class ClientFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'client';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_client' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'number' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'adress' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
