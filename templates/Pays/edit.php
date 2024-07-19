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

            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pays->id_pays],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pays->id_pays), 'class' => 'side-nav-item']
            ) ?>
        </div>
    </aside> -->
    <div class="column column-80">
        <div class="pays form content">
            <?= $this->Form->create($pays) ?>
            <fieldset>
                <legend><?= __('Edit Country') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
