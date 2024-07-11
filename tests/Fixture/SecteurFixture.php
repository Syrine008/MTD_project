<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SecteurFixture
 */
class SecteurFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'secteur';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_secteur' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
