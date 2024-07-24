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
            <?= $this->Html->link(__('New Reference'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Edit Reference'), ['action' => 'edit', $reference->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reference'), ['action' => 'delete', $reference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reference->id), 'class' => 'side-nav-item']) ?>
            
        </div>
    </aside> -->
    <div class="column column-80">
        <div class="references view content">
        <h3><?= h($reference->name) ?></h3>
        <table>
            <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($reference->name) ?></td>
            </tr>
            <tr>
                <th><?= __('Logo') ?></th>
                <td><?= h($reference->logo) ?></td>
            </tr>
            <tr>
                <th><?= __('Client') ?></th>
                <td><?= $reference->has('client') ? $this->Html->link($reference->client->name, ['controller' => 'Client', 'action' => 'view', $reference->client->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Company') ?></th>
                <td><?= $reference->has('societe') ? $this->Html->link($reference->societe->name, ['controller' => 'Societe', 'action' => 'view', $reference->societe->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Sector') ?></th>
                <td><?= $reference->has('secteur') ? $this->Html->link($reference->secteur->name, ['controller' => 'Secteur', 'action' => 'view', $reference->secteur->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Year') ?></th>
                <td><?= $reference->has('annee') ? $this->Html->link($reference->annee->name, ['controller' => 'Annee', 'action' => 'view', $reference->annee->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Country') ?></th>
                <td><?= $reference->pay['name']?></td>
            </tr>
            <tr>
                <th><?= __('Type') ?></th>
                <td><?= $reference->has('type') ? $this->Html->link($reference->type->name, ['controller' => 'Type', 'action' => 'view', $reference->type->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Link') ?></th>
                <td><?= h($reference->link) ?></td>
            </tr>
        </table>
    </div>
    </div>
</div>
