<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Client Model
 *
 * @method \App\Model\Entity\Client newEmptyEntity()
 * @method \App\Model\Entity\Client newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Client> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Client get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Client findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Client patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Client> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Client|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Client saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Client>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Client>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Client>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Client> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Client>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Client>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Client>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Client> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ClientTable extends Table
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

        $this->setTable('client');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id_client');

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
            ->integer('number')
            ->requirePresence('number', 'create')
            ->notEmptyString('number');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('adress')
            ->maxLength('adress', 300)
            ->requirePresence('adress', 'create')
            ->notEmptyString('adress');

        return $validator;
    }
}
