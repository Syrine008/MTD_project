<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Secteur Model
 *
 * @method \App\Model\Entity\Secteur newEmptyEntity()
 * @method \App\Model\Entity\Secteur newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Secteur> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Secteur get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Secteur findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Secteur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Secteur> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Secteur|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Secteur saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Secteur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Secteur>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Secteur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Secteur> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Secteur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Secteur>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Secteur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Secteur> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SecteurTable extends Table
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

        $this->setTable('secteur');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id_secteur');
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

        return $validator;
    }
}
