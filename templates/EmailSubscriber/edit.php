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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $emailSubscriber->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $emailSubscriber->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Email Subscriber'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="emailSubscriber form content">
            <?= $this->Form->create($emailSubscriber) ?>
            <fieldset>
                <legend><?= __('Edit Email Subscriber') ?></legend>
                <?php
                    echo $this->Form->control('subscriber_email');
                    echo $this->Form->control('subscriber_firstname');
                    echo $this->Form->control('subscriber_lastname');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
