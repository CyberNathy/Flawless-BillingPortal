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
            <?= $this->Html->link(__('List Quote Request'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="quoteRequest form content">
            <?= $this->Form->create($quoteRequest) ?>
            <fieldset>
                <legend><?= __('Add Quote Request') ?></legend>
                <?php
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('phone_number');
                    echo $this->Form->control('phone_type');
                    echo $this->Form->control('email_address');
                    echo $this->Form->control('preferred_contact_time');
                    echo $this->Form->control('service_needed');
                    echo $this->Form->control('notes');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
