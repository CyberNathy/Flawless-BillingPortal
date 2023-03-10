<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InvoiceFixture
 */
class InvoiceFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'invoice';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'InvoiceTxnDate' => 'Lorem ipsum dolor sit amet',
                'Invoicedomain' => 'Lorem ipsum dolor sit amet',
                'InvoicePrintStatus' => 'Lorem ipsum dolor sit amet',
                'InvoiceSalesTermRefvalue' => 'Lorem ipsum dolor sit amet',
                'InvoiceTotalAmt' => 1,
                'InvoiceLine' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'InvoiceDueDate' => '',
                'InvoiceApplyTaxAfterDiscount' => 1,
                'InvoiceDocNumber' => 'Lorem ip',
                'Invoicesparse' => 1,
                'InvoiceCustomerMemovalue' => 'Lorem ipsum dolor sit amet',
                'InvoiceDeposit' => 1,
                'InvoiceBalance' => 1,
                'InvoiceCustomerRefname' => 'Lorem ipsum dolor sit amet',
                'InvoiceCustomerRefvalue' => 'Lorem ipsum dolor sit amet',
                'InvoiceTxnTaxDetailTxnTaxCodeRefvalue' => 'Lorem ipsum dolor sit amet',
                'InvoiceTxnTaxDetailTotalTax' => 1,
                'InvoiceTxnTaxDetailTaxLine' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'InvoiceSyncToken' => 'Lorem ipsum dolor sit amet',
                'InvoiceLinkedTxn' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'InvoiceBillEmailAddress' => 'Lorem ipsum dolor sit amet',
                'InvoiceShipAddrCity' => 'Lorem ipsum dolor sit amet',
                'InvoiceShipAddrLine1' => 'Lorem ipsum dolor sit amet',
                'InvoiceShipAddrPostalCode' => 'Lorem i',
                'InvoiceShipAddrLat' => 1,
                'InvoiceShipAddrLong' => 1,
                'InvoiceShipAddrCountrySubDivisionCode' => 'Lorem ipsum dolor sit amet',
                'InvoiceShipAddrId' => 1,
                'InvoiceEmailStatus' => 'Lorem ipsum dolor sit amet',
                'InvoiceBillAddrLine4' => 'Lorem ipsum dolor sit amet',
                'InvoiceBillAddrLine3' => 'Lorem ipsum dolor sit amet',
                'InvoiceBillAddrLine2' => 'Lorem ipsum dolor sit amet',
                'InvoiceBillAddrLine1' => 'Lorem ipsum dolor sit amet',
                'InvoiceBillAddrLong' => 'Lorem ipsum dolor sit amet',
                'InvoiceBillAddrLat' => 'Lorem ipsum dolor sit amet',
                'InvoiceBillAddrId' => 1,
                'InvoiceCustomField' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'InvoiceId' => 1,
                'time' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
