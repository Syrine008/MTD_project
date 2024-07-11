<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReferenceFixture
 */
class ReferenceFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'reference';
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
                'logo' => 'Lorem ipsum dolor sit amet',
                'id_pays' => 1,
                'id_client' => 1,
                'id_annee' => 1,
                'id_secteur' => 1,
                'id_societe' => 1,
                'id_type' => 1,
            ],
        ];
        parent::init();
    }
}
