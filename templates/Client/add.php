<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row">
    <!-- <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List of Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside> -->
    <div class="column column-80">
        <div class="client form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Add Client') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('number');
                    echo $this->Form->control('email');
                    echo $this->Form->control('adress');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
