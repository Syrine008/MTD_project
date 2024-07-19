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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $annee->id_annee],
                ['confirm' => __('Are you sure you want to delete # {0}?', $annee->id_annee), 'class' => 'side-nav-item']
            ) ?>
        </div>
    </aside> -->
    <div class="column column-80">
        <div class="annee form content">
            <?= $this->Form->create($annee) ?>
            <fieldset>
                <legend><?= __('Edit Year') ?></legend>
                <?php
                    echo $this->Form->control('annee');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
