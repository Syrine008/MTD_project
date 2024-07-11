<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AnneeFixture
 */
class AnneeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'annee';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_annee' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
