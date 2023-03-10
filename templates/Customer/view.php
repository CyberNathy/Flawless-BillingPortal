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
            <?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->CustomerId], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->CustomerId], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->CustomerId), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Customer'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customer view content">
            <h3><?= h($customer->CustomerId) ?></h3>
            <table>
                <tr>
                    <th><?= __('CustomerPrimaryEmailAddrAddress') ?></th>
                    <td><?= h($customer->CustomerPrimaryEmailAddrAddress) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerSyncToken') ?></th>
                    <td><?= h($customer->CustomerSyncToken) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customerdomain') ?></th>
                    <td><?= h($customer->Customerdomain) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerGivenName') ?></th>
                    <td><?= h($customer->CustomerGivenName) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerDisplayName') ?></th>
                    <td><?= h($customer->CustomerDisplayName) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerFullyQualifiedName') ?></th>
                    <td><?= h($customer->CustomerFullyQualifiedName) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerCompanyName') ?></th>
                    <td><?= h($customer->CustomerCompanyName) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerFamilyName') ?></th>
                    <td><?= h($customer->CustomerFamilyName) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerPrimaryPhoneFreeFormNumber') ?></th>
                    <td><?= h($customer->CustomerPrimaryPhoneFreeFormNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerBillAddrCity') ?></th>
                    <td><?= h($customer->CustomerBillAddrCity) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerBillAddrLine1') ?></th>
                    <td><?= h($customer->CustomerBillAddrLine1) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerBillAddrPostalCode') ?></th>
                    <td><?= h($customer->CustomerBillAddrPostalCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerBillAddrCountrySubDivisionCode') ?></th>
                    <td><?= h($customer->CustomerBillAddrCountrySubDivisionCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerPreferredDeliveryMethod') ?></th>
                    <td><?= h($customer->CustomerPreferredDeliveryMethod) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerPrintOnCheckName') ?></th>
                    <td><?= h($customer->CustomerPrintOnCheckName) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerMetaDataCreateTime') ?></th>
                    <td><?= h($customer->CustomerMetaDataCreateTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerMetaDataLastUpdatedTime') ?></th>
                    <td><?= h($customer->CustomerMetaDataLastUpdatedTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time') ?></th>
                    <td><?= h($customer->time) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerBalanceWithJobs') ?></th>
                    <td><?= $customer->CustomerBalanceWithJobs === null ? '' : $this->Number->format($customer->CustomerBalanceWithJobs) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerBillAddrLat') ?></th>
                    <td><?= $customer->CustomerBillAddrLat === null ? '' : $this->Number->format($customer->CustomerBillAddrLat) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerBillAddrLong') ?></th>
                    <td><?= $customer->CustomerBillAddrLong === null ? '' : $this->Number->format($customer->CustomerBillAddrLong) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerBillAddrId') ?></th>
                    <td><?= $customer->CustomerBillAddrId === null ? '' : $this->Number->format($customer->CustomerBillAddrId) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerBalance') ?></th>
                    <td><?= $customer->CustomerBalance === null ? '' : $this->Number->format($customer->CustomerBalance) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerId') ?></th>
                    <td><?= $this->Number->format($customer->CustomerId) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerBillWithParent') ?></th>
                    <td><?= $customer->CustomerBillWithParent ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Customersparse') ?></th>
                    <td><?= $customer->Customersparse ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerActive') ?></th>
                    <td><?= $customer->CustomerActive ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerJob') ?></th>
                    <td><?= $customer->CustomerJob ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerTaxable') ?></th>
                    <td><?= $customer->CustomerTaxable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
