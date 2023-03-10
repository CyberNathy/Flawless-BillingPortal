<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QuoteRequest Model
 *
 * @method \App\Model\Entity\QuoteRequest newEmptyEntity()
 * @method \App\Model\Entity\QuoteRequest newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\QuoteRequest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QuoteRequest get($primaryKey, $options = [])
 * @method \App\Model\Entity\QuoteRequest findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\QuoteRequest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QuoteRequest[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\QuoteRequest|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuoteRequest saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuoteRequest[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\QuoteRequest[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\QuoteRequest[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\QuoteRequest[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class QuoteRequestTable extends Table
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

        $this->setTable('quote_request');
        $this->setDisplayField('id');
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
            ->scalar('first_name')
            ->maxLength('first_name', 100)
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 100)
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 15)
            ->requirePresence('phone_number', 'create')
            ->notEmptyString('phone_number');

        $validator
            ->scalar('phone_type')
            ->maxLength('phone_type', 20)
            ->requirePresence('phone_type', 'create')
            ->notEmptyString('phone_type');

        $validator
            ->scalar('email_address')
            ->maxLength('email_address', 100)
            ->requirePresence('email_address', 'create')
            ->notEmptyString('email_address');

        $validator
            ->scalar('preferred_contact_time')
            ->maxLength('preferred_contact_time', 100)
            ->requirePresence('preferred_contact_time', 'create')
            ->notEmptyString('preferred_contact_time');

        $validator
            ->scalar('service_needed')
            ->maxLength('service_needed', 200)
            ->requirePresence('service_needed', 'create')
            ->notEmptyString('service_needed');

        $validator
            ->scalar('notes')
            ->maxLength('notes', 500)
            ->requirePresence('notes', 'create')
            ->notEmptyString('notes');

        return $validator;
    }
}
