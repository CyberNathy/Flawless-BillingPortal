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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $invoice->InvoiceId],
                ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->InvoiceId), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Invoice'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="invoice form content">
            <?= $this->Form->create($invoice) ?>
            <fieldset>
                <legend><?= __('Edit Invoice') ?></legend>
                <?php
                    echo $this->Form->control('InvoiceTxnDate');
                    echo $this->Form->control('Invoicedomain');
                    echo $this->Form->control('InvoicePrintStatus');
                    echo $this->Form->control('InvoiceSalesTermRefvalue');
                    echo $this->Form->control('InvoiceTotalAmt');
                    echo $this->Form->control('InvoiceLine');
                    echo $this->Form->control('InvoiceDueDate');
                    echo $this->Form->control('InvoiceApplyTaxAfterDiscount');
                    echo $this->Form->control('InvoiceDocNumber');
                    echo $this->Form->control('Invoicesparse');
                    echo $this->Form->control('InvoiceCustomerMemovalue');
                    echo $this->Form->control('InvoiceDeposit');
                    echo $this->Form->control('InvoiceBalance');
                    echo $this->Form->control('InvoiceCustomerRefname');
                    echo $this->Form->control('InvoiceCustomerRefvalue');
                    echo $this->Form->control('InvoiceTxnTaxDetailTxnTaxCodeRefvalue');
                    echo $this->Form->control('InvoiceTxnTaxDetailTotalTax');
                    echo $this->Form->control('InvoiceTxnTaxDetailTaxLine');
                    echo $this->Form->control('InvoiceSyncToken');
                    echo $this->Form->control('InvoiceLinkedTxn');
                    echo $this->Form->control('InvoiceBillEmailAddress');
                    echo $this->Form->control('InvoiceShipAddrCity');
                    echo $this->Form->control('InvoiceShipAddrLine1');
                    echo $this->Form->control('InvoiceShipAddrPostalCode');
                    echo $this->Form->control('InvoiceShipAddrLat');
                    echo $this->Form->control('InvoiceShipAddrLong');
                    echo $this->Form->control('InvoiceShipAddrCountrySubDivisionCode');
                    echo $this->Form->control('InvoiceShipAddrId');
                    echo $this->Form->control('InvoiceEmailStatus');
                    echo $this->Form->control('InvoiceBillAddrLine4');
                    echo $this->Form->control('InvoiceBillAddrLine3');
                    echo $this->Form->control('InvoiceBillAddrLine2');
                    echo $this->Form->control('InvoiceBillAddrLine1');
                    echo $this->Form->control('InvoiceBillAddrLong');
                    echo $this->Form->control('InvoiceBillAddrLat');
                    echo $this->Form->control('InvoiceBillAddrId');
                    echo $this->Form->control('InvoiceCustomField');
                    echo $this->Form->control('time');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
