<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Customer'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customer form content">
            <?= $this->Form->create($customer) ?>
            <fieldset>
                <legend><?= __('Add Customer') ?></legend>
                <?php
                    echo $this->Form->control('CustomerPrimaryEmailAddrAddress');
                    echo $this->Form->control('CustomerSyncToken');
                    echo $this->Form->control('Customerdomain');
                    echo $this->Form->control('CustomerGivenName');
                    echo $this->Form->control('CustomerDisplayName');
                    echo $this->Form->control('CustomerBillWithParent');
                    echo $this->Form->control('CustomerFullyQualifiedName');
                    echo $this->Form->control('CustomerCompanyName');
                    echo $this->Form->control('CustomerFamilyName');
                    echo $this->Form->control('Customersparse');
                    echo $this->Form->control('CustomerPrimaryPhoneFreeFormNumber');
                    echo $this->Form->control('CustomerActive');
                    echo $this->Form->control('CustomerJob');
                    echo $this->Form->control('CustomerBalanceWithJobs');
                    echo $this->Form->control('CustomerBillAddrCity');
                    echo $this->Form->control('CustomerBillAddrLine1');
                    echo $this->Form->control('CustomerBillAddrPostalCode');
                    echo $this->Form->control('CustomerBillAddrLat');
                    echo $this->Form->control('CustomerBillAddrLong');
                    echo $this->Form->control('CustomerBillAddrCountrySubDivisionCode');
                    echo $this->Form->control('CustomerBillAddrId');
                    echo $this->Form->control('CustomerPreferredDeliveryMethod');
                    echo $this->Form->control('CustomerTaxable');
                    echo $this->Form->control('CustomerPrintOnCheckName');
                    echo $this->Form->control('CustomerBalance');
                    echo $this->Form->control('CustomerMetaDataCreateTime');
                    echo $this->Form->control('CustomerMetaDataLastUpdatedTime');
                    echo $this->Form->control('time');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
