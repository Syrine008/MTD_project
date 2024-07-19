<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;


/**
 * Reference Entity
 *
 * @property int $id
 * @property string $name
 * @property string $logo
 * @property int|null $id_pays
 * @property int|null $id_client
 * @property int|null $id_annee
 * @property int|null $id_secteur
 * @property int|null $id_societe
 * @property int|null $id_type
 */
class Reference extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'name' => true,
        'logo' => true,
        'id_pays' => true,
        'id_client' => true,
        'id_annee' => true,
        'id_secteur' => true,
        'id_societe' => true,
        'id_type' => true,
    ];

    
}
