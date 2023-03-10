<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Invoice Model
 *
 * @method \App\Model\Entity\Invoice newEmptyEntity()
 * @method \App\Model\Entity\Invoice newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Invoice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Invoice get($primaryKey, $options = [])
 * @method \App\Model\Entity\Invoice findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Invoice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Invoice[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Invoice|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Invoice saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Invoice[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Invoice[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Invoice[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Invoice[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InvoiceTable extends Table
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

        $this->setTable('invoice');
        $this->setDisplayField('InvoiceId');
        $this->setPrimaryKey('InvoiceId');
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
            ->scalar('InvoiceTxnDate')
            ->maxLength('InvoiceTxnDate', 100)
            ->allowEmptyString('InvoiceTxnDate');

        $validator
            ->scalar('Invoicedomain')
            ->maxLength('Invoicedomain', 100)
            ->allowEmptyString('Invoicedomain');

        $validator
            ->scalar('InvoicePrintStatus')
            ->maxLength('InvoicePrintStatus', 100)
            ->allowEmptyString('InvoicePrintStatus');

        $validator
            ->scalar('InvoiceSalesTermRefvalue')
            ->maxLength('InvoiceSalesTermRefvalue', 100)
            ->allowEmptyString('InvoiceSalesTermRefvalue');

        $validator
            ->numeric('InvoiceTotalAmt')
            ->allowEmptyString('InvoiceTotalAmt');

        $validator
            ->scalar('InvoiceLine')
            ->maxLength('InvoiceLine', 4294967295)
            ->allowEmptyString('InvoiceLine');

        $validator
            ->dateTime('InvoiceDueDate')
            ->allowEmptyDateTime('InvoiceDueDate');

        $validator
            ->boolean('InvoiceApplyTaxAfterDiscount')
            ->allowEmptyString('InvoiceApplyTaxAfterDiscount');

        $validator
            ->scalar('InvoiceDocNumber')
            ->maxLength('InvoiceDocNumber', 10)
            ->allowEmptyString('InvoiceDocNumber');

        $validator
            ->boolean('Invoicesparse')
            ->allowEmptyString('Invoicesparse');

        $validator
            ->scalar('InvoiceCustomerMemovalue')
            ->maxLength('InvoiceCustomerMemovalue', 300)
            ->allowEmptyString('InvoiceCustomerMemovalue');

        $validator
            ->allowEmptyString('InvoiceDeposit');

        $validator
            ->numeric('InvoiceBalance')
            ->allowEmptyString('InvoiceBalance');

        $validator
            ->scalar('InvoiceCustomerRefname')
            ->maxLength('InvoiceCustomerRefname', 100)
            ->allowEmptyString('InvoiceCustomerRefname');

        $validator
            ->scalar('InvoiceCustomerRefvalue')
            ->maxLength('InvoiceCustomerRefvalue', 100)
            ->allowEmptyString('InvoiceCustomerRefvalue');

        $validator
            ->scalar('InvoiceTxnTaxDetailTxnTaxCodeRefvalue')
            ->maxLength('InvoiceTxnTaxDetailTxnTaxCodeRefvalue', 200)
            ->allowEmptyString('InvoiceTxnTaxDetailTxnTaxCodeRefvalue');

        $validator
            ->numeric('InvoiceTxnTaxDetailTotalTax')
            ->allowEmptyString('InvoiceTxnTaxDetailTotalTax');

        $validator
            ->scalar('InvoiceTxnTaxDetailTaxLine')
            ->maxLength('InvoiceTxnTaxDetailTaxLine', 4294967295)
            ->allowEmptyString('InvoiceTxnTaxDetailTaxLine');

        $validator
            ->scalar('InvoiceSyncToken')
            ->maxLength('InvoiceSyncToken', 200)
            ->allowEmptyString('InvoiceSyncToken');

        $validator
            ->scalar('InvoiceLinkedTxn')
            ->maxLength('InvoiceLinkedTxn', 4294967295)
            ->allowEmptyString('InvoiceLinkedTxn');

        $validator
            ->scalar('InvoiceBillEmailAddress')
            ->maxLength('InvoiceBillEmailAddress', 100)
            ->allowEmptyString('InvoiceBillEmailAddress');

        $validator
            ->scalar('InvoiceShipAddrCity')
            ->maxLength('InvoiceShipAddrCity', 100)
            ->allowEmptyString('InvoiceShipAddrCity');

        $validator
            ->scalar('InvoiceShipAddrLine1')
            ->maxLength('InvoiceShipAddrLine1', 200)
            ->allowEmptyString('InvoiceShipAddrLine1');

        $validator
            ->scalar('InvoiceShipAddrPostalCode')
            ->maxLength('InvoiceShipAddrPostalCode', 9)
            ->allowEmptyString('InvoiceShipAddrPostalCode');

        $validator
            ->integer('InvoiceShipAddrLat')
            ->allowEmptyString('InvoiceShipAddrLat');

        $validator
            ->integer('InvoiceShipAddrLong')
            ->allowEmptyString('InvoiceShipAddrLong');

        $validator
            ->scalar('InvoiceShipAddrCountrySubDivisionCode')
            ->maxLength('InvoiceShipAddrCountrySubDivisionCode', 100)
            ->allowEmptyString('InvoiceShipAddrCountrySubDivisionCode');

        $validator
            ->integer('InvoiceShipAddrId')
            ->allowEmptyString('InvoiceShipAddrId');

        $validator
            ->scalar('InvoiceEmailStatus')
            ->maxLength('InvoiceEmailStatus', 100)
            ->allowEmptyString('InvoiceEmailStatus');

        $validator
            ->scalar('InvoiceBillAddrLine4')
            ->maxLength('InvoiceBillAddrLine4', 500)
            ->allowEmptyString('InvoiceBillAddrLine4');

        $validator
            ->scalar('InvoiceBillAddrLine3')
            ->maxLength('InvoiceBillAddrLine3', 500)
            ->allowEmptyString('InvoiceBillAddrLine3');

        $validator
            ->scalar('InvoiceBillAddrLine2')
            ->maxLength('InvoiceBillAddrLine2', 500)
            ->allowEmptyString('InvoiceBillAddrLine2');

        $validator
            ->scalar('InvoiceBillAddrLine1')
            ->maxLength('InvoiceBillAddrLine1', 500)
            ->allowEmptyString('InvoiceBillAddrLine1');

        $validator
            ->scalar('InvoiceBillAddrLong')
            ->maxLength('InvoiceBillAddrLong', 100)
            ->allowEmptyString('InvoiceBillAddrLong');

        $validator
            ->scalar('InvoiceBillAddrLat')
            ->maxLength('InvoiceBillAddrLat', 100)
            ->allowEmptyString('InvoiceBillAddrLat');

        $validator
            ->integer('InvoiceBillAddrId')
            ->allowEmptyString('InvoiceBillAddrId');

        $validator
            ->scalar('InvoiceCustomField')
            ->maxLength('InvoiceCustomField', 4294967295)
            ->allowEmptyString('InvoiceCustomField');

        $validator
            ->scalar('time')
            ->maxLength('time', 100)
            ->allowEmptyString('time');

        return $validator;
    }
}
