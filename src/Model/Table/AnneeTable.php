<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Annee Model
 *
 * @method \App\Model\Entity\Annee newEmptyEntity()
 * @method \App\Model\Entity\Annee newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Annee> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Annee get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Annee findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Annee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Annee> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Annee|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Annee saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Annee>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Annee>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Annee>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Annee> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Annee>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Annee>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Annee>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Annee> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AnneeTable extends Table
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

        $this->setTable('annee');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id_annee');
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
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        return $validator;
    }
}
