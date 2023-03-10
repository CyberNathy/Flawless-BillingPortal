<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\QuoteRequest> $quoteRequest
 */
?>
<div class="quoteRequest index content">
    <?= $this->Html->link(__('New Quote Request'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Quote Request') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('phone_type') ?></th>
                    <th><?= $this->Paginator->sort('email_address') ?></th>
                    <th><?= $this->Paginator->sort('preferred_contact_time') ?></th>
                    <th><?= $this->Paginator->sort('service_needed') ?></th>
                    <th><?= $this->Paginator->sort('notes') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($quoteRequest as $quoteRequest): ?>
                <tr>
                    <td><?= $this->Number->format($quoteRequest->id) ?></td>
                    <td><?= h($quoteRequest->first_name) ?></td>
                    <td><?= h($quoteRequest->last_name) ?></td>
                    <td><?= h($quoteRequest->phone_number) ?></td>
                    <td><?= h($quoteRequest->phone_type) ?></td>
                    <td><?= h($quoteRequest->email_address) ?></td>
                    <td><?= h($quoteRequest->preferred_contact_time) ?></td>
                    <td><?= h($quoteRequest->service_needed) ?></td>
                    <td><?= h($quoteRequest->notes) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $quoteRequest->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quoteRequest->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quoteRequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quoteRequest->id)]) ?>
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
