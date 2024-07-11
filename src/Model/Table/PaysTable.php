<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pays Model
 *
 * @method \App\Model\Entity\Pay newEmptyEntity()
 * @method \App\Model\Entity\Pay newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Pay> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pay get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Pay findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Pay patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Pay> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pay|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Pay saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Pay>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pay>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pay>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pay> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pay>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pay>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pay>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pay> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PaysTable extends Table
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

        $this->setTable('pays');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id_pays');
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
