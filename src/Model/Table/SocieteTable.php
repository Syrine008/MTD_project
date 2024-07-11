<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Societe Model
 *
 * @method \App\Model\Entity\Societe newEmptyEntity()
 * @method \App\Model\Entity\Societe newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Societe> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Societe get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Societe findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Societe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Societe> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Societe|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Societe saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Societe>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Societe>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Societe>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Societe> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Societe>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Societe>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Societe>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Societe> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SocieteTable extends Table
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

        $this->setTable('societe');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->maxLength('name', 55)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('adress')
            ->maxLength('adress', 50)
            ->requirePresence('adress', 'create')
            ->notEmptyString('adress');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->integer('number')
            ->requirePresence('number', 'create')
            ->notEmptyString('number');

        return $validator;
    }
}
