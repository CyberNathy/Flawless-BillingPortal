<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customer Model
 *
 * @method \App\Model\Entity\Customer newEmptyEntity()
 * @method \App\Model\Entity\Customer newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customer findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Customer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CustomerTable extends Table
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

        $this->setTable('customer');
        $this->setDisplayField('CustomerId');
        $this->setPrimaryKey('CustomerId');
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
            ->scalar('CustomerPrimaryEmailAddrAddress')
            ->maxLength('CustomerPrimaryEmailAddrAddress', 200)
            ->allowEmptyString('CustomerPrimaryEmailAddrAddress');

        $validator
            ->scalar('CustomerSyncToken')
            ->maxLength('CustomerSyncToken', 200)
            ->allowEmptyString('CustomerSyncToken');

        $validator
            ->scalar('Customerdomain')
            ->maxLength('Customerdomain', 100)
            ->allowEmptyString('Customerdomain');

        $validator
            ->scalar('CustomerGivenName')
            ->maxLength('CustomerGivenName', 100)
            ->allowEmptyString('CustomerGivenName');

        $validator
            ->scalar('CustomerDisplayName')
            ->maxLength('CustomerDisplayName', 200)
            ->allowEmptyString('CustomerDisplayName');

        $validator
            ->boolean('CustomerBillWithParent')
            ->allowEmptyString('CustomerBillWithParent');

        $validator
            ->scalar('CustomerFullyQualifiedName')
            ->maxLength('CustomerFullyQualifiedName', 200)
            ->allowEmptyString('CustomerFullyQualifiedName');

        $validator
            ->scalar('CustomerCompanyName')
            ->maxLength('CustomerCompanyName', 100)
            ->allowEmptyString('CustomerCompanyName');

        $validator
            ->scalar('CustomerFamilyName')
            ->maxLength('CustomerFamilyName', 100)
            ->allowEmptyString('CustomerFamilyName');

        $validator
            ->boolean('Customersparse')
            ->allowEmptyString('Customersparse');

        $validator
            ->scalar('CustomerPrimaryPhoneFreeFormNumber')
            ->maxLength('CustomerPrimaryPhoneFreeFormNumber', 20)
            ->allowEmptyString('CustomerPrimaryPhoneFreeFormNumber');

        $validator
            ->boolean('CustomerActive')
            ->allowEmptyString('CustomerActive');

        $validator
            ->boolean('CustomerJob')
            ->allowEmptyString('CustomerJob');

        $validator
            ->numeric('CustomerBalanceWithJobs')
            ->allowEmptyString('CustomerBalanceWithJobs');

        $validator
            ->scalar('CustomerBillAddrCity')
            ->maxLength('CustomerBillAddrCity', 100)
            ->allowEmptyString('CustomerBillAddrCity');

        $validator
            ->scalar('CustomerBillAddrLine1')
            ->maxLength('CustomerBillAddrLine1', 500)
            ->allowEmptyString('CustomerBillAddrLine1');

        $validator
            ->scalar('CustomerBillAddrPostalCode')
            ->maxLength('CustomerBillAddrPostalCode', 9)
            ->allowEmptyString('CustomerBillAddrPostalCode');

        $validator
            ->integer('CustomerBillAddrLat')
            ->allowEmptyString('CustomerBillAddrLat');

        $validator
            ->integer('CustomerBillAddrLong')
            ->allowEmptyString('CustomerBillAddrLong');

        $validator
            ->scalar('CustomerBillAddrCountrySubDivisionCode')
            ->maxLength('CustomerBillAddrCountrySubDivisionCode', 200)
            ->allowEmptyString('CustomerBillAddrCountrySubDivisionCode');

        $validator
            ->integer('CustomerBillAddrId')
            ->allowEmptyString('CustomerBillAddrId');

        $validator
            ->scalar('CustomerPreferredDeliveryMethod')
            ->maxLength('CustomerPreferredDeliveryMethod', 200)
            ->allowEmptyString('CustomerPreferredDeliveryMethod');

        $validator
            ->boolean('CustomerTaxable')
            ->allowEmptyString('CustomerTaxable');

        $validator
            ->scalar('CustomerPrintOnCheckName')
            ->maxLength('CustomerPrintOnCheckName', 100)
            ->allowEmptyString('CustomerPrintOnCheckName');

        $validator
            ->numeric('CustomerBalance')
            ->allowEmptyString('CustomerBalance');

        $validator
            ->scalar('CustomerMetaDataCreateTime')
            ->maxLength('CustomerMetaDataCreateTime', 100)
            ->allowEmptyString('CustomerMetaDataCreateTime');

        $validator
            ->scalar('CustomerMetaDataLastUpdatedTime')
            ->maxLength('CustomerMetaDataLastUpdatedTime', 100)
            ->allowEmptyString('CustomerMetaDataLastUpdatedTime');

        $validator
            ->scalar('time')
            ->maxLength('time', 100)
            ->allowEmptyString('time');

        return $validator;
    }
}
