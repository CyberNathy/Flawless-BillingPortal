<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property string|null $InvoiceTxnDate
 * @property string|null $Invoicedomain
 * @property string|null $InvoicePrintStatus
 * @property string|null $InvoiceSalesTermRefvalue
 * @property float|null $InvoiceTotalAmt
 * @property string|null $InvoiceLine
 * @property \Cake\I18n\FrozenTime|null $InvoiceDueDate
 * @property bool|null $InvoiceApplyTaxAfterDiscount
 * @property string|null $InvoiceDocNumber
 * @property bool|null $Invoicesparse
 * @property string|null $InvoiceCustomerMemovalue
 * @property int|null $InvoiceDeposit
 * @property float|null $InvoiceBalance
 * @property string|null $InvoiceCustomerRefname
 * @property string|null $InvoiceCustomerRefvalue
 * @property string|null $InvoiceTxnTaxDetailTxnTaxCodeRefvalue
 * @property float|null $InvoiceTxnTaxDetailTotalTax
 * @property string|null $InvoiceTxnTaxDetailTaxLine
 * @property string|null $InvoiceSyncToken
 * @property string|null $InvoiceLinkedTxn
 * @property string|null $InvoiceBillEmailAddress
 * @property string|null $InvoiceShipAddrCity
 * @property string|null $InvoiceShipAddrLine1
 * @property string|null $InvoiceShipAddrPostalCode
 * @property int|null $InvoiceShipAddrLat
 * @property int|null $InvoiceShipAddrLong
 * @property string|null $InvoiceShipAddrCountrySubDivisionCode
 * @property int|null $InvoiceShipAddrId
 * @property string|null $InvoiceEmailStatus
 * @property string|null $InvoiceBillAddrLine4
 * @property string|null $InvoiceBillAddrLine3
 * @property string|null $InvoiceBillAddrLine2
 * @property string|null $InvoiceBillAddrLine1
 * @property string|null $InvoiceBillAddrLong
 * @property string|null $InvoiceBillAddrLat
 * @property int|null $InvoiceBillAddrId
 * @property string|null $InvoiceCustomField
 * @property int $InvoiceId
 * @property string|null $time
 */
class Invoice extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'InvoiceTxnDate' => true,
        'Invoicedomain' => true,
        'InvoicePrintStatus' => true,
        'InvoiceSalesTermRefvalue' => true,
        'InvoiceTotalAmt' => true,
        'InvoiceLine' => true,
        'InvoiceDueDate' => true,
        'InvoiceApplyTaxAfterDiscount' => true,
        'InvoiceDocNumber' => true,
        'Invoicesparse' => true,
        'InvoiceCustomerMemovalue' => true,
        'InvoiceDeposit' => true,
        'InvoiceBalance' => true,
        'InvoiceCustomerRefname' => true,
        'InvoiceCustomerRefvalue' => true,
        'InvoiceTxnTaxDetailTxnTaxCodeRefvalue' => true,
        'InvoiceTxnTaxDetailTotalTax' => true,
        'InvoiceTxnTaxDetailTaxLine' => true,
        'InvoiceSyncToken' => true,
        'InvoiceLinkedTxn' => true,
        'InvoiceBillEmailAddress' => true,
        'InvoiceShipAddrCity' => true,
        'InvoiceShipAddrLine1' => true,
        'InvoiceShipAddrPostalCode' => true,
        'InvoiceShipAddrLat' => true,
        'InvoiceShipAddrLong' => true,
        'InvoiceShipAddrCountrySubDivisionCode' => true,
        'InvoiceShipAddrId' => true,
        'InvoiceEmailStatus' => true,
        'InvoiceBillAddrLine4' => true,
        'InvoiceBillAddrLine3' => true,
        'InvoiceBillAddrLine2' => true,
        'InvoiceBillAddrLine1' => true,
        'InvoiceBillAddrLong' => true,
        'InvoiceBillAddrLat' => true,
        'InvoiceBillAddrId' => true,
        'InvoiceCustomField' => true,
        'time' => true,
    ];
}
