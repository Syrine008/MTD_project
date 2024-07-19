<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $pay
 */
?>
<div class="row">
    <!-- <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List of Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside> -->
    <div class="column column-80">
        <div class="pays form content">
            <?= $this->Form->create($pays) ?>
            <fieldset>
                <legend><?= __('Add Country') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
