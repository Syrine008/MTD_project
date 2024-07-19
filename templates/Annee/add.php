<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $annee
 */
?>
<div class="row">
    <!-- <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List of Years'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside> -->
    <div class="column column-80">
        <div class="annee form content">
            <?= $this->Form->create($annee) ?>
            <fieldset>
                <legend><?= __('Add Year') ?></legend>
                <?php
                    echo $this->Form->control('name', ['label' => 'Year']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
