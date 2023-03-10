<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmailSubscriber $emailSubscriber
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Email Subscriber'), ['action' => 'edit', $emailSubscriber->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Email Subscriber'), ['action' => 'delete', $emailSubscriber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailSubscriber->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Email Subscriber'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Email Subscriber'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="emailSubscriber view content">
            <h3><?= h($emailSubscriber->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Subscriber Email') ?></th>
                    <td><?= h($emailSubscriber->subscriber_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subscriber Firstname') ?></th>
                    <td><?= h($emailSubscriber->subscriber_firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subscriber Lastname') ?></th>
                    <td><?= h($emailSubscriber->subscriber_lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($emailSubscriber->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
