<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Veterinarios Model
 *
 * @method \App\Model\Entity\Veterinario newEmptyEntity()
 * @method \App\Model\Entity\Veterinario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Veterinario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Veterinario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Veterinario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Veterinario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Veterinario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Veterinario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Veterinario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Veterinario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Veterinario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Veterinario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Veterinario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VeterinariosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('veterinarios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 30)
            ->requirePresence('tel', 'create')
            ->notEmptyString('tel');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('matricula')
            ->maxLength('matricula', 100)
            ->requirePresence('matricula', 'create')
            ->notEmptyString('matricula');

        $validator
            ->scalar('sucursal')
            ->maxLength('sucursal', 100)
            ->requirePresence('sucursal', 'create')
            ->notEmptyString('sucursal');

        return $validator;
    }
}
