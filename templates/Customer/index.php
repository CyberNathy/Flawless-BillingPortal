<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Customer> $customer
 */
?>
<div class="customer index content">
    <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customer') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('CustomerPrimaryEmailAddrAddress') ?></th>
                    <th><?= $this->Paginator->sort('CustomerSyncToken') ?></th>
                    <th><?= $this->Paginator->sort('Customerdomain') ?></th>
                    <th><?= $this->Paginator->sort('CustomerGivenName') ?></th>
                    <th><?= $this->Paginator->sort('CustomerDisplayName') ?></th>
                    <th><?= $this->Paginator->sort('CustomerBillWithParent') ?></th>
                    <th><?= $this->Paginator->sort('CustomerFullyQualifiedName') ?></th>
                    <th><?= $this->Paginator->sort('CustomerCompanyName') ?></th>
                    <th><?= $this->Paginator->sort('CustomerFamilyName') ?></th>
                    <th><?= $this->Paginator->sort('Customersparse') ?></th>
                    <th><?= $this->Paginator->sort('CustomerPrimaryPhoneFreeFormNumber') ?></th>
                    <th><?= $this->Paginator->sort('CustomerActive') ?></th>
                    <th><?= $this->Paginator->sort('CustomerJob') ?></th>
                    <th><?= $this->Paginator->sort('CustomerBalanceWithJobs') ?></th>
                    <th><?= $this->Paginator->sort('CustomerBillAddrCity') ?></th>
                    <th><?= $this->Paginator->sort('CustomerBillAddrLine1') ?></th>
                    <th><?= $this->Paginator->sort('CustomerBillAddrPostalCode') ?></th>
                    <th><?= $this->Paginator->sort('CustomerBillAddrLat') ?></th>
                    <th><?= $this->Paginator->sort('CustomerBillAddrLong') ?></th>
                    <th><?= $this->Paginator->sort('CustomerBillAddrCountrySubDivisionCode') ?></th>
                    <th><?= $this->Paginator->sort('CustomerBillAddrId') ?></th>
                    <th><?= $this->Paginator->sort('CustomerPreferredDeliveryMethod') ?></th>
                    <th><?= $this->Paginator->sort('CustomerTaxable') ?></th>
                    <th><?= $this->Paginator->sort('CustomerPrintOnCheckName') ?></th>
                    <th><?= $this->Paginator->sort('CustomerBalance') ?></th>
                    <th><?= $this->Paginator->sort('CustomerId') ?></th>
                    <th><?= $this->Paginator->sort('CustomerMetaDataCreateTime') ?></th>
                    <th><?= $this->Paginator->sort('CustomerMetaDataLastUpdatedTime') ?></th>
                    <th><?= $this->Paginator->sort('time') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customer as $customer): ?>
                <tr>
                    <td><?= h($customer->CustomerPrimaryEmailAddrAddress) ?></td>
                    <td><?= h($customer->CustomerSyncToken) ?></td>
                    <td><?= h($customer->Customerdomain) ?></td>
                    <td><?= h($customer->CustomerGivenName) ?></td>
                    <td><?= h($customer->CustomerDisplayName) ?></td>
                    <td><?= h($customer->CustomerBillWithParent) ?></td>
                    <td><?= h($customer->CustomerFullyQualifiedName) ?></td>
                    <td><?= h($customer->CustomerCompanyName) ?></td>
                    <td><?= h($customer->CustomerFamilyName) ?></td>
                    <td><?= h($customer->Customersparse) ?></td>
                    <td><?= h($customer->CustomerPrimaryPhoneFreeFormNumber) ?></td>
                    <td><?= h($customer->CustomerActive) ?></td>
                    <td><?= h($customer->CustomerJob) ?></td>
                    <td><?= $customer->CustomerBalanceWithJobs === null ? '' : $this->Number->format($customer->CustomerBalanceWithJobs) ?></td>
                    <td><?= h($customer->CustomerBillAddrCity) ?></td>
                    <td><?= h($customer->CustomerBillAddrLine1) ?></td>
                    <td><?= h($customer->CustomerBillAddrPostalCode) ?></td>
                    <td><?= $customer->CustomerBillAddrLat === null ? '' : $this->Number->format($customer->CustomerBillAddrLat) ?></td>
                    <td><?= $customer->CustomerBillAddrLong === null ? '' : $this->Number->format($customer->CustomerBillAddrLong) ?></td>
                    <td><?= h($customer->CustomerBillAddrCountrySubDivisionCode) ?></td>
                    <td><?= $customer->CustomerBillAddrId === null ? '' : $this->Number->format($customer->CustomerBillAddrId) ?></td>
                    <td><?= h($customer->CustomerPreferredDeliveryMethod) ?></td>
                    <td><?= h($customer->CustomerTaxable) ?></td>
                    <td><?= h($customer->CustomerPrintOnCheckName) ?></td>
                    <td><?= $customer->CustomerBalance === null ? '' : $this->Number->format($customer->CustomerBalance) ?></td>
                    <td><?= $this->Number->format($customer->CustomerId) ?></td>
                    <td><?= h($customer->CustomerMetaDataCreateTime) ?></td>
                    <td><?= h($customer->CustomerMetaDataLastUpdatedTime) ?></td>
                    <td><?= h($customer->time) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customer->CustomerId]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->CustomerId]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->CustomerId], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->CustomerId)]) ?>
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
