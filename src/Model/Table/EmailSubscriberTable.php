<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmailSubscriber Model
 *
 * @method \App\Model\Entity\EmailSubscriber newEmptyEntity()
 * @method \App\Model\Entity\EmailSubscriber newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EmailSubscriber[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmailSubscriber get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmailSubscriber findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EmailSubscriber patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmailSubscriber[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmailSubscriber|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmailSubscriber saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmailSubscriber[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EmailSubscriber[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EmailSubscriber[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EmailSubscriber[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmailSubscriberTable extends Table
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

        $this->setTable('email_subscriber');
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
            ->scalar('subscriber_email')
            ->maxLength('subscriber_email', 100)
            ->requirePresence('subscriber_email', 'create')
            ->notEmptyString('subscriber_email');

        $validator
            ->scalar('subscriber_firstname')
            ->maxLength('subscriber_firstname', 100)
            ->requirePresence('subscriber_firstname', 'create')
            ->notEmptyString('subscriber_firstname');

        $validator
            ->scalar('subscriber_lastname')
            ->maxLength('subscriber_lastname', 100)
            ->requirePresence('subscriber_lastname', 'create')
            ->notEmptyString('subscriber_lastname');

        return $validator;
    }
}
