<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuoteRequest $quoteRequest
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Quote Request'), ['action' => 'edit', $quoteRequest->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Quote Request'), ['action' => 'delete', $quoteRequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quoteRequest->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Quote Request'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Quote Request'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="quoteRequest view content">
            <h3><?= h($quoteRequest->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($quoteRequest->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($quoteRequest->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($quoteRequest->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Type') ?></th>
                    <td><?= h($quoteRequest->phone_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Address') ?></th>
                    <td><?= h($quoteRequest->email_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preferred Contact Time') ?></th>
                    <td><?= h($quoteRequest->preferred_contact_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Needed') ?></th>
                    <td><?= h($quoteRequest->service_needed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notes') ?></th>
                    <td><?= h($quoteRequest->notes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($quoteRequest->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
