<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vacunas Model
 *
 * @method \App\Model\Entity\Vacuna newEmptyEntity()
 * @method \App\Model\Entity\Vacuna newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vacuna[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vacuna get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vacuna findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vacuna patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vacuna[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vacuna|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vacuna saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vacuna[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vacuna[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vacuna[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vacuna[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VacunasTable extends Table
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

        $this->setTable('vacunas');
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
            ->scalar('tipo')
            ->maxLength('tipo', 100)
            ->requirePresence('tipo', 'create')
            ->notEmptyString('tipo');

        $validator
            ->scalar('fdcolocacion')
            ->maxLength('fdcolocacion', 255)
            ->requirePresence('fdcolocacion', 'create')
            ->notEmptyString('fdcolocacion');

        $validator
            ->scalar('idMascota')
            ->maxLength('idMascota', 100)
            ->requirePresence('idMascota', 'create')
            ->notEmptyString('idMascota');

        $validator
            ->scalar('idVeterinario')
            ->maxLength('idVeterinario', 100)
            ->requirePresence('idVeterinario', 'create')
            ->notEmptyString('idVeterinario');

        return $validator;
    }
}
