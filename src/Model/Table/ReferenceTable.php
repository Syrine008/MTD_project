<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\Validation\Validator;

/**
 * Reference Model
 *
 * @method \App\Model\Entity\Reference newEmptyEntity()
 * @method \App\Model\Entity\Reference newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Reference> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reference get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Reference findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Reference patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Reference> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reference|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Reference saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Reference>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reference>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Reference>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reference> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Reference>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reference>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Reference>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reference> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ReferenceTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('reference');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Client', [
            'foreignKey' => 'id_client',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Societe', [
            'foreignKey' => 'id_societe',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Secteur', [
            'foreignKey' => 'id_secteur',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Annee', [
            'foreignKey' => 'id_annee',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Pays', [
            'foreignKey' => 'id_pays',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Type', [
            'foreignKey' => 'id_type',
            'joinType' => 'INNER',
        ]);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
     public function validationDefault(Validator $validator): Validator
    {
        $validator
        ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('logo')
            ->maxLength('logo', 255)
            ->requirePresence('logo', 'create')
            ->notEmptyString('logo');

        $validator
            ->integer('id_pays')
            ->allowEmptyString('id_pays');

        $validator
            ->integer('id_client')
            ->allowEmptyString('id_client');

        $validator
            ->integer('id_annee')
            ->allowEmptyString('id_annee');

        $validator
            ->integer('id_secteur')
            ->allowEmptyString('id_secteur');

        $validator
            ->integer('id_societe')
            ->allowEmptyString('id_societe');

        $validator
            ->integer('id_type')
            ->allowEmptyString('id_type');

        $validator
        ->allowEmptyFile('logo')
        ->add( 'logo', [
        'mimeType' => [
            'rule' => [ 'mimeType', [ 'image/jpg', 'image/png', 'image/jpeg' ] ],
            'message' => 'Please upload only jpg and png.',
        ],
        'fileSize' => [
            'rule' => [ 'fileSize', '<=', '5MB' ],
            'message' => 'Image file size must be less than 5MB.',
        ]]);
        return $validator;
    } 


    
}
