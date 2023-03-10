<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\EmailSubscriber> $emailSubscriber
 */
?>
<div class="emailSubscriber index content">
    <?= $this->Html->link(__('New Email Subscriber'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Email Subscriber') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('subscriber_email') ?></th>
                    <th><?= $this->Paginator->sort('subscriber_firstname') ?></th>
                    <th><?= $this->Paginator->sort('subscriber_lastname') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($emailSubscriber as $emailSubscriber): ?>
                <tr>
                    <td><?= $this->Number->format($emailSubscriber->id) ?></td>
                    <td><?= h($emailSubscriber->subscriber_email) ?></td>
                    <td><?= h($emailSubscriber->subscriber_firstname) ?></td>
                    <td><?= h($emailSubscriber->subscriber_lastname) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $emailSubscriber->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emailSubscriber->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emailSubscriber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailSubscriber->id)]) ?>
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
