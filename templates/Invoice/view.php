<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->InvoiceId], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Invoice'), ['action' => 'delete', $invoice->InvoiceId], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->InvoiceId), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Invoice'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Invoice'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="invoice view content">
            <h3><?= h($invoice->InvoiceId) ?></h3>
            <table>
                <tr>
                    <th><?= __('InvoiceTxnDate') ?></th>
                    <td><?= h($invoice->InvoiceTxnDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Invoicedomain') ?></th>
                    <td><?= h($invoice->Invoicedomain) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoicePrintStatus') ?></th>
                    <td><?= h($invoice->InvoicePrintStatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceSalesTermRefvalue') ?></th>
                    <td><?= h($invoice->InvoiceSalesTermRefvalue) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceDocNumber') ?></th>
                    <td><?= h($invoice->InvoiceDocNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceCustomerMemovalue') ?></th>
                    <td><?= h($invoice->InvoiceCustomerMemovalue) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceCustomerRefname') ?></th>
                    <td><?= h($invoice->InvoiceCustomerRefname) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceCustomerRefvalue') ?></th>
                    <td><?= h($invoice->InvoiceCustomerRefvalue) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceTxnTaxDetailTxnTaxCodeRefvalue') ?></th>
                    <td><?= h($invoice->InvoiceTxnTaxDetailTxnTaxCodeRefvalue) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceSyncToken') ?></th>
                    <td><?= h($invoice->InvoiceSyncToken) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceBillEmailAddress') ?></th>
                    <td><?= h($invoice->InvoiceBillEmailAddress) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceShipAddrCity') ?></th>
                    <td><?= h($invoice->InvoiceShipAddrCity) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceShipAddrLine1') ?></th>
                    <td><?= h($invoice->InvoiceShipAddrLine1) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceShipAddrPostalCode') ?></th>
                    <td><?= h($invoice->InvoiceShipAddrPostalCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceShipAddrCountrySubDivisionCode') ?></th>
                    <td><?= h($invoice->InvoiceShipAddrCountrySubDivisionCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceEmailStatus') ?></th>
                    <td><?= h($invoice->InvoiceEmailStatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceBillAddrLine4') ?></th>
                    <td><?= h($invoice->InvoiceBillAddrLine4) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceBillAddrLine3') ?></th>
                    <td><?= h($invoice->InvoiceBillAddrLine3) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceBillAddrLine2') ?></th>
                    <td><?= h($invoice->InvoiceBillAddrLine2) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceBillAddrLine1') ?></th>
                    <td><?= h($invoice->InvoiceBillAddrLine1) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceBillAddrLong') ?></th>
                    <td><?= h($invoice->InvoiceBillAddrLong) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceBillAddrLat') ?></th>
                    <td><?= h($invoice->InvoiceBillAddrLat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time') ?></th>
                    <td><?= h($invoice->time) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceTotalAmt') ?></th>
                    <td><?= $invoice->InvoiceTotalAmt === null ? '' : $this->Number->format($invoice->InvoiceTotalAmt) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceDeposit') ?></th>
                    <td><?= $invoice->InvoiceDeposit === null ? '' : $this->Number->format($invoice->InvoiceDeposit) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceBalance') ?></th>
                    <td><?= $invoice->InvoiceBalance === null ? '' : $this->Number->format($invoice->InvoiceBalance) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceTxnTaxDetailTotalTax') ?></th>
                    <td><?= $invoice->InvoiceTxnTaxDetailTotalTax === null ? '' : $this->Number->format($invoice->InvoiceTxnTaxDetailTotalTax) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceShipAddrLat') ?></th>
                    <td><?= $invoice->InvoiceShipAddrLat === null ? '' : $this->Number->format($invoice->InvoiceShipAddrLat) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceShipAddrLong') ?></th>
                    <td><?= $invoice->InvoiceShipAddrLong === null ? '' : $this->Number->format($invoice->InvoiceShipAddrLong) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceShipAddrId') ?></th>
                    <td><?= $invoice->InvoiceShipAddrId === null ? '' : $this->Number->format($invoice->InvoiceShipAddrId) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceBillAddrId') ?></th>
                    <td><?= $invoice->InvoiceBillAddrId === null ? '' : $this->Number->format($invoice->InvoiceBillAddrId) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceId') ?></th>
                    <td><?= $this->Number->format($invoice->InvoiceId) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceDueDate') ?></th>
                    <td><?= h($invoice->InvoiceDueDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('InvoiceApplyTaxAfterDiscount') ?></th>
                    <td><?= $invoice->InvoiceApplyTaxAfterDiscount ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Invoicesparse') ?></th>
                    <td><?= $invoice->Invoicesparse ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('InvoiceLine') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($invoice->InvoiceLine)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('InvoiceTxnTaxDetailTaxLine') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($invoice->InvoiceTxnTaxDetailTaxLine)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('InvoiceLinkedTxn') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($invoice->InvoiceLinkedTxn)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('InvoiceCustomField') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($invoice->InvoiceCustomField)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
