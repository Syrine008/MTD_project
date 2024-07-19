<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reference $reference
 */
?>
<div class="row">
    <!-- <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List of References'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reference->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reference->id), 'class' => 'side-nav-item']
            ) ?>
        </div>
    </aside> -->
    <div class="column column-80">
        <div class="reference form content">
            <?= $this->Form->create($reference, ['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Edit Reference') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('logo', ['type' => 'file']);
                    echo $this->Form->control('id_client', ['label' => 'Client', 'options' => $client]);
                    echo $this->Form->control('id_societe', ['label' => 'Societe', 'options' => $societe]);
                    echo $this->Form->control('id_secteur', ['label' => 'Secteur', 'options' => $secteur]);
                    echo $this->Form->control('id_annee', ['label' => 'Annee', 'options' => $annee]);
                    echo $this->Form->control('id_pays', ['label' => 'Pays', 'options' => $pays]);
                    echo $this->Form->control('id_type', ['label' => 'Type', 'options' => $type]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
