<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Invoice> $invoice
 */
?>
<div class="invoice index content">
    <?= $this->Html->link(__('New Invoice'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Invoice') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('InvoiceTxnDate') ?></th>
                    <th><?= $this->Paginator->sort('Invoicedomain') ?></th>
                    <th><?= $this->Paginator->sort('InvoicePrintStatus') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceSalesTermRefvalue') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceTotalAmt') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceDueDate') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceApplyTaxAfterDiscount') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceDocNumber') ?></th>
                    <th><?= $this->Paginator->sort('Invoicesparse') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceCustomerMemovalue') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceDeposit') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceBalance') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceCustomerRefname') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceCustomerRefvalue') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceTxnTaxDetailTxnTaxCodeRefvalue') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceTxnTaxDetailTotalTax') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceSyncToken') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceBillEmailAddress') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceShipAddrCity') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceShipAddrLine1') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceShipAddrPostalCode') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceShipAddrLat') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceShipAddrLong') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceShipAddrCountrySubDivisionCode') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceShipAddrId') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceEmailStatus') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceBillAddrLine4') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceBillAddrLine3') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceBillAddrLine2') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceBillAddrLine1') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceBillAddrLong') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceBillAddrLat') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceBillAddrId') ?></th>
                    <th><?= $this->Paginator->sort('InvoiceId') ?></th>
                    <th><?= $this->Paginator->sort('time') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($invoice as $invoice): ?>
                <tr>
                    <td><?= h($invoice->InvoiceTxnDate) ?></td>
                    <td><?= h($invoice->Invoicedomain) ?></td>
                    <td><?= h($invoice->InvoicePrintStatus) ?></td>
                    <td><?= h($invoice->InvoiceSalesTermRefvalue) ?></td>
                    <td><?= $invoice->InvoiceTotalAmt === null ? '' : $this->Number->format($invoice->InvoiceTotalAmt) ?></td>
                    <td><?= h($invoice->InvoiceDueDate) ?></td>
                    <td><?= h($invoice->InvoiceApplyTaxAfterDiscount) ?></td>
                    <td><?= h($invoice->InvoiceDocNumber) ?></td>
                    <td><?= h($invoice->Invoicesparse) ?></td>
                    <td><?= h($invoice->InvoiceCustomerMemovalue) ?></td>
                    <td><?= $invoice->InvoiceDeposit === null ? '' : $this->Number->format($invoice->InvoiceDeposit) ?></td>
                    <td><?= $invoice->InvoiceBalance === null ? '' : $this->Number->format($invoice->InvoiceBalance) ?></td>
                    <td><?= h($invoice->InvoiceCustomerRefname) ?></td>
                    <td><?= h($invoice->InvoiceCustomerRefvalue) ?></td>
                    <td><?= h($invoice->InvoiceTxnTaxDetailTxnTaxCodeRefvalue) ?></td>
                    <td><?= $invoice->InvoiceTxnTaxDetailTotalTax === null ? '' : $this->Number->format($invoice->InvoiceTxnTaxDetailTotalTax) ?></td>
                    <td><?= h($invoice->InvoiceSyncToken) ?></td>
                    <td><?= h($invoice->InvoiceBillEmailAddress) ?></td>
                    <td><?= h($invoice->InvoiceShipAddrCity) ?></td>
                    <td><?= h($invoice->InvoiceShipAddrLine1) ?></td>
                    <td><?= h($invoice->InvoiceShipAddrPostalCode) ?></td>
                    <td><?= $invoice->InvoiceShipAddrLat === null ? '' : $this->Number->format($invoice->InvoiceShipAddrLat) ?></td>
                    <td><?= $invoice->InvoiceShipAddrLong === null ? '' : $this->Number->format($invoice->InvoiceShipAddrLong) ?></td>
                    <td><?= h($invoice->InvoiceShipAddrCountrySubDivisionCode) ?></td>
                    <td><?= $invoice->InvoiceShipAddrId === null ? '' : $this->Number->format($invoice->InvoiceShipAddrId) ?></td>
                    <td><?= h($invoice->InvoiceEmailStatus) ?></td>
                    <td><?= h($invoice->InvoiceBillAddrLine4) ?></td>
                    <td><?= h($invoice->InvoiceBillAddrLine3) ?></td>
                    <td><?= h($invoice->InvoiceBillAddrLine2) ?></td>
                    <td><?= h($invoice->InvoiceBillAddrLine1) ?></td>
                    <td><?= h($invoice->InvoiceBillAddrLong) ?></td>
                    <td><?= h($invoice->InvoiceBillAddrLat) ?></td>
                    <td><?= $invoice->InvoiceBillAddrId === null ? '' : $this->Number->format($invoice->InvoiceBillAddrId) ?></td>
                    <td><?= $this->Number->format($invoice->InvoiceId) ?></td>
                    <td><?= h($invoice->time) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $invoice->InvoiceId]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invoice->InvoiceId]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $invoice->InvoiceId], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->InvoiceId)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
