<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Societe $societe
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List of Companies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="societe form content">
            <?= $this->Form->create($societe) ?>
            <fieldset>
                <legend><?= __('Add Company') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('adress');
                    echo $this->Form->control('email');
                    echo $this->Form->control('number');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
