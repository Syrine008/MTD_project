<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Secteur $secteur
 */
?>
<div class="row">
    <!-- <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List of Sectors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $secteur->id_secteur],
                ['confirm' => __('Are you sure you want to delete # {0}?', $secteur->id_secteur), 'class' => 'side-nav-item']
            ) ?>
        </div>
    </aside> -->
    <div class="column column-80">
        <div class="secteur form content">
            <?= $this->Form->create($secteur) ?>
            <fieldset>
                <legend><?= __('Edit Sector') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
